<?php
// sessions

session_start();

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
