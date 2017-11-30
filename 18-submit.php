<?php
	
	if (isset($_POST['submit'])) { //檢查 submit存在
		$username=$_POST['username']; //提取username
		$password=$_POST['password']; //提取password

		$name = array('marry','Jane','Cathy','Sasa','Xhou');

		if (strlen($username) < 5 ) {
			echo "welcome back"."</br>";
		}else{
			echo "You're something wrong?"."</br>";
		}


		if (in_array($username, $name)) {
			echo "Is you, We find man"."</br>";
		}else{
			echo "Get out here"."</br>";
		}

		echo $_POST['submit'];
		
	}

 ?>