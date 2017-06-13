<html>
<?php
//standard tag 
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
 
 echo 'this is a int scalar datatype'.gettype($sampleInt);
 echo 'this is a boolean scalar datatype'.gettype($sampleBoolean);
 echo 'this is a float scalar datatype'.gettype($sampleFloat);
 echo 'this is a string scalar datatype'.gettype($sampleString);
 

?>

</html>