<!DOCTYPE html>
<html>
<head>
	<title>Learning Page</title>
	<link rel="shortcut icon" href="images/icon/download.ico" type="image/x-icon" />
</head>
<body>
	<form action="calc.php" method="POST">
		<input type="text" name="num1" />
		<input type="text" name="num2" />
		<select name="cal">
			<option value="add">Add</option>
			<option value="sub">Subtract</option>
			<option value="mul">Multiply</option>
		</select>
		<button type="submit">Calculate</button>
	</form>
</body>
</html>