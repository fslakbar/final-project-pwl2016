<?php

require_once('lib/DBClass.php');

class Pegawai{

	private $db;

	public function Pegawai(){
		$this->db = new DBClass();
	}

	public function readAllPegawai(){
		$query = "Select * from pegawai";
		return $this->db->getRows($query);
	}	
	
}
	
