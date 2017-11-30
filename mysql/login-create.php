<?php include "db.php"; ?>
<?php include "function.php"; ?>
<?php 
	
	CreateRow();
 ?>

<?php include "includes/header.php";?>
<body class="container-fulid">
	<h1>Create User</h1>
	<div class="col-xs-6">
		<form action="login-create.php" method="POST">
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

<?php include "includes/footer.php"; ?>