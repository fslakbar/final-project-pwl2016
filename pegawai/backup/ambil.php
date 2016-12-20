<?php

require_once('lib/view.php');
require_once('lib/DBClass.php');
require_once('session.php');
require_once('models/m_ambil.php');

$data['page'] = "v_main.php";

$ambil = new Ambil();
$db = new DBClass();
	
if(!empty($_GET)){
	$idPemesanan = $_GET['id'];
	$ambil->insertPegawai($id_peg, $idPemesanan);	
}

require_once View::getView('dashboard.php', $data);

