<?php

require_once('lib/view.php');
require_once('models/m_pegawai.php');

$pegawai = new Pegawai();

$data['pegawai'] = $pegawai->readAllPegawai();
$data['page'] = "v_pegawai.php";

require_once View::getView('dashboard.php', $data);