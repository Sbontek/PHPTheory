<?php
$socket = stream_socket_server('tcp://0.0.0.0:8000', $errno, $errstr);
if (!$socket) {
  echo "$errstr ($errno)<br />\n";
} else {
	echo 'Succesfully started socket' . PHP_EOL;
	while($connection = stream_socket_accept($socket)) {
		$message = fread($connection, 1024);
		echo 'Got a connection, with the message: ' . $message . PHP_EOL;
		fwrite($connection, 'Hi there! The current time is ' . (new DateTime())->format('Y-m-d H:i:s') . PHP_EOL);
		fwrite($connection, 'I have succesfully received your message: "' . $message . '"' . PHP_EOL);
		fwrite($connection, 'Bye!' . PHP_EOL);
		fclose($connection);
		echo 'Connection ended.' . PHP_EOL;
	}		
  fclose($socket);
}