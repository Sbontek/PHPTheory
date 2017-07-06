<html>
<?php
echo '<pre>';
 // if else statements and nested if else statements

 $ranVar = 6;
 
 if (is_int($ranVar))
 {
     if ($ranVar < 5)
     {
       echo "this int is less than 5";  
     }
     elseif($ranVar > 5)
     {
         echo "this int is more than 5";
     }
 }
 else
 {
     echo "the input was not an int.";
 }





 echo '</pre>';
 ?>
 </html>