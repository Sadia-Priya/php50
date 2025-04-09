<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/media.css">
</head>
<body>
	<div class="container">
		<h1>Hello, World!</h1>
		<?php
		
		$name = "Sadia";
		$age = 25;
		$price = 99.99;
		$isOnline = true;
		echo "Hello World!";
		echo "<br>";
		echo "My name is $name<br>";
		print "This is a print statement.";
		print "<br>";
		print "Age: $age <br>";
		$intVar = 10;
		$floatVar = 10.5;
		$stringVar = "Hello";
		$boolVar = true;
		$arrayVar = array(1, 2, 3);
		$nullVar = null;
		$firstName = "Sadia";
		$lastName = "Islam";
		$fullName = $firstName . " " . $lastName;
		echo $fullName."<br>";
		echo strlen("Hello"); 
		echo "<br>"     ;
		echo "<br>";    
		echo strrev("Hello");           
		echo strpos("Hello world", "world"); 
		$x = 10;
		$y = 20.5;
		$sum = $x + $y;
		echo "<br>". $sum."<br>";
		$val = "10";
		$intVal = (int)$val;
		$floatVal = (float)$val;
		echo $intVal + 5;  // 15
		$a = 10;
		$b = 3;
		echo $a + $b;
		echo $a - $b;
		echo $a * $b;
		echo $a / $b;
		echo $a % $b;
		$num = 5;
		$num += 10;  // 15
		echo $num;
		$a = 5;
		$b = "5";
		var_dump($a == $b);  // true
		var_dump($a === $b); // false
		$x = 10;
		$y = 20;
		if($x < 15 && $y > 15) {
		    echo "True";
		}

		$score = 85;
		if ($score > 50) {
		    echo "Passed";
		}
		$score = 45;
		if ($score >= 50) {
		    echo "Pass";
		} else {
		    echo "Fail";
		}

		$marks = 70;
		if ($marks >= 90) {
		    echo "A Grade";
		} elseif ($marks >= 70) {
		    echo "B Grade";
		} else {
		    echo "C Grade";
		}
		$age = 18;
		$status = ($age >= 18) ? "Adult" : "Minor";
		echo $status;
		define("SITE_NAME", "MyWebsite");
		echo SITE_NAME;
		$var = null;
		if (!isset($var)) {
		    echo "Not set";
		}
		$var = 10.5;
		echo gettype($var); // double


		?>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
	<script src="js/script.js"></script>

</body>
</html>
