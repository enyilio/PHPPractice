<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		$list = array(123,345,644,345,988);//又或者可以省去array用中括號來寫[123,345,644,345,988]

		echo max($list);//中array中找出最大值
		echo "</br>";

		echo min($list);//中array中找出最大值
		echo "</br>";
		
		sort($list);//將$list中的array進行排序，排序方式以0,1,2,3,4,5

		print_r ($list);

	 ?>
</body>
</html>