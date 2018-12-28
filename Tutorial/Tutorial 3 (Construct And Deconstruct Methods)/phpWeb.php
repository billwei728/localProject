<?php
	/*An example could be if we wanted to open a 
	database connection in the constructor, 
	and close the connection in the destructor.*/
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
		echo $object->getProperty() . "<br />";
	?>
</body>
</html>