<?php

require_once "../Interfaces/Authenticable.php";
require_once "../Abstracts/User.php";

use App\Abstracts\User;

// create some Users classes
class AdminUser extends User
{
    // array
    private $adminUsers = [];

    // $name and $email are inherited from User Class
    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;

        // storing admin email
        $this->adminUsers[] = $email;

        // storing into database some information
        $this->storingAdminCredentials($this->name, $this->email);
    }

    public function storingAdminCredentials($name, $email): void
    {
        echo "saving into database... {$name} - {$email}" . PHP_EOL;
        var_dump($this->adminUsers) . PHP_EOL;
    }

    public function seeAllAdminUsers(): void
    {
        $length = count($this->adminUsers);

        var_dump($this->adminUsers);
        // 
        echo "admins found {$length}";
    }
}

// testing!!
$tommaso = new AdminUser('Tommaso Venza', 'tommasovenza@gmail.com');
$giacomo = new AdminUser('Giacomo Demurtas', 'giacomodemurtas@gmail.com');
var_dump($tommaso) . PHP_EOL;
var_dump($giacomo) . PHP_EOL;
$giacomo->seeAllAdminUsers();
$tommaso->seeAllAdminUsers();
