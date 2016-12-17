<?php

require_once('lib/view.php');
require_once('models/m_pegawai.php');

$pegawai = new Pegawai();

$data['pegawai'] = $pegawai->readAllPegawai();

require_once View::getView('v_pegawai.php', $data);