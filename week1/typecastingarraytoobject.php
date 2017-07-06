<html>
<?php
echo '<pre>';

 // type casting from array to object
$ranAr = array('number zero','number one','number two');


var_dump($ranAr);

$ranObj = (object) $ranAr;

var_dump($ranObj);












 echo '</pre>';
 ?>
 </html>