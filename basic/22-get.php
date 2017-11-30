<?php 
//GET 透過網址傳値，也就是當網友送出表單後，會把網友填的資料透過網址傳遞到 PHP 取得資料的程式

$connection = mysqli_connect('localhost', 'enyilio', '6666', 'test');

		if (!$connection) {	
			die("db connection failed");

		}

	if (isset($_GET['submit'])) {

	$username=$_GET['username']; //提取name="username"
	$password=$_GET['password']; //提取name="password"

	$query = "INSERT INTO users(username,password)";//INSERT INTO要大寫
	$query .= "VALUES('$username','$password' )"; //VALUES要大寫

	$result = mysqli_query($connection, $query);//函數執行對資料庫與新增資料進行查詢

	if (!$result) {
		
		die('Query FAILED' . mysqli_error());

		}else{
			echo "Created User!";
		}
	}
 ?>


 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 </head>
 <body class="container-fulid">
	<h1>Create User</h1>
	<div class="col-xs-6">
		<form action="22-get.php" method="get">
			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" name="username" class="form-control">
			</div>		
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password" class="form-control">
			</div>
			<input class="btn btn-primary" type="submit" name="submit" value="Create">
		</form>
	</div>
 </body>
 </html>