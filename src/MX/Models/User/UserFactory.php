<?php
namespace MX\Models\User;
class UserFactory 
{

    	public $stored = [];
    public function createUser($ident, $fname, $lname, $role)
    {
	$user =  new User($ident, $fname, $lname, $role);
    	$user->dateCreated = date('Y-m-d H:i:s');
    	return $user;
    }
    
    public function __destruct()
    {
	// saved for future use
    }
}

