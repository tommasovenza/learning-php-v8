<?php

// create abstract class User
namespace App\Abstracts;

use App\Intefaces\Authenticable;

abstract class User implements Authenticable
{
    // User Properties
    private $name;
    private $email;

    // login
    public function login(): string
    {
        return "login user {$this->name} - {$this->email}...";
    }

    // logout
    public function logout(): string
    {
        return "logout user {$this->name} - {$this->email}...";
    }

    // check $name and return role
    public function getRoleName(): string
    {
        return "user role name...";
    }

    // check user and return its permission
    public function getPermissions(): string
    {
        return "permission...";
    }
}
