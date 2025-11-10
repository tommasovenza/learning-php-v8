<?php

// include
include "file.php";

// include a not existing file
include "myfile.php";
// result => Warning: include(myfile.php): Failed to open stream: No such file or directory in

// require "myfile.php";
// result => Fatal error: Uncaught Error: Failed opening required 'myfile.php' (include_path='.:'

// if you include same file with a function declare there will be two func declaration
// ... so there will be problems with require
# require "file.php";
# require "file.php"; // Cannot redeclare function test() 

// better using require_once

require_once "file.php";
require_once "file.php";
