<?php
	//error_reporting(0);关闭错误报告
	ob_start();
	session_start(); 
	$servername = "localhost:3308";
	$username = "root";
	$password = "";
	$dbname = "daima";
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
        die("连接失败: " . $conn->connect_error);
    } 
    $conn->query("SET NAMES 'gbk'"); 

	?>