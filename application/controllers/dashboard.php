<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {

	public function index()
	{
		// $API = new mixweb();
		// $API->connect('203.190.113.62', 'rizal', 'kpugm21');
		// $hotspotuser = $API->comm("/ip/hotspot/user/print");
		// $hotspotactive = $API->comm("/ip/hotspot/active/print");
		// $resource = $API->comm("/system/resource/print");
		// $resource = json_encode($resource);
		// $resource = json_decode($resource, true);
		
		// $data = [
		// 	'hotspotuser' => count($hotspotuser),
		// 	'hotspotactive' => count($hotspotactive),
		// 	'cpu' => $resource['0']['cpu-load'],
		// 	'uptime' => $resource['0']['uptime'], 
		// ];
		$this->load->view('template/main');
		$this->template->load('template','beranda', $data);
	}
}
