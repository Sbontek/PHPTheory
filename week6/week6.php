<?php

$fileName = pathinfo($_FILES['file']['name'], PATHINFO_FILENAME);
$fileType = $_FILES['file']['type'];
$fileSize = $_FILES['file']['size'];
$newfileName = $fileName . '.txt';


move_uploaded_file($_FILES['file']['tmp_name'], $newfileName);

$file = fopen($newfileName, 'a');

fwrite($file, PHP_EOL . 'Last edited on ' . (new Datetime())->format('Y-m-d h:i:s'));

fclose($file);

$fileWithDate = fopen($newfileName, 'r');

echo 'File contents: <br/>' . htmlspecialchars(fread($fileWithDate, filesize($newfileName)));


$fileContent = file_get_contents($newfileName);

file_put_contents($newfileName, 'Completely overwritten the file contents now!');

echo '<br/><br/>New file contents after overriding it: ' . htmlspecialchars(file_get_contents($newfileName));