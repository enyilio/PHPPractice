<?php 
function getCount()
{
    static $count = 0;
    $count ++;
    return $count;
}
for ($i = 0; $i < 10; $i ++) {
   echo getCount(), "\n";
	
}

echo getCount();
//參考文章：http://jaceju.net/2009-08-19-php-static/
 ?>

