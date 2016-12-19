<?php

require_once('lib/view.php');

$data['page'] = "v_about.php";

require_once View::getView('dashboard.php', $data);