<?php

require_once('lib/DBClass.php');
require_once('model/m_member.php');

	$member = new Member();
	$db = new DBClass();
	
	if(isset($_POST['reg_register'])){
		
	$username = $_POST['reg_username'];
	$password = $_POST['reg_password'];
	$nama	  = $_POST['reg_fullname'];
	$jk		  = $_POST['reg_mf'];
	$alamat	  = $_POST['reg_address'];
	$email	  = $_POST['reg_email'];
	$nohp	  = $_POST['reg_nohp'];
	
	$member->insertDataMember($username, $password, $nama, $jk, $alamat, $email, $nohp);
	echo "Registrations Complited";
	}
	
?>