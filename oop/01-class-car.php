

<?php 

	// 第一步使用Class定義物件
	// class裡面可以建立function或任何迴圈

	class Car{ //建立一個分類class名為Car


		//properties 
		//public(開放成員)：不論在物件本體，或是外部程式，都可以使接使用。
		//private(私有成員)：僅在該物件本體可以使用，外部程式或繼承於本物件之子類別無法使用。
		//protected(保護成員)：僅外部程式無法叫用，但物件本體及繼承的子類別均可使用。

		public $wheels = 4;
		public $hood = 1;
		public $engine = 1;
		public $door = 5;
 

		//這裡的function是method的一種，並不是一般函數執行
		function MoveWheels(){ 

			$this -> wheels = 100;//this是指Car物件

		}

		

	}

	//第二步：每使用一個變數儲存，就必須使用new來建立該物件
 	$bmw = new Car();     //使用new建立Car物件，接著存到$bmw變數中

 	//第三步：使用"->"來執行物件內容物
 	$bmw -> MoveWheels(); // 從Car物件中去執行MoveWheels()

 	$Benz = new Car();     //使用new建立Car物件，接著存到$Benz變數中
 	$Benz -> MoveWheels();  // 從Car物件中去執行MoveWheels()

 	//顯示出物件內容
 	echo $bmw -> wheels. "</br>";
 	//顯示並取代物件內容
 	echo $bmw -> hood = 10;
 ?>