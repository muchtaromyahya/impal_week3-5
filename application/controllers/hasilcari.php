<?php
class Hasilcari extends CI_Controller {
    public function index() {
        $this->load->view('hasilcari');
    }
    public function getPeminjam($data_perpus) {
        $this->load->view('hasilcari');
        
    }
    public function back() {
        $this->load->view('hasilcari');
    }
}


?>