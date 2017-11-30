<?php 

$file = "example.txt";

if ($handle = fopen($file, 'w')) {
	
	fwrite($handle, 'I love joomla!');
	fclose($handle);
}else{
	echo "The Applicaion was not able to write on the file";
}

 ?>