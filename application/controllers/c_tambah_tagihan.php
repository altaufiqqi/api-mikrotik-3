<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_tambah_tagihan extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model(tbh_tagihan_m)
	}

	public function index()
	{
		$data['row'] = $this->tbh_tagihan_m->get();
		$this->template->load('template', 'tagihan/tambah-tagihan')
		
	}
	public function add()
	{
		$tbh_tagihan = new stdClass();
		$tbh_tagihan->id_data_tagihan = null;
		$tbh_tagihan->nama = null;
	}
	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add'])){
			$this->tbh_tagihan_m->add($post);
		} else if(isset($_POST['edit'])){
			$this->tbh_tagihan_m->edit($post);
		}

		if($this->db->affected_rows() > 0){
			$this->$session->set_flashdata('success', 'Data berhasil disimpan');
		}
		redirect('tbh_tagihan_item');
	}
}

ini_set('display_errors', 'off');