<?php

require_once('lib/view.php');
require_once('lib/DBClass.php');
require_once('models/m_order.php');

$order = new Order();
$db = new DBClass();

$data['page'] = "v_main.php";
$data['order'] = $order->readOrder();

require_once View::getView('dashboard.php', $data);