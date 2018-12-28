<?php
	include 'includes/newclass.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Learning Page</title>
	<link rel="shortcut icon" href="images/icon/download.ico" type="image/x-icon" />
</head>
<body>
	<?php
		// Access to static variable
		// echo NewClass::$static;

		echo NewClass::staticMethod();
	?>
</body>
</html>