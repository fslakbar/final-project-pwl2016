<?php

require_once('lib/DBClass.php');
require_once('model/m_hewan.php');

	$member = new Hewan();
	$db = new DBClass();
	
	if(isset($_POST['reg_register_pet'])){
		
	$nama_hewan  = $_POST['reg_pet_name'];
	$jml_hewan   = $_POST['reg_pet_number_pet'];
	$jenis_hewan = $_POST['reg_pet_type_pet'];
	$usia		 = $_POST['reg_pet_age_pet'];
	
	$member->insertDataHewan($nama_hewan, $jml_hewan, $jenis_hewan, $usia);
	echo "Registrations Pet is Complited";
	}
	
?>