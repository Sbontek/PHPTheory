<html>
<?php
echo '<pre>';


// strings double and single quotes

echo 'Down at an English fair'.',one evening I was there<br>';
echo "When I heard a showman shouting underneath the flare<br>";

// strings with variables

$coco = "I've got a lovely bunch of coconuts";
$ones = "Big ones, small ones, some as big as your head";

echo $coco.'<br>There they are, all standing in a row<br>';
echo "$ones<br>Give them a twist a flick of the wrist<br>That's what the showman said<br>";

// multiple control characters (including \n)

echo "I've got a lovely bunch of coconuts\n";
echo "Every ball you throw will make me rich\r";
echo "There stands me wife, the idol of me life\R<br>"; 
echo "Singing roll up bowl or ball a penny a pinch\cx<br>";

// heredoc

echo <<<EOT
Roll up bowl or ball, a penny a pitch
Roll up bowl or ball, a penny a pitch
Roll up bowl or ball, roll up bowl or ball
Singing roll up bowl or ball, a penny a pitch<br>
EOT;

// nowdoc

echo <<<'EOT'
Ive got a lovely bunch of coconuts
(Theyre lovely)
There they are all standing in a row
(One, two, three, four)
Big ones, small ones, some as big as your head
(And bigger)<br>
EOT;

// escaping multiple strings
echo "Give them a \"twist\" a flick of the wrist".PHP_EOL;
echo "Thats what the \"showman\" said".PHP_EOL;

// strlen
// make a var with string as value
$str1 = 'random string';
// use strlen with that var as input to determine amount of bytes in string, and print it with echo.
echo "length of the string is:  ".strlen($str1).PHP_EOL; 

// strtr
// print string, replacing letters Aieo with Iuoe
echo strtr("Anpit jeko horo","Aieo","Iuoe").PHP_EOL;

//string as array; print middle character of string, overwrite and print again
$stringThing = 'cattycampus';
// find string length
$stringLen = strlen($stringThing);
// find middle character placement by halving the length and rounding down
$middleNum = (floor($stringLen / 2));
echo $stringThing.PHP_EOL;
echo $middleNum.PHP_EOL;
// echo middle character
echo substr(($stringThing),($middleNum),1).PHP_EOL;
// replace middle character and print string
echo substr_replace($stringThing,"w",$middleNum,1).PHP_EOL;

// compare strings with the == and the === operators
$stringA = 12345;
$stringB = '12345';
if ($stringA == $stringB)
{
    echo 'String A and B are equal aka have the same value and may not be of the same type'.PHP_EOL;
}
else
{
    echo 'String A and B are not equal'.PHP_EOL;
}
if ($stringA === $stringB)
{
    echo 'String A and B are identical aka have the same value and are of the same type'.PHP_EOL;
}
else
{
    echo 'String A and B are not identical'.PHP_EOL;
}
// strcmp
$stringC = 'Happy Happy Joy Joy';
$stringD = 'Happy happy joy joy';
echo 'case sensitive match'.strcmp($stringC,$stringD).PHP_EOL;
// strcasecmp
echo 'case insensitve match'.strcasecmp($stringC,$stringD).PHP_EOL;
// substr_compare
echo 'substring match'.substr_compare($stringC,'Joy',12,3).PHP_EOL;

// strpos
// prints out number value of position of the first instance of the specified string in this case "it"
echo strpos("Is it really what it is?","it").PHP_EOL;

// strstr
// finds specified string and prints the string from that starting point
// (theres a optional boolean to print what comes in front of the specified string)
echo strstr("Is it really what it is?","it").PHP_EOL;

// stripos 
// prints out number value of position of the first instance of the specified string in this case "it"
// (case insensitive)
echo stripos("Is it really what it is?","IT").PHP_EOL;

// stristr
// finds specified string and prints the string from that starting point
// (theres a optional boolean to print what comes in front of the specified string)
// (case insensitive)
echo stristr("Is it really what it is?","IT").PHP_EOL;

// strspn, strcspan, str_replace, substr_replace,str_ireplace, met zowel string als arrays. Beschrijf in comment wat er gebeurd.
// strspn
$strVar = 'Enter random sentence here';
$arrVar = array("Enter", "random", "sentence", "here");

echo strspn($strVar,"tEern").PHP_EOL;
//print_r (strspn($arrVar,"tEern"));  doesnt seem to work with an array

// strcspn
echo strcspn($strVar,"tEern").PHP_EOL;
//print_r (strcspn($arrVar,"tEern")); doesnt seem to work with an array

// str_replace
echo str_replace("random","poignant",$strVar).PHP_EOL;
print_r (str_replace("random","poignant",$arrVar));

// substr_replace
echo substr_replace($strVar,"poignant",6).PHP_EOL;
print_r (substr_replace($arrVar,"poignant",0));  // since it works with a numbered start of replacement instead of a word to replace, replaced all entries in the array

// substr_ireplace
echo str_ireplace("random","poignant",$strVar).PHP_EOL;
print_r (str_ireplace("random","poignant",$arrVar));

// substring extracting
// alread done up above

// format strings for multiple languages using setlocale-method
// setlocale seems to only work once per page. recommend to use LC_TIME instead of LC_ALL due to differences in the use of , and . in numbers i.e.
/*
        setlocale(LC_TIME, 'nld_NLD');
        echo strftime('%A', time());
        setlocale(LC_ALL,'en_US');
        echo strftime('%A', time());
        setlocale(LC_TIME, 'de_DE');
        echo strftime('%A', time());
        setlocale(LC_TIME, 'en_EN');
        echo strftime('%A', time());

        setlocale(LC_ALL,NULL);
*/
//setlocale(LC_ALL, 'en_US');
//echo strftime('%A', time());


// number_format
// out puts 1 billion in the format of 2 decimal points, using . for the thousands and , as the decimal point aka dutch style
echo number_format("1000000000",2,",",".").PHP_EOL;
// out puts 1 billion in the format of 2 decimal points, using , for the thousands and . as the decimal point aka US style
echo number_format("1000000000",2,".",",").PHP_EOL;

// money format
// think this does not work on Windows
/*
        $moneyS = 9000;

        setlocale(LC_MONETARY, 'en_US');
        echo money_format("%.2n", $moneyS);
*/

// printf
$numBah = 9000;
$strinGie = "OVER";
// replaces %s with string var, and %u with number var
printf("IT'S %s %u !!!",$strinGie,$numBah);

// sprintf
// outputs formatted string into variable, and printing results in string and stringlength being printed
$numBah = 9000;
$strinGie = "OVER";
$toPringt = printf("IT'S %s %u !!!",$strinGie,$numBah);
echo $toPringt.PHP_EOL;

// fprintf
// writes formatted string to file or database
// outputs string length
// writes string to file.
$numBah = 9000;
$strinGie = "OVER";
$file = fopen("test.txt","w");
echo fprintf($file,"IT'S %s %u !!!",$strinGie,$numBah).PHP_EOL;

// sscanf
// looks through a string for variables in a very specific way
//  the var coco is "I've got a lovely bunch of coconuts";
sscanf($coco,"I've got a %s bunch of %s",$adjective,$noun);
echo $adjective." ".$noun;


// preg_match

// preg_match_all

// preg_replace












 echo '</pre>';
 ?>
 </html>