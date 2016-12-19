<?php

require_once('lib/DBClass.php');

	class Hewan{
		
		private $db;
		
		public function Hewan(){
			$this->db = new DBClass();
		}
		
		public function insertDataHewan($m_nama_hewan, $m_jml_hewan, $m_jenis_hewan, $m_usia){
			$query = "insert into hewan(nama_hewan, jml_hewan, jenis_hewan, usia)
				values('$m_nama_hewan', '$m_jml_hewan', '$m_jenis_hewan', '$m_usia')";
			$this->db->putRows($query);
		}
		
		
	}


?>