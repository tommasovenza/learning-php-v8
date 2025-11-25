<?php

require_once "../Interfaces/Authenticable.php";
require_once "../Abstracts/User.php";

use App\Abstracts\User;

// create some Users classes
class AdminUser extends User
{
    // static array so users persist between instances
    private static $adminUsers = [];

    // $name and $email are inherited from User Class
    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;

        // storing admin email
        self::$adminUsers[] = $email;

        // storing into database some information
        $this->storingAdminCredentials($this->name, $this->email);
    }

    public function storingAdminCredentials($name, $email): void
    {
        echo "saving into database... {$name} - {$email}" . PHP_EOL;
        var_dump(self::$adminUsers) . PHP_EOL;
    }

    public static function getAllAdminUsers(): string
    {
        $length = count(self::$adminUsers);

        var_dump(self::$adminUsers);
        // 
        return "admins found {$length}" . PHP_EOL;
    }
}

// testing!!
$tommaso = new AdminUser('Tommino', 'tommio@gmail.com');

var_dump($tommaso) . PHP_EOL;

// get all admins from class
$allAdmin = AdminUser::getAllAdminUsers();
var_dump($allAdmin);
