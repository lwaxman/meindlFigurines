<?php 

	$data = $_POST['data'];
	$file = 'messages.json';
	file_put_contents($file, $data);

?>