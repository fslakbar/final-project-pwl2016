<?php

require_once('lib/DBClass.php');
require_once('model/m_request.php');

	$member = new Request();
	$db = new DBClass();
	
	if(isset($_POST['request_submit'])){
		
	$nama         = $_POST['request_name'];
	$jenis_hewan  = $_POST['request_pet_kind'];
	$nama_hewan	  = $_POST['request_pet_name'];
	$tanggal	  = $_POST['request_pet_calender'];
	$jenis_servis = $_POST['request_pet_services'];
	$tipe_servis  = $_POST['request_pet_type'];
	$catatan	  = $_POST['request_note'];
	
	$phpdate = strtotime($tanggal);
	$tanggal = date('Y-m-d H:i:s', $phpdate);
	
	
	$member->insertDataRequest($nama, $jenis_hewan, $nama_hewan, $tanggal, $jenis_servis, $tipe_servis, $catatan);
	echo "Request is Complited";
	}
	
?>