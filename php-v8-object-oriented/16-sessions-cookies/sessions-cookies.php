<?php
// sessions
session_start();
setcookie('newtwo', 123);
// setcookie('newtwo', 123, time() + 11); // we can use more params than 2 in setcookie function

// check what is $_SESSION
// var_dump($_SESSION); // Undefined global variable $_SESSION // => missing session_start()

// now $_SESSION is an empty array

// put a counter in
$_SESSION['counter'] = ($_SESSION['counter'] ?? 0) + 1; // incrementing
// incrementing
// $_SESSION['counter'] = $_SESSION['counter'] + 1;

// var_dump($_SESSION);

// session_destroy(); // => with session destroy counter will be no more incremented

var_dump($_SESSION); // example cookie stored in network tab PHPSESSID=f4fad6c963fd54efc1d46cecdb74fffc


// COOKIE
var_dump($_COOKIE); // PHPSESSID=f4fad6c963fd54efc1d46cecdb74fffc
// in this array we can find same PHPSESSID stored

$_COOKIE['new'] = 123; // this way info not persist after page relaod
// this happened cause we set a new information through server. but it needs to be set by browser, in cookie case.

// so we can use this function => setcookie

// setcookie('new', 123); // is better to put this at file's beginning

var_dump($_COOKIE); // 123 will persists now
