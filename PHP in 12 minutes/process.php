<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php

		$name = $_POST["name"]; // We get the input variable with _POST.
								// -POST is an array
		echo "Hello, " . $name;
	?>

</body>
</html>