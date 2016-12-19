<?php

require_once('lib/view.php');
require_once('lib/DBClass.php');
require_once('models/m_member.php');

$id = $_GET['id'];

$data['page'] = "v_edit_member.php";

$member = new Member();
$s = $member->readMember($id);

if(!empty($_POST)){

	$member->updateMember($id, $_POST);
	header("location:member.php");

}	

$data['st'] = $s[0];

require_once View::getView('dashboard.php', $data);

