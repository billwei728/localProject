<?php

	class User extends Dbh {

		public function getAllUsers() {

			$sql = "SELECT * FROM user";
			$stmt = $this->connect()->query($sql);

			while ($row = $stmt->fetch()) {
				echo $row['userName'];
				// $uid = $row['userName'];
				// return $uid;
			}
		}

		public function getUsersWithCountCheck() {

			$id = "ee8b9052-0506-11e9-8763-1062e5f524dc";
			$uid = "kokwei123";

			$sql = "SELECT * FROM user WHERE id=? AND userName=?";
			$stmt = $this->connect()->prepare($sql);
			$stmt->execute([$id, $uid]);

			if ($stmt->rowCount()) {
				while ($row = $stmt->fetch()) {
					return $row['userName'];
				}
			} 

		}

	}

?>