<?php

require_once('lib/view.php');
require_once('models/m_order.php');

$order = new Order();

$data['order'] = $order->readOrder();
$data['page'] = "v_order.php";

require_once View::getView('dashboard.php', $data);