<html>
<?php
echo '<pre>';

// function without arguments
function saySomething1()
{
    echo "Something".PHP_EOL;
}
saySomething1();


// function with arguments
function saySomething2($toSay)
{
    echo $toSay.PHP_EOL;
}
saySomething2("Something Again");

// function with return value
function mathStuff($d, $e)
{
    $f = $d + $e;
    return $f;
}
echo "25 plus 17 equals ".mathStuff(25, 17).PHP_EOL;
// experiment with variable scope, variables in and outside the function, use globals and $_GLOBAL array
$food = "Poop";

function eatMe() 
{
    echo $food.PHP_EOL; // doesn't work since right now the var isnt flagged for use within this function
}
eatMe();

// global
function eatMe2() 
{
    global $food;
    echo $food.PHP_EOL; // works now because its flagged as a global.
}
eatMe2();
//   $GLOBALS array
$d = 25;
$e = 17;
function mathStuff2()
{
    $GLOBALS['f'] = $GLOBALS['d'] + $GLOBALS['e'];
}
mathStuff2();
echo $d." plus ".$e." equals ".$f.PHP_EOL;
// make function use func_num_args and func_get_arg to retrieve parameters
function showAmountContent()
{
    $numbah = func_num_args();
    $content = func_get_args();
    echo "amount of arguments is ".$numbah.PHP_EOL;
    echo "content of arguments is ";
    var_dump($content);
}
showAmountContent('ah','wim','bo','weh');

// use scalar type declarations in a function
/*
        function giefNumbah(int $numbah2 = NULL)
        {
            echo $numbah2.PHP_EOL;
        }
        giefNumbah('squirrel');  //as this is a string php throws an error and wont execute the function
*/        
// use return type declarations in a function
/*  cant get this to work, throws error expecting { instead of :
        function ranDOM($fancyNumbah,$fancyNumbah2): int
        {
            return $fancyNumbah + $fancyNumbah2;
        }
        var_dump(ranDom(12,6));
*/

// use pass by reference in a function
function passMe($puff)
{
    echo $puff.PHP_EOL;
}
$huff = "Pass";
passMe($huff);
// use variadics in a function
function weirdWords(...$woeirds)
{
    foreach ($woeirds as $wird)
    {
        echo $wird.PHP_EOL;
    }
}
weirdWords('blegh','frollick','tenacity');
// use argument unpacking in a function
function openMe($n, $g)
{
    echo "contents of array is ".$n.' and '.$g.PHP_EOL;
}
$thing = ['surprise!','Surprises!'];
openMe(...$thing);










 echo '</pre>';
 ?>
 </html>