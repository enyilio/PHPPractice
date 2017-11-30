<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<?php 
		$list = array(0=>"聖德芬",112=>"麥達昶",151=>"大麥克",1521=>"拉貴爾",1551=>"愛瑟瑞爾");//又或者可以省去array用中括號來寫["王菲","甄子丹","郭富城","劉德華","黎明"]
		
		$noo = array_rand($list);// array_rand 取出的是陣列的key
		
		echo $noo;
		echo $list[$noo];//取得key後,再用array取得value
		echo "</br>";

	 ?>
	 <input type="button" value="占卜" onclick="location.reload()"> 
</body>
</html>