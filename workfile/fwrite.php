<?php 

$file = "example.txt";
//打開$file檔案，"w"表示該檔案可寫入
if ($handle = fopen($file, 'w')) {
	//fwrite表示寫入內容"I love Joomla!"
	fwrite($handle, 'I love joomla!');
	fclose($handle);
}else{
	echo "The Applicaion was not able to write on the file";
}

 ?>