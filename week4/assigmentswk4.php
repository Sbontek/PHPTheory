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
  array(
        'name' => "Janice",
        'age' => 72,
        'miles per minute' => 3,
        ),
  array(
        'name' => "Eunice",
        'age' => 49,
        'miles per minute' => 1,
        ),
  array(
        'name' => "Maureen",
        'age' => 52,
        'miles per minute' => 2,
        ),
  array(
        'name' => "Euginia",
        'age' => 84,
        'miles per minute' => 1,
        )
  );
  
// use var_dump on the above arrays
echo '$cookie'.PHP_EOL;
var_dump($cookie);
echo '$utensils'.PHP_EOL;
var_dump($utensils);
echo '$carbs'.PHP_EOL;
var_dump($carbs);
echo '$people'.PHP_EOL;
var_dump($people);

// use range function to make an array with a certain reach
$range = range(0,8);
var_dump($range);

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
echo 'array_keys'.PHP_EOL;
print_r(array_keys($utensils));

// fetch all values with array_values function
echo 'array_values'.PHP_EOL;
print_r(array_values($people));

// use these SORT_LOCALE_STRING, SORT_NUMERIC, SORT_REGULAR, SORT_STRING to sort an array
// sort_locale_string
$animals = array('Turkey','Cow','Horse','Eagle','Whale');
echo 'animals array normal'.PHP_EOL;
sort($animals, SORT_LOCALE_STRING);
echo 'SORT_LOCALE_STRING'.PHP_EOL;
var_dump($animals);

// sort numeric
sort($animals, SORT_NUMERIC);
echo 'SORT_NUMERIC'.PHP_EOL;
var_dump($animals);

// sort regular
sort($animals, SORT_REGULAR);
echo 'SORT_REGULAR'.PHP_EOL;
var_dump($animals);

// sort string
sort($animals, SORT_STRING);
echo 'SORT_STRING'.PHP_EOL;
var_dump($animals);

// use these rsort, asort, arsort, ksort, krsort, usort, natsort to sort an array
// rsort
$meats = array('hotdogs','steak','bacon','drumsticks','chicken nuggets');
echo 'meats array normal'.PHP_EOL;
var_dump($meats);
rsort($meats);
echo 'rsort'.PHP_EOL;
var_dump($meats);

// asort
asort($meats);
echo 'asort'.PHP_EOL;
var_dump($meats);

// arsort
arsort($meats);
echo 'arsort'.PHP_EOL;
var_dump($meats);

// ksort
ksort($meats);
echo 'ksort'.PHP_EOL;
var_dump($meats);

// krsort
krsort($meats);
echo 'krsort'.PHP_EOL;
var_dump($meats);

// usort
usort($meats);
echo 'usort'.PHP_EOL;
var_dump($meats);

// natsort
natsort($meats);
echo 'natsort'.PHP_EOL;
var_dump($meats);

// merge two arrays with array_merge
echo 'array_merge'.PHP_EOL;
print_r(array_merge($carbs,$meats));

// compare two arrays with array_diff function
echo 'array_diff'.PHP_EOL;
print_r(array_diff($carbs,$meats));

// compare same two arrays with array_diff_assoc, array_diff_key, array_diff_uasocc() array_diff_ukey functions
$numbah1 = array('1','2','4','6');
$numbah2 = array('1','2','3','4');
// array_diff_assoc
$diff1=array_diff_assoc($numbah1,$numbah2);
echo "Array_diff_assoc".PHP_EOL;
print_r($diff1);

// array_diff_key
$diff2=array_diff_key($numbah1,$numbah2);
echo "Array_diff_key".PHP_EOL;
print_r($diff2);

// array_diff_uasocc
function uAsocc($a,$b)
{
if ($a===$b)
  {
  return 0;
  }
  return ($a>$b)?1:-1;
}


$diff3=array_diff_uassoc($numbah1,$numbah2,"uAsocc");
echo "Array_diff_uassoc".PHP_EOL;
print_r($diff3);

