<?php

require_once('lib/DBClass.php');
require_once('session.php');

class Order{

	private $db;

	public function readOrder($id_peg){
		$query = "Select * from pemesanan where pegawai= '$id_peg'";
		return $this->db->getRows($query);
	}	
	
}
	
