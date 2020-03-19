<?php
include$_SERVER['DOCUMENT_ROOT'].'/src/user/user.php';
include$_SERVER['DOCUMENT_ROOT'].'/src/db/db.php';

$dbname = 'php_test';
$tablename = '用户信息';

function Add($user)
{
	global $dbname,$tablename;

	$id = GenarateNewUserId();

	$sql = "INSERT INTO $tablename (id,name,age,sex)
	VALUES ('$id','$user->name',
	$user->age,'$user->sex')";

	$result = execute_sql($dbname,$sql);

	if($result !== FALSE)
	{
		echo '添加成功'."($id,$user->name,
		$user->age,$user->sex)".'<br>';
	}
}

function GenarateNewUserId()
{
	return md5(uniqid());
}

?>