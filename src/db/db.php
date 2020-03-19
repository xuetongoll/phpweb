<?php

function connect_db($dbname)
{
	$servername = 'localhost';
	$username = 'root';
	$password = 'a3213964';
	// 创建连接
	$conn = new mysqli($servername, $username, $password,$dbname);
	// 检测连接
	if ($conn->connect_error) {
		die("连接失败: " . $conn->connect_error);
		return false;
	} 
	echo "db连接成功"."<br>";
	return $conn;
}


function execute_sql($dbname,$sql)
{
	if($conn = connect_db($dbname))
	{
		$result = $conn->query($sql);

		if($result === false)
		{
			echo 'Error:'.$conn->error."<br>";
		}

		$conn->close();

		return $result;
	}
	else
	{
		return false;
	}
}
?>