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
echo "length of the string is:  ".strlen($str1); 

// strtr











 echo '</pre>';
 ?>
 </html>