<?php 

interface action{ //使用interface定義功能

    public function run();
    public function fast();
    
}

abstract class animal implements action{ 
//implement係指由animal來實作action所需功能
//abstract係指建立虛擬類別animal，可以避免子類別dog被實作時，animal也被實作。

    function run(){
        $this->fast();
    }
    
    
}

class dog extends animal{  //dog繼承animal的物件功能 
    
    function fast(){
        echo 'very fast';
    }
    
}

$dog = new dog;
$dog->run();

 ?>