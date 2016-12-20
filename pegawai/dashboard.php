<?php

require_once('lib/view.php');
require_once('session.php');

$data['page'] = "v_main.php";

require_once View::getView('dashboard.php', $data);