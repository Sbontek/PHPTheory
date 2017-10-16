<?php

$json = '{"first_name":"Susanna","last_name":"Bontekoe","assignment":"week 5"}';

$object = json_decode($json);

echo 'first_name: ' . $object->first_name . PHP_EOL; 
echo 'last_name: ' . $object->last_name . PHP_EOL; 
echo 'assignment: ' . $object->assignment . PHP_EOL;

?>