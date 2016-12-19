<?php

require_once('lib/view.php');
require_once('models/m_member.php');

$member = new Member();

$id = $_GET['id'];

if(!empty($id)){
	$member->deleteMember($id);
	$success = "Data Berhasil di Hapus";
}

$data['page'] = "v_member.php";
$data['member'] = $member->readAllMember();

require_once View::getView('dashboard.php', $data);

