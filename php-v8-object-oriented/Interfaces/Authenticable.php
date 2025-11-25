<?php

// create auth interface
namespace App\Interfaces;

interface Authenticable
{
    // login 
    public function login(): string;

    // logout
    public function logout(): string;
}
