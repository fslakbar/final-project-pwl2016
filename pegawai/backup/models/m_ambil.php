<?php

require_once('lib/DBClass.php');
require_once('session.php');

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
	
	public function readOrder(){
		$query = "Select * from pemesanan where pegawai='$id_peg'";
		return $this->db->getRows($query);
	}	
	
	
}
	
