<?php

require_once('lib/view.php');
require_once('models/m_user.php');

$user = new User();

$data['user'] = $user->readAllBooking();

require_once View::getView('v_user.php', $data);