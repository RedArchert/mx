<?php
namespace MX\Controller;
use MX\Models\User\UserFactory;

class UserController
{
    public function user()
    {
	$min = 1;
	$max = 1000;
	$newuser = NULL;
        $factory = new UserFactory();
        $ident = rand($min,$max);
	$fname = $_POST['fname'] ?? '';
	$lname = $_POST['lname'] ?? '';
	$role = $_POST['role'] ?? '';
	$newuser = $factory->createUser($ident, $fname, $lname, $role);
	return $newuser;
    }
}

