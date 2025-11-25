<?php

require_once "../Interfaces/Authenticable.php";
require_once "../Abstracts/User.php";

use App\Abstracts\User;

// create some Users classes
class AdminUser extends User
{
    // static array so users persist between instances
    private static $adminUsers = [];
    public string $role = 'ADMIN';

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
$tommaso = new AdminUser('Tommino', 'tommino@gmail.com');

var_dump($tommaso) . PHP_EOL;

// get all admins from class
$allAdmin = AdminUser::getAllAdminUsers();
var_dump($allAdmin);

// testing login and logout
var_dump($tommaso->login()) . PHP_EOL;
var_dump($tommaso->logout()) . PHP_EOL;
var_dump($tommaso->role) . PHP_EOL;
var_dump($tommaso->getPermissions()) . PHP_EOL;

// new class
// class ProjectManager extends User {}