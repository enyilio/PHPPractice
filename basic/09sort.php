
<table>
<tr><td>《陣列成員最初的儲存順序》</td><td>《使用ksort函數重新排序後》</td></tr>
<tr>
<td>


<?php  
$student = array(  
314=>"丁小煩",114=>"王大王",212=>"喻可唯",214=>"阿寶",215=>"迷你彬",311=>"溫瑞凡",115=>"宥勝",313=>"郝康德",111=>"蔡淑臻",211=>"林凡",112=>"李沛旭",315=>"藍天蔚",213=>"席曼寧",312=>"謝安真",113=>"溫昇豪");  
foreach($student as $key => $value){  //foreach 是用來輸出陣列的一種方式
  echo '$student['.$key."]"."：".$student[$key]."<br>";  
}  
?> 
</td>
<td>
<?php  
ksort($student);  //用ksort函數將陣列$student重新排序  
foreach($student as $key => $value){  
  echo '$student['.$key."]"."：".$student[$key]."<br>";  
}  
?> 
</td>
</tr>
</table>
