<?php

require_once('lib/view.php');
require_once('lib/DBClass.php');
require_once('models/m_user.php');

$data['page'] = "v_user.php";

$user = new User;
$s = $user->readUser();

$data['st'] = $s[0];

require_once View::getView('dashboard.php', $data);

