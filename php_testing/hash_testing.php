<!DOCTYPE html>
<html>
	<head>

	</head>
	<body>
		<form action="" method="post">
		Input: <input type="text" name="input">
		<input type="submit" name="Submit">

		<?php
		$input = $_POST["input"];

		echo hash("sha512", "salt" . $input);
		?>
		</form>
	</body>
</html>