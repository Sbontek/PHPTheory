<html>
<?php
echo '<pre>';

// session_start
session_start();

echo '<pre>';
// session_id-functies
session_id();
// $_SESSION variable
$_SESSION["icecream"] = "mint";
$_SESSION["cookies"] = "chocolatechip";
echo "Icecream is ".$_SESSION["icecream"].PHP_EOL;
echo "Cookies is ".$_SESSION["cookies"].PHP_EOL;


$serializedSession = serialize($_SESSION);
echo "Serialized session: " . $serializedSession.PHP_EOL;

$unserializedSession = unserialize($serializedSession);

print_r($unserializedSession);



// session_destroy 
// unset the variables first
// session_unset(); // remove two slashes at start to use
// removes session
// session_destroy(); // remove two slashes at start to use














 echo '</pre>';
 ?>
 </html>