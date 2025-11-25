<?php

// create abstract class User
namespace App\Abstracts;

use App\Interfaces\Authenticable;

abstract class User implements Authenticable
{
    // User Properties
    protected string $name;
    protected string $email;
    protected string $role;

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
        return $this->role;
    }

    // check user and return its permission
    public function getPermissions(): string
    {
        $checkRole = $this->role;

        switch ($checkRole) {
            case 'ADMIN':
                # code...
                return "You are an {$this->role}";
                break;

            case 'PM':
                # code...
                return "You are a {$this->role}";
                break;

            default:
                return "You are a NOT Authenticated!";
                # code...
                break;
        }
    }
}
