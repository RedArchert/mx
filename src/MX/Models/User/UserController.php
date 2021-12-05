<?php

namespace MX\Models\User;

$min = 1;
$max = 1000;

if ( isset( $_POST['submit'] ) ) {

	$newuser = new UserFactory();
	$ident = rand($min,$max);
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$role = $_POST['role'];
	$password = $_POST['password'];
	$newuser->createUser($ident, $fname, $lname, $role, $password);
}		
?>
