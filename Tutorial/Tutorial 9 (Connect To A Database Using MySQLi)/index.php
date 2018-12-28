<?php
	include 'includes/dbh.inc.php';
	include 'includes/user.inc.php';
	include 'includes/viewuser.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Learning Page</title>
	<link rel="shortcut icon" href="images/icon/download.ico" type="image/x-icon" />
</head>
<body>
	<?php
		$users = new ViewUser();
		$users->showAllUsers();
	?>
</body>
</html>