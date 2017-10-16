<?php 

//    print time();
//    $time = time();
//    print $time;
// microtime() is a float not an integer, as it shows microseconds instead of seconds, and is therefore harder to use for databases etc.

// converting from string to timestamp
//strtotime();

 $dateFormat1 = "09th October 2012";
 $dateFormat2 = "09th Oct. 2012 17:30";
 $dateFormat3 = "2012/10/09";
/*
        print strtotime($dateFormat1);
        print strtotime($dateFormat2);
        print strtotime($dateFormat3);
*/


$a = 'ls -l';
var_dump($a);
?>