<?php

require_once('lib/DBClass.php');

class Booking{

	private $db;

	public function Booking(){
		$this->db = new DBClass();
	}

	public function readAllBooking(){
		$query = "Select * from pemesanan";
		return $this->db->getRows($query);
	}	
	
}
	
