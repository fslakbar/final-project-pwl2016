<?php

require_once('lib/view.php');
require_once('models/m_booking.php');

$booking = new Booking();

$data['booking'] = $booking->readAllBooking();

require_once View::getView('v_booking.php', $data);