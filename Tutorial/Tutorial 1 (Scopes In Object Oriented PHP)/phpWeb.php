<?php
	include 'includes/parentclass.inc.php';
	include 'includes/newclass.inc.php';

	// $object = new Newclass;
	$object = new Parentclass;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Learning Page</title>
	<link rel="shortcut icon" href="images/icon/download.ico" type="image/x-icon" />
</head>
<body>
	<?php
		echo $object->name;
		echo "<br />";

		echo $object->name();
		echo "<br />";

		echo $object->name();
		echo "<br />";

		$cars = array("Volvo", "BMW", "Toyota"); 
		echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
	?>
</body>
</html>