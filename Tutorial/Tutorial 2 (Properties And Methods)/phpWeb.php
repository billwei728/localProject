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
		$object2 = new NewClass;

		echo $object->getProperty() . "<br />";
		$object->setNewProperty("This is a user called Wong!");
		echo $object->getProperty();

		echo "<br />";

		$object2->setNewProperty("This is a user called Kok Wei!");
		echo $object2->getProperty();
	?>
</body>
</html>