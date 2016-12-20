<?php

require_once('lib/DBClass.php');

class Ambil{

	private $db;

	public function Ambil(){
		$this->db = new DBClass();
	}

	public function readAmbil(){
		$query = "Select * from pemesanan where action='terima'";
		return $this->db->getRows($query);
	}	
	
	public function insertPegawai($pegawai, $idPemesanan){
		$query = "UPDATE pemesanan SET pegawai = '$pegawai' WHERE id_pemesanan = '$idPemesanan'";
		$this->db->putRows($query);
	}
	
}
	
