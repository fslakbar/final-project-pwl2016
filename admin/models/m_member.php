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
	
	public function readMember($id){
		$query = "Select * from member where id_member=".$id;
		return $this->db->getRows($query);		
	}

	public function updateMember($id, $data){
		$username = $data['input_username'];
		$password = $data['input_pass'];
		$nama = $data['input_nama'];
		$jk = $data['input_jk'];
		$alamat = $data['input_alamat'];
		$email = $data['input_email'];
		$no_hp = $data['input_no_hp'];

		$query = "update member set username='$username', password='$password', nama='$nama', jk='$jk', alamat='$alamat', email='$email', no_hp='$no_hp'";
		$query.= " where id_member=$id";
		$this->db->putRows($query);			
	}

	public function deleteMember($id){
		$sql = "Delete from member Where id_member=$id";
		$this->db->putRows($sql);		
	}


}
	
