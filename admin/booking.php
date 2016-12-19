<?php

require_once('lib/view.php');
require_once('models/m_booking.php');

$booking = new Booking();

$data['booking'] = $booking->readAllBooking();
$data['page'] = "v_booking.php";

require_once View::getView('dashboard.php', $data);