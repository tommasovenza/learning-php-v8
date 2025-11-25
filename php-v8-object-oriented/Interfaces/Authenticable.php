<?php

// create auth interface
namespace App\Intefaces;

interface Authenticable
{
    // login 
    public function login(): string;

    // logout
    public function logout(): string;
}
