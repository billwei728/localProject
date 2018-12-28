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
		$object = new NewClass;

		echo "<br />";
		echo $object . "<br />";
	?>
</body>
</html>