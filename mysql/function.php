<?php include "db.php";?><!-- 內嵌24-db.php近來 -->


<?php 

	function CreateRow(){

	if (isset($_POST['submit'])) {

	$username=$_POST['username']; //提取username
	$password=$_POST['password']; //提取password
  	
  	global $connection;

	$username = mysqli_real_escape_string($connection,$username);//跳脫字元轉換
	$password = mysqli_real_escape_string($connection,$password);


	$hashFormat = "$12345";
	$salt = "itsverycaszy";
	$hashsalt = $hashFormat . $salt;

	$password = crypt($password, $hashsalt);
  
	$query = "INSERT INTO users(username,password) ";//INSERT INTO要大寫
	$query .= "VALUES ('$username','$password' )"; //VALUES要大寫

	$result = mysqli_query($connection, $query);//函數執行對資料庫與新增資料進行查詢

	if (!$result) {
		
		die('Query FAILED' . mysqli_error());

		}else{
			echo "Created User!";
		}
	}
}


 ?>

<?php
function showalldata(){
	global $connection;//為了使用24-db.php的$connection全域變數，需加上global
	$query = "SELECT * FROM users";
	$result = mysqli_query($connection, $query);
	if (!$result) {
		
		die('Query FAILED' . mysqli_error());

		}

	while ($row = mysqli_fetch_assoc($result)) {
		
		$id = $row['id'];
		echo "<option value='$id'>$id</option>";
							
		}
	}

	function updateTable(){

		$username=$_POST['username']; //提取username
		$password=$_POST['password']; //提取password
		$id=$_POST['id']; //提取id
		
		global $connection;
		$query = "UPDATE users SET "; //進行users表格更新，SET後面要空格
		$query .= "username = '$username', "; //透過資料回傳$username，進行username資料更新
		$query .= "password = '$password' "; //透過資料回傳$password，進行password資料更新
		$query .= "WHERE id =  $id "; //$id資料回傳，尋找表格中對應的id

		$result = mysqli_query($connection, $query);//mysqli_query函數執行對$connection,$query進行查詢
		if (!$result) {
			die("nooooooo" . mysqli_error($connection));//如果$result為flase則結束
		}else{
			echo "Record Update!";
		}

	}

	function DeleteRow(){

		$username=$_POST['username']; //提取username
		$password=$_POST['password']; //提取password
		$id=$_POST['id']; //提取id
		
		global $connection;
		$query = "DELETE FROM users "; //進行users表格更新，users後面要空格
		$query .= "WHERE id =  $id "; //$id資料回傳，尋找表格中對應的id

		$result = mysqli_query($connection, $query);//mysqli_query函數執行對$connection,$query進行查詢
		if (!$result) {
			die("nooooooo" . mysqli_error($connection));//如果$result為flase則結束
		}else{
			echo "Record Delete!";
		}

	}


 ?>