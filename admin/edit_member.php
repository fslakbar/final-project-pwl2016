<?php

require_once('lib/view.php');
require_once('models/m_member.php');

$member = new Member();

$data['page'] = "v_edit_member.php";

$id = $_POST['id'];
$s = $member->readMember($id);

if(!empty($_POST)){

	$member->updateMember($id, $_POST);
	$success = "Data Berhasil di Update";

}	

$data['st'] = $s[0];

require_once View::getView('v_edit_member.php', $data);

