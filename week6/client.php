<?php

$fp = stream_socket_client('tcp://127.0.0.1:8000', $errno, $errstr, 30);
if (!$fp) {
    echo "$errstr ($errno)<br />\n";
} else {
     fwrite($fp, "Hi there!");
    stream_filter_append($fp, 'string.toupper');
    $response = fread($fp, 1024);
    
 echo 'Response from server fully capitalized: ' . $response;
 
    fclose($fp);
}