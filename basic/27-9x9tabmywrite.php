<!-- 排版過的九九乘法表 -->

<table cellpadding="5" cellspacing="5">
<tr>
<?php 
for ($a=1; $a < 10 ; $a++) { 
	echo "<td>";
	for ($b=1; $b < 10; $b++) { 
		
		echo $a."x".$b."=".$a*$b."<br>"; 
	}
	echo "</td>";
}

 

?> 
</tr>
</table>

