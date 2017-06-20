<html>
<?php
echo '<pre>';
  // var_dump print_r and debug_zval_dump
	$sampleArray = array(1, 2, array("cat", "dog", "mendoza"));
	
	var_dump($sampleArray);
	
	print_r($sampleArray);
	
	debug_zval_dump($sampleArray);



?>

<?php
 echo '</pre>';
 ?>
 </html>