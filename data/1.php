<?php

	//date
	$str1 = date("Y年n月d日 H:i:s");
	echo "当前时间：",$str1;
	echo "<br/>";
	echo "<br/>";


	//设置时区;
	date_default_timezone_set("Asia/Shanghai");
	$str2 = date("Y年n月d日 H:i:s");
	echo "当前时间：",$str2;
	echo "<br/>";
	echo "<br/>";


	//时间戳;
	echo time();
	echo "<br/>";
	sleep(1);
	echo time();
	echo "<br/>";
	echo "<br/>";



	$start = microtime(true);
	echo $start,"<br/>";
	sleep(1);
	$end = microtime(true);
	echo $end,"<br/>";
	echo "程序运行共计耗时：",$end-$start,"秒";
	echo "<br/>";
	echo "<br/>";



	var_dump(microtime());
	echo "<br/>";
	echo "<br/>";



	$arr = localtime(time(),true);
	var_dump($arr);
	echo "<br/>";
	echo "<br/>";


	$arr1 = localtime(time(),false);
	var_dump($arr1);
	echo "<br/>";
	echo "<br/>";























































?>