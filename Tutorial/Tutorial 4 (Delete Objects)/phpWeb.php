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
		// Delete Object
		unset($object);
		echo $object->getProperty() . "<br />";
	?>
</body>
</html>