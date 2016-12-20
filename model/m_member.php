<?php

require_once('lib/DBClass.php');

	class Member{
		
		private $db;
		
		public function Member(){
			$this->db = new DBClass();
		}
		
		public function insertDataMember($mem_id_member, $mem_username, $mem_password, $mem_nama, $mem_jk, $mem_alamat, $mem_email, $mem_nohp){
			$query = "insert into member(id_member, username, password, nama, jk, alamat, email, no_hp)
				values('$mem_id_member', '$mem_username', PASSWORD('$mem_password'), '$mem_nama', '$mem_jk', '$mem_alamat', '$mem_email','$mem_nohp')";
			$this->db->putRows($query);
		}
		
		
	}


?>