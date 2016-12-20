<?php

require_once('lib/DBClass.php');

	class Request{
		
		private $db;
		
		public function Request(){
			$this->db = new DBClass();
		}
		
		public function insertDataRequest($m_id_member, $m_id_hewan, $m_tanggal, $m_jenis_servis, $m_tipe_servis, $m_catatan){
			$query = "insert into pemesanan(id_member, id_hewan, tanggal, jenis_servis, tipe_servis, catatan)
				values('$m_id_member', '$m_id_hewan', '$m_tanggal', '$m_jenis_servis', '$m_tipe_servis', '$m_catatan')";
			$this->db->putRows($query);
		}
		
		
	}


?>