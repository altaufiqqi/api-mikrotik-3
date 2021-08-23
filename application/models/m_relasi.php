<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include "../views/paket/koneksi_db.php";

class m_relasi extends CI_Model {

	public function get_relasi()
	{
		$this->db->select(['a.id_pelanggan','a.nama','b.id_paket','b.tagihan']);
		$this->db->from('tb_tambah_paket b');
		$this->db->join('tb_data_pelanggan a', 'a.id_angkatan = b.id_angkatan', 'left');
		$this->db->order_by('nama','asc');
		$return = $this->db('');
		return $return->result();
	}
}