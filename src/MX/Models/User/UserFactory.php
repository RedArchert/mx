<?php

use MX\Models\User\User;
class UserFactory 
{

    	public $stored = [];
    public function createUser($ident, $fname, $lname, $role){
    	

	$user =  new User($ident, $fname, $lname, $role);
    	$user->dateCreated = $user->dateCreated;;
    	$this->stored = $user;
    }
    
 	public function __destruct(){
 	
	    $ident = $this->ident;
	    $fname = $this->fname;
	    $lname = $this->lname;
	    $role = $this->role;
	    $dateCreated = $this->dateCreated;
 		header("Location: index.php?ident=$ident&fname=$fname&lname=$lname&role=$role&dc=$dateCreated");
 	}
}

