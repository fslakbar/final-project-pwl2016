<?php

require_once('lib/DBClass.php');

class Member{

	private $db;

	public function Member(){
		$this->db = new DBClass();
	}

	public function readAllMember(){
		$query = "Select * from member";
		return $this->db->getRows($query);
	}	
	
}
	