// array_diff_ukey
function uKey($a,$b)
{
if ($a===$b)
  {
  return 0;
  }
  return ($a>$b)?1:-1;
}


$diff4=array_diff_ukey($numbah1,$numbah2,"uKey");
echo "Array_diff_ukey".PHP_EOL;
print_r($diff4);

// use the ArrayObject class specifically append, asort, natsort methods
$ranArr = array("6","8","1","2","16");

$arrObj1 = new ArrayObject($ranArr);
echo "baseline arrayObject".PHP_EOL;
print_r($arrObj1);
$arrObj2 = clone $arrObj1;

echo "arrayObject append".PHP_EOL;
$arrObj1->append('32');
print_r($arrObj1);
$arrObj2 = clone $arrObj1;

$arrObj1->asort();
echo "arrayObject asort".PHP_EOL;
print_r($arrObj1);

$arrObj2->natsort();
echo "arrayObject natsort".PHP_EOL;
print_r($arrObj2);

// in case not used use these functions
// array_change_key_case, array_chunk, array_column, array_count_values, 
//array_diff_assoc, array_diff_key, array_diff_uassoc, array_diff_ukey, array_diff, 
//array_fill, array_filter, array_flip, array_intersect_assoc, array_intersect_key, 
//array_intersect_uassoc, array_intersect_ukey, array_intersect, array_key_exists,

// array_change_key_case
echo "array utensils with array_change_key_case".PHP_EOL;
print_r(array_change_key_case($utensils,CASE_UPPER));

// array_chunk
echo "array meats with array_chunks".PHP_EOL;
print_r(array_chunk($meats,2));

// array_column 
echo "array people with array_column to show ages".PHP_EOL;
$arrAges = array_column($people, 'age');
print_r($arrAges);

// array_count_values
$numbah3 = array(1,2,4,4,2,6,8,1,8,8,8);
echo "baseline array numbah3".PHP_EOL;
print_r($numbah3);
echo "array_count_values".PHP_EOL;
print_r(array_count_values($numbah3));

// array_fill 
$numbah4 = array(1,5,7,2,5);
echo "baseline array numbah4".PHP_EOL;
print_r($numbah4);
echo "array_fill".PHP_EOL;
$numbah4=array_fill(5,1,42);
print_r($numbah4);

// array_filter 
function filterTryEven($var)
{
return(!($var & 1));
}
echo "array numbah3 with array_filter (even)".PHP_EOL;
print_r(array_filter($numbah3,"filterTryEven"));

// array_flip 
echo "baseline array utensils".PHP_EOL;
print_r($utensils);
$flippy=array_flip($utensils);
echo "utensils with keys and values switched around, array_flip".PHP_EOL;
print_r($flippy);

// array_intersect_assoc 
echo "array_intersect_assoc (arrays numbah1 and numbah2".PHP_EOL;
$interSectA=array_intersect_assoc($numbah1,$numbah2);
print_r($interSectA);

// array_intersect_key
echo "array_intersect_key".PHP_EOL;
$interSectK=array_intersect_key($numbah1,$numbah2);
print_r($interSectK);

// array_intersect_uassoc 
echo "array_intersect_uassoc".PHP_EOL;
$interSectUA=array_intersect_uassoc($numbah1,$numbah2,"filterTryEven");
print_r($interSectUA);

// array_intersect_ukey 
echo "array_intersect_ukey".PHP_EOL;
$interSectUK=array_intersect_ukey($numbah1,$numbah2,"filterTryEven");
print_r($interSectUK);

// array_intersect 
echo "array_intersect".PHP_EOL;
$interSect=array_intersect($numbah1,$numbah2);
print_r($interSect);

// array_key_exists 
echo "array_key_exists".PHP_EOL;
if (array_key_exists("fork",$utensils))
  {
  echo "Key fork exists!";
  }
else
  {
  echo "Key fork does not exist!";
  }










 echo '</pre>';
 ?>
 </html>