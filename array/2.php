<?php
// if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
2015年4月16日
*/
	
	/*
		1.数组过滤，array_filter();
		2.放回数组类型；
		3.单个数组间的运算；

	*/	
	function xin($var){
		return ($var % 3 == 0);
	}

	$arr = array(4,5,6,7,8,9);
	$msg = array_filter($arr,"xin");
	print_r($msg);
	echo "<br>";




	/*
		1.根据键值名找键；
		2.放回类型为数组；
	*/
	$arr02 = array("m"=>"辛星","n"=>"小倩","s"=>"辛星","t"=>"辛勇");
	$msg01 = array_keys($arr02,"辛星");
	print_r($msg01);
	echo "<br>";


	function xi($var){
		return $var*$var;
	}
	$arr03 = array(2,3,4);
	$arr04 =  array_map("xi", $arr03);
	print_r($arr04);
	echo "<br>";


	/*
		1.数组合并；
		2.？两个数组有相同的键名时，出现没有合并的错误；
	*/
	$arr1 = array("辛星","辛勇","小倩");
	$arr2 = array("小倩","小楠","辛勇");
	$arr3 = array_merge($arr1,$arr2);
	print_r($arr3);
	echo "<br>";


	/*
		1.对数组进行排序；
		2.可以有多个参数，但每个参数的元素个数必须相等；
	*/
	$arr05 = array(1,20,14);
	$arr06 = array(2,3,11);
	$arr07 = array(2,12,3);
	array_multisort($arr06);
	print_r($arr06);
	echo "<br/>";


	//批量插入操作；
	$arr8 = array("m"=>"星");
	$msg02 = array_pad($arr8,-3,9);
	print_r($msg02);
	echo "<br/>";


	$arr08 = array("辛","星","国","际");
	$var02 = array_pop($arr08);
	echo "被压出的变量：",$var02,"<br/>";
	echo "现在的数组：";
	print_r($arr08);
	echo "<br/>";


	//数组的乘积；
	$arr09 = array(4.2,34.7,4);
	$num = array_product($arr09);
	echo $num;
	echo "<br>";


		//查看键值是否存在；
	$arr01 = array("m"=>"辛星","n"=>"小倩");
	$flag = array_key_exists("m", $arr01);
	var_dump($flag);
	// if($flag){
	// 	echo "存在该键";
	// }else{
	// 	echo "没有找到该键";
	// }
	// echo "<br>";



		/*
		1.根据键值名找键；
		2.放回类型为数组；
	*/
	$arr02 = array("m"=>"辛星","n"=>"小倩","s"=>"辛星","t"=>"辛勇");
	$msg01 = array_keys($arr02,"辛星");
	echo "<br>";
	print_r($msg01);
	echo "<br>";



	/*
		1.数组合并；
		2.？两个数组有相同的键名时，出现没有合并的错误；
	*/
	$arr1 = array("辛星","辛勇","小倩");
	$arr2 = array("小倩","小楠","辛勇");
	$arr4 = array("小倩","小楠","辛勇");
	$arr3 = array_merge_recursive($arr1,$arr2);
	print_r($arr3);
	echo "<br>";




	//数组的乘积；
	$arr09 = array(4.2,34.7,4,"e");
	$num = array_product($arr09);
	echo $num;
	echo "<br>";



/*
 End of file
 Location:2.php
 */