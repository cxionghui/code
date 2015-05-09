<?php 

 $languages = array(1=>"php", 5=>"html",10=>"css");
 $a = each($languages); /* 第一次遍历数组 */  
 echo $a[0] ."t";
 echo $a[1] ."<br>"; 
 $a = each($languages); /* 第二次遍历数组 */
 echo $a[key] ."t";
 echo $a[value]; 
 echo "<br/>";
 echo "<br/>";
 echo "<br/>";
 echo "<br/>";


 $date=array(1=>"Monday",2=>"Tuesday",3=>"Wednesday");
 list($key,$value)=each($date); /* 遍历函数 */
 echo "$key $value" ."<br>"; /* 输出第一个数组 */
 $next = next($date);  /* 指针后移 */
 echo "$next";  

   
   


?>
