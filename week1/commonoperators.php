<html>
<?php
echo '<pre>';
?>
<?php

 // assignment operators
	$giveMeValue = 'this is my value';
	echo 'value of the variable is '.$giveMeValue.PHP_EOL;
    
 // arithmetic operators
	$add = 45 + 7;
    $subt = 45 - 7;
    $mult = 45 * 7;
    $divi = 45 / 7;
    $modu = 45 % 7;
    $powe = 45 ** 7;

 // string operators
 // (concatenation operator = .)
    echo '45 plus 7 equals '.$add.PHP_EOL;
    echo '45 minus 7 equals '.$subt.PHP_EOL;
    echo '45 multiplied by 7 equals '.$mult.PHP_EOL;
    echo '45 divided by 7 equals '.$divi.PHP_EOL;
    echo '45 modulo 7 equals '.$modu.PHP_EOL;
    echo '45 to the 7th power equals '.$powe.PHP_EOL;
    
 // comparison operators( 4 equivalence and 2 inequality)
 
    $string10 = '10';
    $int10 = 10;
    $int5 = 5;
    
    var_dump( $string10 == $int10 );
    var_dump( $string10 === $int10 );
    var_dump( $string10 != $int10 );
    var_dump( $string10 !== $int10 );
    var_dump( $int10 < $int5 );
    var_dump( $int10 > $int5 );
 
 // logical operators
 
    $varT = true;
    $varT2 = true;
    $varF = false;

if (($varT && $varT2) == true)
{
    echo 'AND operator found both conditions to be true'.PHP_EOL;
}
if (($varT || $varT2) == true)
{
    echo 'OR operator found one or both conditions to be true'.PHP_EOL;
}
if (($varT XOR $varF) == true)
{
    echo 'XOR operator found only one condition to be true'.PHP_EOL;
}






?>


<?php
 echo '</pre>';
 ?>
 </html>