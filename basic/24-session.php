<?php 
	
	session_start();

	$number = $_SESSION['number'] = "hello";

	echo $number;
	
	//在你使用 session 來記錄用戶的資訊前，要先用 session_start() 這個函式
	//告訴系統準備開始使用，請記住 session_start() 一定要放在網頁的最上方還沒有輸出任何東西之前
	
 ?>