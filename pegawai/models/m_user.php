<?php

require_once('lib/DBClass.php');
require_once('session.php');

class User{

	private $db;

	public function User(){
		$this->db = new DBClass();
	}

	public function readUser(){
		$query = "Select * from pegawai";
		return $this->db->getRows($query);
		
		$user_check=$_SESSION['login_user'];
		
		// Ambil nama karyawan berdasarkan username karyawan dengan mysql_fetch_assoc
		$ses_sql=mysql_query("select nama from pegawai where username='$user_check'", $connection);
		$data = mysql_fetch_assoc($ses_sql);
		$id_pegawai = $data['id_pegawai'];
		$username = $data['username'];
		$login_session =$row['password'];
		$login_session =$row['nama'];
		$login_session =$row['keahlian'];
		$login_session =$row['jk'];
		$login_session =$row['status'];
		$login_session =$row['alamat'];
	}	
	
}
	// Ambil nama karyawan berdasarkan username karyawan dengan mysql_fetch_assoc
