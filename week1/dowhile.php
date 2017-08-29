<html>
<?php
echo '<pre>';



// Experimenteer met while, do/while, for, for each en pas ook break en continue toe

$int = 1;

// while
while($int <= 15)
{
    echo $int++.PHP_EOL;
}

// do while
do
{
    echo "the int is now 15".PHP_EOL;
}
while($int == 15);

// for
for ( $int2 = 10; $int2 <= 100; $int2 += 10) {
	echo $int2.PHP_EOL;
}

// for each

$exampleArray = array("never", "gonna", "give", "you", "up");


foreach($exampleArray as $entry)
{
    echo $entry." ";
}

// break and continue

for($int3 = 0; $int3 < 20; $int3++)
{
    if($int3 == 15)
    {
        echo "achieved 15 and continued with printing increasing values".PHP_EOL;
        continue;
    }
    echo $int3.PHP_EOL;
}

for($int3 = 0; $int3 < 20; $int3++)
{
    if($int3 == 15)
    {
         echo "achieved 15 and stopped".PHP_EOL;
         break;
    }
    echo $int3.PHP_EOL;
}









 echo '</pre>';
 ?>
 </html>