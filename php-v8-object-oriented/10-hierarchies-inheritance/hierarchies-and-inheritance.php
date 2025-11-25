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
    public static string $test = 'admin';

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

    // simulating saving into database
    public function storingAdminCredentials($name, $email): void
    {
        echo "saving into database... {$name} - {$email}" . PHP_EOL;
        var_dump(self::$adminUsers) . PHP_EOL;
    }

    // 
    public static function getAllAdminUsers(): string
    {
        $length = count(self::$adminUsers);

        var_dump(self::$adminUsers);
        // 
        return "admins found {$length}" . PHP_EOL;
    }
}
// testing!!
$tommino = new AdminUser('tommino', 'tomminotest@gmail.com');
$andrea = new AdminUser('andrea', 'andrea@gmail.com');

var_dump($tommino->getPermissions()) . PHP_EOL;
var_dump($andrea->role) . PHP_EOL;

// get all admins from class
$allAdmins = AdminUser::getAllAdminUsers();
var_dump($allAdmins);

// testing login and logout
var_dump($tommino->login());
var_dump($tommino->logout());
var_dump($andrea->login());
var_dump($andrea->logout());
// 
// $tommino->getTest();

// new class
// class ProjectManager extends User {}
