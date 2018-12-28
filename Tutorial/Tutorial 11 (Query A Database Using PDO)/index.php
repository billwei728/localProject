<?php
	include 'includes/dbh.inc.php';
	include 'includes/user.inc.php';
	// include 'includes/viewuser.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Learning Page</title>
	<link rel="shortcut icon" href="images/icon/download.ico" type="image/x-icon" />
</head>
<body>
	<?php
		$object = new User;
		echo $object->getAllUsers();
	?>
</body>
</html>