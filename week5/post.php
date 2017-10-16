<?php

echo 'Received the following post data: '.PHP_EOL;

echo '<pre>';

print_r($_POST);

echo '</pre>';

echo 'Name with special chars escaped: '.htmlspecialchars($_REQUEST['name']).PHP_EOL;

?>