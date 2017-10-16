<?php
// setcookie
$cookie_name = "testCookie1";
$cookie_value = "This is a test Cookie";
setcookie($cookie_name, $cookie_value, time() + (86400 * 3), "/");


// setrawcookie- 

// call values from the cookie through the following values
// $_COOKIE 
if(!isset($_COOKIE[$cookie_name])) 
{
    echo "Cookie named '".$cookie_name."' is not set!";
} else 
{
    echo "Cookie '".$cookie_name."' is set!<br>";
    echo "Value is: ".$_COOKIE[$cookie_name].PHP_EOL;
}
// $_REQUEST not working because cookies aren't in the $_REQUEST global per default adjust in php.ini under request_order if needed
//var_dump($_REQUEST);
?>