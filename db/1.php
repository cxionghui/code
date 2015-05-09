<?php


	echo "<br/>";

	//mysql:host=当前主机名;dbname=当前数据库;
	$dsn = "mysql:host=localhost;dbname=test";
	$db = new PDO($dsn,"root","root");
	$db->exec("SET NAMES gbk");


	// foreach ($db->query("SELECT * FROM user LIMIT 2") as $row) {
	// 	print_r($row);
	// }


	// $rs = $db->query("SELECT * FROM user");
	// $result = $rs->fetchAll();
	// var_dump($result);

	$rs = $db->prepare("SELECT * FROM user");
	$result = $rs->execute();
	var_dump($result);
	//return : boolean true

	$db = null;




?>