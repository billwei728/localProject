<?php

	class dbh {

		private $servername;
		private $username;
		private $password;
		private $dbname;

		protected function connect() {
			$this->servername = "localhost";
			$this->username = "root";
			$this->password = "stboleh";
			$this->dbname = "basedb";

			$conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

			return $conn;
		}

	}

?>