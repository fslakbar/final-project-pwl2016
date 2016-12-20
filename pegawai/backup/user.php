<?php

require_once('lib/view.php');
require_once('lib/DBClass.php');
require_once('session.php');

$data['page'] = "v_user.php";


require_once View::getView('dashboard.php', $data);

