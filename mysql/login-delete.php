<!-- 帳戶資料更新頁面 -->

<?php include "db.php";?> <!-- 引入db.php檔進來 -->
<?php include "function.php";?> <!-- 引入function.php檔進來 -->

<?php 
if (isset($_POST['submit'])) { //檢查 submit存在

	DeleteRow();
		
}

 ?>	

<?php include "includes/header.php";?>
<body class="container-fulid">
	<div class="col-xs-6">
	<h1 class="text-center">Delete</h1>
		<form action="login-delete.php" method="POST">
				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" name="username" class="form-control">
				</div>		
				
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" class="form-control">
				</div>
				<div class="form-group">
					<select name="id" id="">
					
						<?php 

							showalldata();

						 ?>

					</select>
				</div>
				<input class="btn btn-primary" type="submit" name="submit" value="Delete">
		</form>
<?php include "includes/footer.php"; ?>