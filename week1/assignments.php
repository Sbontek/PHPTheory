<html>
<?php
//standard tag 
echo '<pre>';
?>
<?php echo 'this is a standard tag' ?>
<?php
// echo tag
?>
<?= 'this is a echo tag' ?>
<?php
// short tag
?>
<?  echo 'this is a short tag' ?>
<?php
// script tag
?>
 <script language="php"> echo 'this is a script tag'</script>
 <?php
 // asp tag
 ?>
 <% %>
 <?php
 // this is a single line comment
 /*
 this is 
 a multiline
 comment
 */
 // scalar data types  boolean int float string
 $sampleInt = 7;
 $sampleBoolean = TRUE;
 $sampleFloat = 5.6;
 $sampleString = 'This is a sample string';
 
 echo 'this is a int scalar datatype'.gettype($sampleInt), PHP_EOL;
 echo 'this is a boolean scalar datatype'.gettype($sampleBoolean), PHP_EOL;
 echo 'this is a float scalar datatype'.gettype($sampleFloat), PHP_EOL;
 echo 'this is a string scalar datatype'.gettype($sampleString), PHP_EOL;
 
 // type casting each data type integer float boolean string array object resource null value

 // type casting from array to object
 
 // variable variables
	$sampleThing = 'Felix';
	$$sampleThing = 'The Cat';
	echo 'Felix '.$Felix ;
	
 // CONSTANTS in php script
	define('Happy', ' Joy Joy');
	echo 'Happy, Happy'.Happy ;
 // var_dump print_r and debug_zval_dump
	$sampleArray = array(1, 2, array("cat", "dog", "mendoza"));
	
	var_dump($sampleArray);
	
	print_r($sampleArray);
	
	debug_zval_dump($sampleArray);
 // isset and empty functions
 
 // assignment operators
 
 // arithmetic operators
 
 // string operators
 
 // comparison operators( 4 equivalence and 2 inequality)
 
 // logical operators
 
 // bitwise operators
 
 // error control operators
 
 // execution operators
 
 // incrementing/decrementing operators
 
 // type operators
 
 // if else statements and nested if else statements
 
 // ternary operator show comparable if else in comment
 
 // experiment with if else combined with isset and empty functions
 
 // switch case statement including default
 
 // while /dowhile for /foreach include break and continue
 
 echo '</pre>';
?>

</html>