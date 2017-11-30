<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		$all = 100;
		$strings = "我是劉恩驛";
		echo "您輸入的文字如下:"."</br>".$strings."<p>";
		$strtw = strlen($strings);//顯示所有strings裡字元

		$count = (int)$strtw/3; //將字串轉變為整數: (int)

		$total = $all-$count;

		echo "您總共用掉了".$count."中文字";
		echo "</br>";
		echo "您還剩下".$total."中文字可使用";
	 ?>
</body>
</html>