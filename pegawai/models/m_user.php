<?php

require_once('lib/DBClass.php');

class User{

	private $db;

	public function User(){
		$this->db = new DBClass();
	}

	public function readUser(){
		$query = "Select * from pegawai";
		return $this->db->getRows($query);

		$_SESSION['login_user']
		
		$ses_sql=mysql_query("select nama from pegawai where username='$user_check'", $con);
		$row = mysql_fetch_assoc($ses_sql);
		$login_session =$row['nama'];
		
		$query = "Select * from siswa s join nationality n on
		s.id_nationality = n.id_nationality where id_siswa=".$id;
	}	
	
}
	// Ambil nama karyawan berdasarkan username karyawan dengan mysql_fetch_assoc
