<?php 

$file = "example.txt";

//fopen開啟example.txt文件,限定只能閱讀
if ($handle = fopen($file, 'r')) { //打開文件$file "r"只能讀取
	//filesize($file)表示顯示$file所有內容,也可以用字元來取代，例如：echo $content = fread($handle, 2);
	echo $content = fread($handle, filesize($file));

	fclose($handle);
}else{
	echo "The Applicaion was not able to write on the file";
}

 ?>