<?php

require_once('lib/DBClass.php');
require_once('model/m_member.php');

	$member = new Member();
	$db = new DBClass();
	
	if(isset($_POST['reg_register'])){
		
	$id_member        = $_POST['reg_id_member'];
	$username         = $_POST['reg_username'];
	$password	      = $_POST['reg_password'];
	$nama		      = $_POST['reg_name'];
	$jenis_kelamin	  = $_POST['reg_mf'];
	$alamat	          = $_POST['reg_address'];
	$email	          = $_POST['reg_email'];
	$nohp             = $_POST['reg_nohp'];
	
	$member->insertDataMember($id_member, $username, $password, $nama, $jenis_kelamin, $alamat, $email, $nohp);
	echo "Registrations Complited";
	}
	
?>
<br/><a href ="index.php">Home</a>