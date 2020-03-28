<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	Hello World!

	<!-- FIND the Video here: https://www.youtube.com/watch?v=ZdP0KM49IVk&list=PLlj0ik1QSBLBQh_ohwDjGuV2N5qMTc-9u&index=12&t=304s -->

	<?php
		// The user can't see the php code, but only the output

		echo "Hello World";

		$myVar = "This is my variable";
		echo $myVar;

		$number = 5;
		$number2 = 3
		$sum = $number2 + $number;
		echo $sum;

		$concatenatedString = $myVar . " : Remo"; // Use "." to concatenate
		echo concatenatedString;
		
		/*
			OPERATORS: 
				==
				!==
				and
				or
		*/

		$loggedIn = true;

		if ($loggedIn == true){
			echo "You are logged in";
		} else{
			echo "Please log in";
		}

		$people = array("Alice", "Tom", "Bob");
		print_r($people); // print out he whole array
		echo $people[0];

		foreach($person as $people){
			echo $person . ' ';
		}

	?>



</body>
</html>