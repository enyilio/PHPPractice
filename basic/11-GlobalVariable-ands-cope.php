<?php 

$x = "outside"; //全域變數，隨時可以呼叫使用

function convert(){
	
	global $x; //在函數式變數加上global就會變成全域變數。

	$x = "inside"; //區域變數，只有執行函數時才能變使用。

}

echo $x;

convert();

echo $x;


 ?>