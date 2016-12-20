<?php

require_once('lib/DBClass.php');

	class Hewan{
		
		private $db;
		
		public function Hewan(){
			$this->db = new DBClass();
		}
		
		public function insertDataHewan($m_id_hewan, $m_nama_hewan, $m_jenis_hewan, $m_usia){
			$query = "insert into hewan(id_hewan, nama_hewan, jenis_hewan, usia)
				values('$m_id_hewan', '$m_nama_hewan', '$m_jenis_hewan', '$m_usia')";
			$this->db->putRows($query);
		}
		
		
	}


?>