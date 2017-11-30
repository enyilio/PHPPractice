<?php 

$file = "example.txt";

if ($handle = fopen($file, 'r')) {
	
	echo $content = fread($handle, filesize($file));

	fclose($handle);
}else{
	echo "The Applicaion was not able to write on the file";
}

 ?>