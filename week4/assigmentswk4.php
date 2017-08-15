<html>
<?php
echo '<pre>';

// index array numerical keys
$cookie[0] = "chocolate chip";
$cookie[1] = "oatmeal";
$cookie[2] = "biscuit"; 

// associative array alphanumeric keys
$utensils['fork'] = "prick";
$utensils['knife'] = "cut";
$utensils['spoon'] = "scoop"; 
// 1 array no keys short array syntax
$carbs = array('cookies','bread','pasta','rice','potatoes');
// multidimensional array
$people = array
  (
  array("Janice",72,3),
  array("Eunice",49,1),
  array("Maureen",52,2),
  array("Eustace",84,1)
  );
  
// use var_dump on the above arrays
var_dump($cookie);
var_dump($utensils);
var_dump($carbs);
var_dump($people);

// use range function to make an array with a certain reach
$range = range(0,8);

// use array slice function to split an array
print_r(array_slice($range,2));

// add values to an array with array push and array unshift
array_unshift($carbs,"candy");
array_push($carbs,"sugar");
echo $carbs[6].PHP_EOL;
echo $carbs[0].PHP_EOL;

// remove values from array with array pop and array shift
echo array_shift($carbs).PHP_EOL;
array_pop($carbs);
print_r($carbs);

// use count function to count the amount of elements in an array
echo count($carbs).PHP_EOL;

// loop through arrays with for, foreach with values and foreach with keys and values
$cooCount = count($cookie);
for($x = 0; $x < $cooCount; $x++)
{
    echo $cookie[$x].PHP_EOL;
}
foreach($utensils as $x => $x_value) 
{
    echo $x_value.PHP_EOL;
}
foreach($utensils as $x => $x_value) 
{
    echo $x . " is to " . $x_value.PHP_EOL;
}

// loop through arrays with array_walk and use a callback function to adjust values
$callMe = array('phone','fax','pager','skype','whatsapp');
function realCall(&$value,$key)
{
$value="Cellphone";
}
array_walk($callMe,"realCall");
print_r($callMe);

// use array key exists function to check if key exists
if (array_key_exists("fork",$utensils))
{
  echo "there is a fork".PHP_EOL;
}
else
{
  $utensils['fork'] = 'prick';
  echo "NOW there is a fork".PHP_EOL;
}

// use in_array function to check if element exists
if (in_array("potatoes", $carbs))
{
  echo "Potatoes boil em, mash em, stick em in a stew".PHP_EOL;
}
else
{
  echo "You keep nasty chips".PHP_EOL;
}

// fetch all keys with array_keys function
print_r(array_keys($utensils));

// fetch all values with array_values function
print_r(array_values($people));

// use these SORT_LOCALE_STRING, SORT_NUMERIC, SORT_REGULAR, SORT_STRING to sort an array

// use these rsort, asort, arsort, ksort, krsort, usort, natsort to sort an array

// merge two arrays with array_merge

// compare two arrays with compare_diff function

// compare same two arrays with rray_diff_assoc, array_diff_key, array_diff_uasocc() array_diff_ukey functions

// use the ArrayObject class specifically append, asort, natsort methods

// in case not used use these functions
// array_change_key_case, array_chunk, array_column, array_count_values, 
//array_diff_assoc, array_diff_key, array_diff_uassoc, array_diff_ukey, array_diff, 
//array_fill, array_filter, array_flip, array_intersect_assoc, array_intersect_key, 
//array_intersect_uassoc, array_intersect_ukey, array_intersect, array_key_exists,












 echo '</pre>';
 ?>
 </html>