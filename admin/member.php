<?php

require_once('lib/view.php');
require_once('models/m_member.php');

$member = new Member();

$data['member'] = $member->readAllMember();

require_once View::getView('v_member.php', $data);