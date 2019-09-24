<?php
//defined('BASEPATH') OR exit('No direct script access allowed');
 
class controller_m extends CI_Controller {
	public function index(){
		date_default_timezone_get('Asia/jakarta');
		$this->load->view('home');
	}
	public function getcontroller_m(){
		$nim = $this->input->post('nim', true);
		$kode_inventaris_buku = $this->input->post('kode_inventaris_buku', true);
		$validasi =$this->model_m->getdata($nim, $kode_inventaris_buku);
		if ($validasi->num_rows()== 1){
			$temp = $validasi->row_array();
			$data_perpus =[
				'nim' => $temp["nim"],
				'kode_inventaris_buku' => $temp["kode_inventaris_buku"],
				'judul_buku' => $temp["judul_buku"],
				'tgl_pinjam' => $temp["tgl_pinjam"],
				'tgl_tempo' => $temp["tgl_tempo"],
				'tgl_kembali' => $temp["tgl_kembali"],
				'keterlambatan' => $temp["keterlambatan"],
				'denda' => $temp["denda"],
			];
			return $data_perpus;
		}
		else {
			$this->session->set_flashdata('error', 'Peminjam tidak ditemukan');
			redirect('controller_m');
		}
	}
	public function getPeminjam(){
		date_default_timezone_get('Asia/jakarta');
		$data_perpus = $this->getcontroller_m();
		if ($data_perpus['tgl_tempo'] == null ){
			$data_perpus['keterlambatan'] = $this->model_m->waktu_denda($data_perpus['tgl_pinjam']);
			$data_perpus['tgl_tempo'] = date('Y-m-d');
			$data_perpus['denda']= $this->model_m->denda($data_perpus['keterlambatan']);
			$this->model_m->updateTable($data_perpus);
		}
		$this->db->where('nim', $data_perpus['nim']);
		$result=$this->db->get('mahasiswa',1);
		$nama=$result->row_array();
		$data_hasil =[
				'nama'=> $data_perpus["nama"],
				'nim' => $data_perpus["nim"],
				'kode_inventaris_buku' => $data_perpus["kode_inventaris_buku"],
				'judul_buku' => $data_perpus["judul_buku"],
				'tgl_pinjam' => $data_perpus["tgl_pinjam"],
				'tgl_tempo' => $data_perpus["tgl_tempo"],
				'tgl_kembali' => $data_perpus["tgl_kembali"],
				'keterlambatan' => $data_perpus["keterlambatan"],
				'denda' => $data_perpus["denda"],
		];
		$this->session->set_userdata($data_hasil);
		$this->session->set_flashdata('succes', 'data peminjam ditemukan');
		redirect('hasilcari');
	}
	public function back(){
		redirect('hasilcari');
	}
}
?>