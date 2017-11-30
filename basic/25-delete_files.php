<?php 
	
	$file = "delete_text.php";

	if(!unlink("delete_text.php")){ //當開啟delete_files.php頁面時，自動刪除delete_text.php;
		echo ("錯誤操作，無法刪除");

	}else{
		echo "Delete $file";
	}
	
	


 ?>