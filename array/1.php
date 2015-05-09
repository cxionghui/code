<?php 


  $arr = array("a"=>"辛星","b" => "小倩","c" => "小南");

  var_dump($arr);

  $arr2 = ["boy"=>"A","girl"=>"B"];
  var_dump($arr2);

  $arr3 = ["A","B","C"];
  var_dump($arr3);



  $key = array("boy","girl");
  $value = array("辛星","小倩");
  $arr6 = array_combine($key,$value); //$key和$valued的长度必须相等；
  var_dump($arr6);
  // var_dump($key.length);

  //统计作用 ,array_count_values()；
  $arr7 = array("1"=>"小","2"=>"星","3"=>"倩","星","4"=>"小","5"=>"小倩","6"=>"小倩","7"=>"小");
  $msg2 = array_count_values($arr7); //跟键值无关；
  var_dump($msg2);

  //数组之间的比较；
  $arr8 = array("m"=>"小","n"=>"星","t"=>"A");
  $arr9 = array("m"=>"倩","n"=>"星","k"=>"A","e"=>"b");
  $msg3 = array_diff_assoc($arr8,$arr9);
  /*
	1.放回两个数组之间的差集；
	2.键名区分大小写；
  */
  var_dump($msg3);

  
  $arr02 = array_fill(2,3,"小倩");
	/*
		1.每个元素的键名都相同;
		2.相当于创建新的数组；
	*/  
  print_r($arr02);

  echo "<br>";


  $arr03 = array("m","n","t");
  $msg01 = array_fill_keys($arr03,"小");
  print_r($msg01);
  var_dump($msg01);


  //键值对的互换；
  $msg02 = array_flip($msg01); 
  //若原来有相同的键名，则转换后会出现相同的键值，则只保留最后一个的；
  print_r($msg02);
  $msg03 = array_flip($arr03);
  print_r($msg03);
  echo "<br/>";


  $arr2 = ["B","boy"=>"A","girl"=>"B","c"];
  var_dump($arr2);
  echo "<br/>";


  $arr4  = array("m" => "辛星", "n" => "辛勇" ,"t" => "小倩");
  $arr5 = array("辛星","小倩","小南");
  $msg = array_chunk($arr5, 2,true);
  var_dump($msg);









?>