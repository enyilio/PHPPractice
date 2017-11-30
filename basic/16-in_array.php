<?php 

	$string = "我是帥哥";
	
	$valuelength = strlen($string); //從字串轉換成數字，一個中文字為3字元

	echo $valuelength . "</br>";

	$values = ['sdfwer',3456,'fhrtt',$string];

	$found = in_array($string, $values); //判定資料是否吻合，轉換成ture or flase

	if ($found) { 

		echo "這是真的"; //如果是true

	}else{
		
		echo "這是假的"; //如果是flase
	}

//實際應用可參考：http://wp.me/p722Hb-2x


 ?>