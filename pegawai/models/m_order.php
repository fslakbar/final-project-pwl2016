<?php

require_once('lib/DBClass.php');

class Order{

	private $db;

	public function Order(){
		$this->db = new DBClass();
	}

	public function readOrder(){
		$query = "Select a.id_pemesanan, b.id_member, c.id_hewan, b.nama, c.jenis_hewan, c.nama_hewan,
				a.tanggal, a.jenis_servis, a.tipe_servis, a.catatan, b.no_hp, a.pegawai from pemesanan a, 
				member b, hewan c where a.id_member = b.id_member and a.id_hewan = c.id_hewan and a.pegawai is not null";
		return $this->db->getRows($query);
	}	
	
}
	
