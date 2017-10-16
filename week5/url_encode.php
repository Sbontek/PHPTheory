<?php



echo '<pre>';
print_r($_POST);
echo '</pre>';

echo 'Click <a href="https://www.google.nl/search?q='.urlencode($_POST['name']).'">here</a> to search for your name on google';

?>
