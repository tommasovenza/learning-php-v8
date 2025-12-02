<?php

// require
require_once "../Exception/ErrorHandler.php";
// use
use App\Exception\ErrorHandler;

$error = new ErrorHandler();
var_dump($error->test());
