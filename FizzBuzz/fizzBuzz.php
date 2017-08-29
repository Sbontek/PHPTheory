<html>
<?php
// an attempt to do the fizz buzz game in php
// rules  print numbers till 100 consecutively
// for every multiple of 3 say fizz
// for every multiple of 5 say buzz
// for every multiple of both 3 and 5 say fizz buzz
echo "<pre>";
for ($i = 1; $i <= 100; $i++) // runs from 1 to 100
{
	$result = $i;

	if (($i % 3 == 0)&&($i % 5 == 0)) // checks for divisibility by 3 and 5, if yes changes result to FizzBuzz
    {
        $result = "FizzBuzz"; 
    }
    elseif ($i % 3 == 0) // if first check was not applicable, checks for divisibility by 3, if yes changes result to Fizz
    {
        $result = "Fizz";
    }
    elseif ($i % 5 == 0) // if first check was not applicable, checks for divisibility by 3 if yes changes result to Buzz
    {
        $result = "Buzz";
    }
    echo $result.PHP_EOL; // prints out either the integer or filled in string
}









echo "</pre>";


?>
</html>