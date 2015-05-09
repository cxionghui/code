<?php
	
	//在数组中随机去元素的键名（没有键值）；
	$arr01 = array("星","倩","辛","楠");
	$msg = array_rand($arr01,2);
	print_r($msg);
	echo "<br/>";
	print_r($arr01);
	echo "<br/>";


	function xin($a,$b)	{
		return $a."---".$b;
	}
	$sum = array_reduce($arr01,"xin");
	echo $sum;
	echo "<br/>";


	/*
		1.数组键值顺序颠倒；
		2.并非直接作用于数组；
	*/
	$arr02 = array(2,3,4,5,6);
	$msg01 = array_reverse($arr01);
	$msg02 = array_reverse($arr02);
	print_r($msg01);
	echo "<br/>";
	print_r($msg02);
	echo "<br/>";

	/*
		1.根据键值找键名；
		2.放回类型为数组；
	*/
	$arr03 = array("s"=>"辛星","n"=>"小倩","m"=>"辛星","t"=>"辛勇");
	$msg03 = array_keys($arr03,"辛星");
	print_r($msg03);
	echo "<br>";






	/*
		1.从数组左边开始取出一个值；
		2.是直接对数组进行操作的；
		3.取出一个，原数组就会少一个；
	*/
	$arr05 = array("倩","辛","小","倩");	
	echo array_shift($arr05);
	echo "<br>";
	echo array_shift($arr05);
	echo "<br>";
	echo array_shift($arr05);
	echo "<br>";
	print_r($arr05);
	echo "<br>";

	//数组求和；
	$arr06 = array(2,5,34,5,"辛",6);
	echo array_sum($arr06);
	echo "<br>";



	/*
		1.去除重复元素；

	*/
	$arr07 = array("辛","星","辛","辛","星");
	$brr = array_unique($arr07);
	print_r($arr07);
	echo "<br/>";
	print_r($brr);
	echo "<br/>";


	//数组遍历；
	function x($val,$key,$d){
		echo $key,"---",$d,"---",$val,"<br/>";
	}
	$arr08 = array("m"=>"辛","n"=>"星","t"=>"倩");
	array_walk($arr08, "x","拥有该值");


	/*
		1.对数组按键值进行排序；
		2.若有键名，键名也会改变；
		3.若没有键名，则默认以0开始，且排序后，键名也会改变；
		4.对数字也有效；	
		5.是对数组直接操作的；
		6.若数字与字符串同时出现，数字排在字符串前面；	
	*/
	$arr09 = array("Bob","Ammie","Jack");
	$arr10 = array("Bob","Ammie","Jack");
	$arr11 = array(5,9,7,1,3,"d");
	echo "<br/>";
	echo "下面是升序排列","<br/>";
	asort($arr09);
	print_r($arr09);
	echo "<br/>";
	echo "下面按照降序排列","<br/>";
	arsort($arr09);
	print_r($arr09);
	echo "<br/>";
	arsort($arr10);
	print_r($arr10);
	echo "<br/>";
	arsort($arr11);
	print_r($arr11);
	echo "<br/>";

	/*
		1.对数组按键名进行排序；
		2.若数字与字符串同时出现，数字排在字符串前面；
		3.是对数组直接操作的；
	*/
	$arr12 = array("辛","星","倩","s");
	echo "<br/>";
	echo "下面是键升序排列","<br/>";
	ksort($arr12);
	print_r($arr12);
	echo "<br/>";
	echo "下面按照键降序排列","<br/>";
	krsort($arr12);
	print_r($arr12);
	echo "<br/>";


	//数组元素个数；
	echo "求数组\$arr12的元素个数：",count($arr12),"<br/>";
	echo "求数组\$arr12的元素个数：",sizeof($arr12);
	echo "<br/>";
	echo "<br/>";
	echo "<br/>";



	/*
		1.对数组元素排序进行随机打乱；
		2.是直接对数组进行操作；
		3.键名被重新分配为以0开始；
	*/
	$arr12 = array("p"=>"辛","q"=>"星","o"=>"倩","1"=>"s");
	shuffle($arr12);
	print_r($arr12);
	echo "<br/>";



	$arr13 = array("辛星",23);
	var_dump(in_array(23, $arr13));
	echo "<br/>";
	var_dump(in_array("23", $arr13));



	//快速创建数组；
	/*
		我们可以用range函数来快速地创建一些数组，
		该数组包含有一个指定范围。
		第一个参数是起始参数，
		第二个参数是结束参数，
		第三个参数是可选的，表示步长。
		通常第一个参数比第二个参数小，
		但是也可以第二个参数比第一个参数小。
	*/
	$arr14 = range(2, 12,2);
	echo "<br/>";
	print_r($arr14);
	$brr01 = range(14, 4,2);
	echo "<br/>";
	print_r($brr01);
	echo "<br/>";


	//list函数；
	$arr15 = array("辛","星","倩");
	list($a,$b,$c) = $arr15;
	echo '$a的值：',$a,"<br/>";
	echo '$b的值：',$b,"<br/>";
	echo '$c的值：',$c,"<br/>";



		/*
		1.数组键值顺序颠倒；
		2.并非直接作用于数组；
	*/
	$arr02 = array(2,3,4,5,6);
	$arr12 = array("p"=>"辛","q"=>"星","o"=>"倩","1"=>"s");
	$msg01 = array_reverse($arr12);
	$msg02 = array_reverse($arr02);
	print_r($msg01);
	echo "<br/>";
	print_r($msg02);
	echo "<br/>";



		/*
		1.若有相同的键值，能返回第一的键名；
		2.若不存在则没有返回；
	*/
	$arr01 = array("倩","辛","楠","星");
	$msg04 = array_search("星",$arr01);
	print_r($msg04);
	echo "<br>";



?>