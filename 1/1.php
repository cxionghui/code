<?php


$dir = "D:\sss";
if (is_dir($dir)) {
	$dir_res = opendir($dir);
	var_dump($dir_res);
	echo "$dir 下面的内容有：","<br/>";
	while ($file = readdir($dir_res)) {
		echo $file,"<br/>";
	}
}

closedir($dir_res);












?>