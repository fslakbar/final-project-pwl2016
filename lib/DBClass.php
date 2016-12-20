<?php

	class DBClass{
		/*
		*	Class Member :
		*		$db 	  - Data base connection
		*		$dbname   - Data base name
		*		$rowColl  - Rows Collectio
		*		$host	  - Server Path
		*		$user	  - User name
		*		$password - Password database
		*/
		
		public $db, $dbname, $rowColl;
		public $host, $user, $password;
		
		/*
		*	Make Objeck for DBClass
		*		$t_host		- House server
		*		$t_dbname	- Database name
		*		$t_user		- User name
		*		$t_pass		- User password
		*/
		
		function __construct(){
			$this->db = false;
			$this->dbname = 'petshop';
			$this->host = 'localhost';
			$this->user = 'root';
			$this->password = '';
		}
		
		/*
		*	Make a connection for default setting
		*	and
		*	Select the database
		*/
		function connect()
		{
			$this->db = mysqli_connect($this->host, $this->user, $this->password, $this->dbname) or die ("Database Access Error".mysqli_error($this->db));
			
			// if($this->db == false) return false;
			// msql_select_db($this->dbname, $this->db);
			
		}
		
		/*
		*	Connection Closed
		*/
		
		function close(){
			mysqli_close($this->db) or die ("Database Access Error".mysqli_error($this->db));
			$this->db = false;
			
		}
		
		/*
		*	What is the purpose of this code ?
		*/
		
		function getRows($sql){
			if(!is_resource($this->db)) $this->connect();
			
			$this->rowColl = mysqli_query($sql) or die("Error : ".mysqli_error($this->db));
			$rows = array();
			
			if(count($this->rowColl) > 1) mysqli_data_seek($this->rowColl,0);
			
			while($row = mysqli_fetch_array($this->rowColl, MYSQL_ASSOC))
				$rows[] = $row;
			
			return $rows;
		}
		/*
		*	Parameter:
		*	$sql - (string) insert query
		*/
		
		function putRows($sql){
			if(!is_resource($this->db)) $this->connect();
			mysqli_query($this->db, $sql) or die("Qry : " . $sql . "Insertion/Updation Error...".mysqli_error($this->db));
		}
		
		
	}

?>