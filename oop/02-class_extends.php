<?php 
class animal{

    function name(){
        $animal = new dog;
        return $animal->animal;
    }

    function shout(){
        $animal = new dog;
        return $animal->shout;
    }

}

class dog extends animal{

    public $animal = 'dog<br>';
    public $shout = 'BOW!';

}
$dog = new dog;
echo $dog->name();
echo $dog->shout();

 ?>