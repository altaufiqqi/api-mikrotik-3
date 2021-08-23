<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pelanggan_data extends CI_Controller {

	public function index()
	{
		// $API = new mixweb();
		// $API->connect('203.190.113.62', 'rizal', 'kpugm21');
		// $pelanggan = $API->comm("/ip/hotspot/user/print");

		// $pelanggan = json_encode($pelanggan);
		// $pelanggan = json_decode($pelanggan, true);

		// $data = [
		// 	'totalpelanggan' => count($pelanggan),
		// 	'pelanggan' => $pelanggan,
		// ];
		$this->load->view('template/main');
		$this->load->view('pelanggan/pelanggan_data');
		
	}
}

ini_set('display_errors', 'off');