<?php
namespace MX\Models\User;

class User
{
    public int $ident;
    public string $fname;
    public string $lname;
    public string $role;
    public string $dateCreated;
    public function __construct($ident, $fname, $lname, $role){
        $this->ident = $ident;
        $this->fname = $fname;
        $this->lname = $lname;
        $this->role  = $role;
        $this->dateCreated  =  Date("d-m-Y");
    }
}

