<?php

include $_SERVER['DOCUMENT_ROOT'].'/src/user/user_helper.php';

$method=$_SERVER['REQUEST_METHOD'];

switch ($method) {
	case 'GET':
	$user = new UserInfo($_GET['name']
		,$_GET['sex']
		,$_GET['age']);
	Add($user);
	break;
	case 'POST':
	$user = new UserInfo($_POST['name']
		,$_POST['sex']
		,$_POST['age']);
	Add(user);
	break;
	default:
			# code...
	break;
}

?>