<html>
<?php
echo '<pre>';


// bitwise operators

    $intA = 198;
    $intB = 77;
    
    echo 'Using bitwise operators on the values of 198 and 77'.PHP_EOL;
    echo 'bitwise AND results in '.($intA & $intB).PHP_EOL;
    echo 'bitwise OR results in '.($intA | $intB).PHP_EOL;
    echo 'bitwise XOR results in '.($intA ^ $intB).PHP_EOL;
    echo 'bitwise left shift results in '.($intA << $intB).PHP_EOL;
    echo 'bitwise right shift results in '.($intA >> $intB).PHP_EOL;

// error control operators
    $randomExpression = @$fakeVar;
    
// execution operators
    $output = `ls -al`;
    echo $output;
    
// incrementing/decrementing operators
    $intC = 12;
    echo "pre increment start ". ++$intC .PHP_EOL;
    echo "pre increment result ". $intC .PHP_EOL;
    echo "post increment start ". $intC++ .PHP_EOL;
    echo "post increment result ". $intC .PHP_EOL;
    echo "pre decrement start ". --$intC .PHP_EOL;
    echo "pre decrement result ". $intC .PHP_EOL;
    echo "post decrement start ". $intC-- .PHP_EOL;
    echo "post decrement result ". $intC .PHP_EOL;
    
// type operators
    
    class CookieClass
    {
    }
    
    class OtherCookieClass
    {
    }
    
    $clVar = new CookieClass;
    
    var_dump($clVar instanceof OtherCookieClass);
 
 













 echo '</pre>';
 ?>
 </html>