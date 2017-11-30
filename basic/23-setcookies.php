<?php 
		
		$name = "someone";
		$value = 100;
		$expiration = time() + (60*60*24*7);//60分x60秒x24小時x7天
				//name,content,expiration
		setcookie($name, $value, $expiration );//建立cookie

 ?>