<?php 
$class = $_GET["class"];  //取得網址列傳來的變數class 

switch($class){ 
  case 1:  //$class值等於1 
    echo "英文"; 
    break; 
  case 2:  //$class值等於2 
    echo "憲法"; 
    break; 
  case 3:  //$class值等於3 
    echo "民法"; 
    break; 
  default:  //$class值為其他的情況 
    echo "國文"; 
    break; 
} 
?> 