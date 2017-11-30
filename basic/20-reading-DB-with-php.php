<?php 
		//mysqli_connect('localhost','使用帳號','密碼','資料庫名稱') 連接資料庫
		$connection = mysqli_connect('localhost', 'enyilio', '6666', 'test');

		if ($connection) {	
			echo "we are connected";
		}else{
			die( "noooooooo");
		}

	$query = "SELECT * FROM users";//查詢table "users"

	$result = mysqli_query($connection, $query);//用來判斷資料庫查詢是否成功，也就是能連接到資料庫，又能查詢到該資料庫的table
	if (!$result) {
		
		die('Query FAILED' . mysqli_error());

		}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body class="container-fulid">
	<div class="col-xs-6">
		
	<?php 
			while ($row = mysqli_fetch_row($result)) {
				          //以列舉陣列的形式傳回一筆紀錄
		?>
		<pre>
		<?php 
			print_r($row);
		 ?>
		</pre>
			
		<?php

		}

	 ?>

	 <?php 

	 	for ($i=0; $i < 5; $i++) { 
	 		?>
	 		
		<h1>
		<?php
	 		echo "重覆的文字";
	 	?>
	 	</h1>

	 	<?php
	 	}


	  ?>

	</div>

</body>
</html>