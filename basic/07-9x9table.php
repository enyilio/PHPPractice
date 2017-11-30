<!-- 排版過的九九乘法表 -->

<table cellpadding="5" cellspacing="5">
<tr>
<?php 
$a=0;
while($a<9){  //外層迴圈
  $a++; 
  $b=0; 
  
  echo "<td>"; 
  while($b<9){  //內層迴圈 
    $b++; 
    
    echo $a."x".$b."=".$a*$b."<br>"; 
  } 
  echo "</td>"; 
}  

?> 
</tr>
</table>

