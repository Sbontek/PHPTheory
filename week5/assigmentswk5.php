<?php
// setcookie
$cookie_name = "testCookie1";
$cookie_value = "This is a test Cookie";
setcookie($cookie_name, $cookie_value, time() + (86400 * 3), "/");
?>

<html>
<?php
//header('Location: http://www.example.com/');
// that header redirects to the url above


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

// session_destroy 
// unset the variables first
// session_unset(); // remove two slashes at start to use
// removes session
// session_destroy(); // remove two slashes at start to use



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

// with either sessions or cookies use serialize and unserialize

// html form which uses post to send to php script
?>
<form action="/action_page.php" method="post">

<?php
// html form which uses get to send to php script
?>
<form action="/action_page.php" method="get">

<?php
// html form with two text input areas named with arrays i.e. <input name="FormArray[]"> read the values with a php script

// check with an html form if you can read data from the $_REQUEST variable

// use htmlspecialchars function in one of the above php scripts

// use urlencode function in a hyperlink with a variable that stems from a html form

// html form and PHP script with filter_var with all validate filters sanitize filters and other filters

// make a script which converts a array to JSON or XML and shows it on screen

// make a script which reads out JSON-data or XML-data and shows it on screen in plain text

// web service for project to consume and post data in JSON or XML

// find a webservice which works via SOAP and call it with php script

// use an API from https://openweathermap.org/api, http://opendata.rdw.nl/ or another open-data API













 echo '</pre>';
 ?>
 </html>