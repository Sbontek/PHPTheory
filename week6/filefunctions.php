<?php


// Change directory
$result = chdir('../');
if ($result) {
	echo 'Succesfully changed directory. <br/>';
}

// chroot('../'); // doesn't work on a windows machine

$dir = opendir('./');

while (false !== ($entry = readdir($dir))) {
    echo 'Next dir: ' . $entry . '<br/>';
}
echo '<br/>';

//Make new directory
mkdir('RemoveThisDir');
//Delete it again
rmdir('RemoveThisDir');

echo 'Base file name of /directory/directory/file.php is: ' . basename('/directory/directory/file.php') . '<br/>';

// Create file.txt
$filetxt = fopen('file.txt', 'w');

//Change file rights of file.txt

chmod('file.txt', 755);

//Copy file to file2.txt
copy('file.txt', 'file2.txt');

//Check if file2 exists
if (file_exists('file2.txt')) {
	echo 'file2.txt exists';
}

//Write to file.txt
fputs($filetxt, 'Hi!');
fclose($filetxt);

rename('file.txt', 'hi.txt');

// Check whether hi.txt is a directory
if(is_dir('hi.txt')) {
	echo 'hi.txt is a directory<br/>';
} else {
	echo 'hi.txt is NOT a directory<br/>';
}

// Check whether hi.txt is an executable file
if(is_executable('hi.txt')) {
	echo 'hi.txt is executable<br/>';
} else {
	echo 'hi.txt is NOT executable<br/>';
}

// Check whether hi.txt is a file
if(is_file('hi.txt')) {
	echo 'hi.txt is a file<br/>';
} else {
	echo 'hi.txt is NOT a file<br/>';
}

// Check whether hi.txt is a symbolic link
if(is_link('hi.txt')) {
	echo 'hi.txt is a symbolic link<br/>';
} else {
	echo 'hi.txt is NOT a symbolic link<br/>';
}

// Check whether hi.txt is readable
if(is_readable('hi.txt')) {
	echo 'hi.txt is a readable file<br/>';
} else {
	echo 'hi.txt is NOT readable<br/>';
}

// Check whether hi.txt is writable
if(is_writable('hi.txt')) {
	echo 'hi.txt is a writable file<br/>';
} else {
	echo 'hi.txt is NOT writable<br/>';
}

// Check whether hi.txt is an uploaded file
if(is_uploaded_file('hi.txt')) {
	echo 'hi.txt is an uploaded file<br/>';
} else {
	echo 'hi.txt is NOT an uploaded file<br/>';
}


// Get remote file
$file = file_get_contents('http://example.com/');
if ($file === false) {
	'Could not get example.com file :(';
}

$finfo = finfo_open();
echo finfo_file($finfo, 'hi.txt');



// Clean up via unlink
unlink('hi.txt');
unlink('file2.txt');