<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_relasi extends CI_Controller {

	public function tambah_paket()
	{
        $data['title'] = "Relasi";
        $this->load->model('m_relasi');
        $data['data'] = $this->m_relasi->get_relasi();
        $this->load->view('../views/tagihan/data-tagihan', $data);
	}
}