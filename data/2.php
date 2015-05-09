<?php

// 	date_default_timezone_set("Asia/Shanghai");

// 	echo "Today is ",date(DATE_COOKIE);
// 	echo "<br/>";
// 	echo "<br/>";



// 	echo date("d-D-Y-m-d h:i:s");



// 		$arr1 = localtime();
// 	var_dump($arr1);
// 	echo "<br/>";
// 	echo "<br/>";

// 	echo "十年后:".date("Y-m-d",strtotime("+10 year"))."<br>";     


// 	var_dump(checkdate(12, 31, 2000));
// 		echo "<br/>";
// 	echo "<br/>";

// echo gmmktime(12,25,23,7,9,2006); 




var_dump(checkdate(12, 31, 2000));
var_dump(checkdate(2, 29, 2001));



echo "<br/>";
echo gmmktime(12,25,23,7,9,2006); 

echo "<br/>";
echo "<br/>";
echo "<br/>";


$arr2 = getdate(); 
var_dump($arr2);
echo "Date is " . $arr2['mday'] . " " . $arr2['weekday'] . " " . $arr2['year']; 
echo "Time is " . $arr2['hours'] . ":" . $arr2['minutes']; 


echo "<br/>";
echo "<br/>";
echo "<br/>";

echo mktime(13,15,23,6,7,2006); 



echo "<br/>";
echo "<br/>";
echo "<br/>";

echo gmmktime(12,25,23,7,9,2006); 

echo "<br/>";
echo "<br/>";
echo "<br/>";


echo date("d-D-Y-m-d h:i:s",strtotime("now")), "\n";
echo "<br/>";
echo date("d-D-Y-m-d h:i:s",strtotime("10 September 2000")), "\n";
echo "<br/>";
echo date("d-D-Y-m-d h:i:s",strtotime("+1 day")), "\n";
echo "<br/>";
echo date("d-D-Y-m-d h:i:s",strtotime("+1 week")), "\n";
echo "<br/>";
echo date("d-D-Y-m-d h:i:s",strtotime("+1 week 2 days 4 hours 2 seconds")), "\n";
echo "<br/>";
echo date("d-D-Y-m-d h:i:s",strtotime("next Thursday")), "\n";
echo "<br/>";
echo date("d-D-Y-m-d h:i:s",strtotime("last Monday")), "\n";

echo "<br/>";
echo "<br/>";
echo "<br/>";


?>