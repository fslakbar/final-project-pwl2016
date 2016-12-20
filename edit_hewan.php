<?php

require_once('lib/DBClass.php');
require_once('model/m_hewan.php');

	$member = new Hewan();
	$db = new DBClass();
	
	if(isset($_POST['reg_register_pet'])){
		
	$id_hewan  = $_POST['reg_id_hewan'];
	$nama_hewan   = $_POST['reg_pet_name'];
	$jenis_hewan = $_POST['req_pet_kind'];
	$usia		 = $_POST['reg_pet_age_pet'];
	
	$member->insertDataHewan($id_hewan, $nama_hewan, $jenis_hewan, $usia);
	echo "Registrations Pet is Complited";
	}
	
?>