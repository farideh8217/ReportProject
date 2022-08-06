<?php
require "security.php";
session_start();
$dsn = "mysql: host=".HOST.";dbname=".DBNAME.";charset=utf8mb4";
try{
	$db = new PDO($dsn,USERNAME,PASSWORD);
}catch(PDOException $error){
	echo "خطا در برقراری ارتباط با دیتابیس";
}

