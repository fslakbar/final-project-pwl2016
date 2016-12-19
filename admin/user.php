<?php

require_once('lib/view.php');
require_once('models/m_user.php');

$user = new User();

$data['user'] = $user->readAllBooking();
$data['page'] = "v_user.php";

require_once View::getView('dashboard.php', $data);