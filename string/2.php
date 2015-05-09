<?php 


//字符替换;
$str1 = "辛星辛勇辛强三兄弟";
$re = str_replace("辛", "小", $str1);
echo $re;
echo "<br/>";
$str2 = "AAAAAAAAAAAAAAA";
$re1 = str_ireplace("a", "b", $str2);
echo $re1;
echo "<br/>";





$str3 = "xingxingxiaoqian";
$str4 = str_rot13($str3);
echo "加密后的数据：",$str4,"<br/>";
$str5 = str_rot13($str4);
echo "解密后的数据：",$str5,"<br/>";


//字符填充;
$str6 = "xinxing";
$str7 = str_pad($str6, 20,"-",STR_PAD_BOTH);
echo $str7;
echo "<br/>";


//打乱字符的顺序;
$str8 = "hello world";
$str9 = str_shuffle($str8);
echo $str9;
echo "<br/>";


//字符串分割为数组;
$str10 = "xinxinglovexiaoqian";
$arr = str_split($str10,3);
print_r($arr);
echo "<br/>";



//字符串的比较;
$str11 = "xinxing";
$str12 = "xiaoqian";
$eq1 = strcasecmp($str11, $str12);
echo "第一次比较结果：",$eq1,"<br/>";
$eq2 = strcasecmp($str11, "XinXimd");
echo "第二次比较结果：",$eq2,"<br/>";



//??
$str12 = "xinxingooxiaoqian";
echo "oo之前的部分",strstr($str12, "oo",true);
echo "<br/>";
echo "oo之后的部分",strstr($str12, "oo");
echo "<br/>";
echo "<br/>";


//搜索字符;
$str13 = "xinxingooxiaoqian";
echo "o之前的字符数",strcspn($str13, 'o');
echo "<br/>";
echo "<br/>";



//统计字符长度;
$str14 = "xinxingooxiaoqian";
echo "字符长度：",strlen($str14);
echo "<br/>";
echo "<br/>";



//关于转义的增添与去除;
$str15 = "I'm xingxing.You're qian";
$sgstr = addslashes($str15);
echo "转义之后",$sgstr,"<br/>";
$nfstr = stripcslashes($sgstr);
echo "去掉转义",$nfstr;
echo "<br/>";
echo "<br/>";




$str16 = "xinxinglovexiaoqian";
$pos = strpos($str16, "a");
echo "a第一次出现的位置：",$pos;
echo "<br/>";
echo "<br/>";



//翻转字符串;
$str17 = "xinxinglovexiaoqian";
$revstr = strrev($str17);
echo "翻转之后：",$revstr;
echo "<br/>";
echo "<br/>";



$str18 = "xinxinglovexiaoqianlovexiaoqian";
$mystr = strpbrk($str18, "love");
echo "love之后的部分：",$mystr;
echo "<br/>";
echo "<br/>";



$src = "xinxing";
$desc = "xiaoqian";
echo "匹配到的字符个数：",strspn($src, $desc);
echo "<br/>";
echo "<br/>";




$file = "D:\wamp\www\fff\string\\2.php";
echo "路径信息：",$file,"<br/>";
$token = strtok($file, "\\");
echo "所在的盘：",$token,"<br/>";
do{
	if($token = strtok("\\")){
		echo "下一级目录：",$token,"<br/>";
	}
}while($token != false);
echo "<br/>";
echo "<br/>";


//字符截取;
$str19 = "xinxinglovexiaoqian";
$substr = substr($str19, 7,5);
echo $substr;
echo "<br/>";
echo "<br/>";





$str20 = "xinxing";
$str21 = "xing";
echo substr_compare($str20, $str21, 3);
echo "<br/>";
echo "<br/>";



//字字符串在字符串中出现的次数;
$str23 = "xingxingxinyongandxinqiang";
echo substr_count($str23, "xin");
echo "<br/>";
echo "<br/>";





$str24 = "aaaaaaaaaaaaaaaaaaaaaaaaaaaaa";
echo substr_replace($str24, "xinGe", 6,3);




 ?>
