<?php

if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
	echo $_POST['email'] . ' is not a valid email.' . PHP_EOL;
}


function isAboveTen($number) {
	return $number > 10;
}

$numbersOnly = filter_var($_POST['number'], FILTER_SANITIZE_NUMBER_INT);

if (filter_var($numbersOnly, FILTER_CALLBACK, array('options' => 'isAboveTen'))) {
	echo "Good job, you entered a number above 10!";
} else {
	echo "You didn't enter a number above 10!";
}


?>