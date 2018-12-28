<?php
	include 'includes/users.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Learning Page</title>
	<link rel="shortcut icon" href="images/icon/download.ico" type="image/x-icon" />
</head>
<body>
	<?php
		/*$users = new Users;
		echo $users->first;*/

		$users = new Users('John', 'Doe', 'Blond', 'Brown');
		$users2 = new Users('Daniel', 'Nielsen', 'Brown', 'Blue');
		echo $users->fullName();
		echo "<br />";
		echo $users2->fullName();
	?>
</body>
</html>