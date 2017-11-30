<?php 

function say_something(){
	echo "hello My lydia"."</br>";
}

say_something();//執行函數say_something


 ?>

<?php 
 //加入引數

function something($haha){
	echo $haha;
}

something("yabe");//執行函數say_something，並加入引數Yabe


 ?>



<?php 
//return回傳資料到執行函數

	function addnumber($num1, $num2){
		$sum = $num1 + $num2;
		return $sum; 
	}

$answer = addnumber(34,36); //return把資料回傳addnumber()
echo $answer;

 ?>