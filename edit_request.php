<?php

require_once('lib/DBClass.php');
require_once('model/m_request.php');

	$member = new Request();
	$db = new DBClass();
	
	if(isset($_POST['request_submit'])){
	$id_member    = $_POST['request_id_member'];
	$id_hewan     = $_POST['request_id_hewan'];
	$tanggal	  = $_POST['request_pet_calender'];
	$jenis_servis = $_POST['request_pet_services'];
	$tipe_servis  = $_POST['request_pet_type'];
	$catatan	  = $_POST['request_note'];
	
	$phpdate = strtotime($tanggal);
	$tanggal = date('Y-m-d H:i:s', $phpdate);
	
	
	$member->insertDataRequest($id_member, $id_hewan, $tanggal, $jenis_servis, $tipe_servis, $catatan);
	echo "Request is Complited";
	}
	
?>