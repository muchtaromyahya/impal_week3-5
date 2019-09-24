<?php 
 
class model_m extends CI_Model{
	public function denda($hari){
		$denda = $hari *1000;
		if($denda > 100000){
			return 100000;
		}
		else{
			return $denda;
		}
	}
	public function waktu_denda($time){
		date_default_timezone_set('Asia/Jakarta');
        $date = date('Y-m-d');
        $now = strtotime($date);
        $then = strtotime($time);
        $diff = $now - $then;
        $telat = floor($diff / (60 * 60 * 24));
        if ($telat >=7) {
            return $telat-7;
        } else {
            return 0;
        }
	}
	public function getdata($nim, $kode_inventaris_buku){
		$this->db->where('nim', $nim);
		$this->db->where('kode_inventaris_buku', $kode_inventaris_buku);
		// $result= $this->db->get('mahasiswa',1);
		$result=$this->db->get('data_peminjaman', 1);
		// $this->db->join('mahasiswa', ('nim=nim'));
		// $result = $this->db->get('mahasiswa');
		return $result;
	}

	public function updateTable($data_perpus){	
		$this->db->where('kode_inventaris_buku', $data_perpus['kode_inventaris_buku']);
		$this->db->update('data_peminjaman',$data_perpus);
	}
}