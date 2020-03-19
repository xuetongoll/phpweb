<?php

class UserInfo {
	var $id;
	var $name;
	var $sex;
	var $age;

	function __construct( $name, $sex,$age ) {
		$this->name = $name;
		$this->sex = $sex;
		$this->age = $age;
	}
}
?>