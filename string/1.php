<?php

//添加反斜线；
$str = "My name's Xingxing";
$mystr = addslashes($str);
echo "$mystr";



//移除右侧的特定字符;
$str1 = "   Xingxing    	";
$str2 = chop($str1);
var_dump($str1);
var_dump($str2);



//把一个ASCII值转化为相应的字符；
echo chr(120);
echo chr(0151);
echo chr(0x6e);
echo "<br/>";




//将字符串按特点规则分成新的字符；
$str3 = "Xingxing";
$str4 = chunk_split($str3,4,"----love----");
echo $str4;
echo "<br/>";




/*
	1.清除重复的字符，将不重复的字符组成新的字符串；
$str5 = "Xingxing";
	2.是从尾部开始输出的；
*/
$str20 = "zzzzzzzzzzzasdasdasdsadasdasdghjghjghjqqw";
$msg = count_chars($str20,3);
var_dump($msg);





//对字符串进行加密的各种函数；
$str6 = "辛星";
echo md5($str6),"<br/>";
echo sha1($str6),"<br/>";
echo crypt($str6),"<br/>";
echo "<br/>";




//输出函数print();
print("love");
print("小倩");
print("小倩");





/*
	1.输出函数printf();

	2.printf函数用于输出格式化的字符串，
	它的第一个参数通常是带有百分号的格式化后的字符串，
	然后从第二个参数之后的参数会依次匹配到带有百分号的占位符


	3.其中%b表示二进制数，
	 	  %d通常用于整数，
	 	  %f表示浮点数，
	 	  当然还有其他的一些格式，这里不列举了。
*/
printf("我今年%d岁了",18);
echo "<br/>";



//移除空白字符；
$str7 = "      Xingxing    ";
var_dump(ltrim($str7));
var_dump(rtrim($str7));
var_dump(trim($str7));
echo "<br/>";



//将字符串用特点的分隔符分割字符，并将分割的字符集组成数组；
$arr = explode('\\', "D:\wamp\www\fff\string\\1.php");
var_dump($arr);
echo "<br/";




/*
	1.
	htmlentities函数可以把带有html标记的字符串转化为具有html字符实体的字符串;
	2.html_entity_decode是把带有字符实体的字符串转化为html字符
*/
$str8 = "<a href = '#'> 你好 </a> ";
echo $str8;
var_dump($str8);
$str9 = htmlentities($str8);
echo $str9;
var_dump($str9);
$str10 = html_entity_decode($str9);
echo $str10;
var_dump($str10);
echo "<br/>";




//将数组转换为字符串；
$arr1 = array("辛星","小倩","小南");
echo implode("---", $arr1);
echo "<br/>";
echo join($arr1);
echo "<br/>";
echo "<br/>";




//字符串间的大小写转换；
$str11 = "xing love qian forever";
echo ucfirst($str11);
echo "<br/>";
echo lcfirst($str11);
echo "<br/>";
echo ucwords($str11);
echo "<br/>";
echo strtoupper($str11);
echo "<br/>";
echo strtolower($str11);
echo "<br/>";
echo "<br/>";



//\n的换行变为<br/>的换行；
$nl = "辛星永爱<br/>小倩你好";
$br = nl2br($nl);
echo $br;
var_dump($br);
echo "<br/>";
echo "<br/>";
$nl1 = "辛星永爱\n小倩你好";
$br1 = nl2br($nl1);
echo $br1;
var_dump($br);
echo "<br/>";
echo "<br/>";




//字符串与ASII码的互换；
$ordx = ord("x");
echo "x的ASII值是：",$ordx,"<br/>";
$charx = chr($ordx);
echo "下面是其字符信息：",$charx;
echo "<br/>";
echo "<br/>";




//解析变量，可用于URL中提取变量；
$str12 = "name=辛星&age=23";
parse_str($str12);
echo "我的其中一个姓名：",$name;
echo "<br/>";
echo "我的真实年龄：",$age;
echo "<br/>";
$arr2 = array();
parse_str($str12,$arr2);
print_r($arr2);
echo "<br/>";
echo "<br/>";



//两字符串间的相似度；
$str13 = "Hello Xingxing";
$str14 = "Hello xiaoqian";
$num = similar_text($str13, $str14,$p);
echo "相同的字符数目：",$num,"<br/>";
echo "二者的相似度：",$p;
echo "<br/>";
echo "<br/>";



//从csv去解析数据str_getcsv();
$csvdemo = "name,辛星,age,23";
$arr3 = str_getcsv($csvdemo);
var_dump($arr3);
echo "<br/>";
$arr4 = explode(',', $csvdemo);
var_dump($arr4);

