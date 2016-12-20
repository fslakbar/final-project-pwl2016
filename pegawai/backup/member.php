<?php

require_once('lib/view.php');
require_once('models/m_member.php');

$member = new Member();

$data['member'] = $member->readAllMember();
$data['page'] = "v_member.php";

require_once View::getView('dashboard.php', $data);