<?php

require_once('lib/DBClass.php');

	class Request{
		
		private $db;
		
		public function Request(){
			$this->db = new DBClass();
		}
		
		public function insertDataRequest($m_nama, $m_jenis_hewan, $m_nama_hewan, $m_tanggal, $m_jenis_servis, $m_tipe_servis, $m_catatan){
			$query = "insert into pemesanan(nama, jenis_hewan, nama_hewan, tanggal, jenis_servis, tipe_servis, catatan)
				values('$m_nama', '$m_jenis_hewan', '$m_nama_hewan', '$m_tanggal', '$m_jenis_servis', '$m_tipe_servis', '$m_catatan')";
			$this->db->putRows($query);
		}
		
		
	}


?>