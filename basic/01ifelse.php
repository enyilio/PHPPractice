<?php 

//單引號''為純字串
//雙引號""可輸出變數，如 echo "我有$money"; output:我有100
//print_r 用來印出陣列

// $h = $_GET["h"];  //取得網址列傳來的變數h 
// $w = $_GET["w"];  //取得網址列傳來的變數w  

if($h==""){  //如果$h的內容為空字串 
  $h = 1.72;  //身高（單位：公尺） 
}

if($w==""){  //如果$w的內容為空字串 
  $w = 60;  //體重（單位：公斤） 
} 

$bmi = $w/($h*$h); 

echo "您的BMI:".$bmi."<br>狀況："; 

if($bmi>=30){ 
  echo "肥胖！"; 
}elseif($bmi>=25){ 
  echo "過重！"; 
}elseif($bmi>=18.5){ 
  echo "正常！"; 
}else{ 
  echo "過輕！"; 
} 
?> 
