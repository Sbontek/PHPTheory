<?php

$array = [
	['a', 'b', 'c'],
	[1, 2, 3],
	['d', 'e', 'f'],
	[4, 5, 6]
];

$csv = fopen('file.csv', 'w');

foreach ($array as $values) {
    fputcsv($csv, $values);
}

// Use fprintf
fprintf($csv, '%s,%s,%s', 7, 8, 9);

fclose($csv);

$file = 'file.csv';
header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="'.basename($file).'"');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize($file));
// Use fpassthru
fpassthru(fopen($file, 'r'));