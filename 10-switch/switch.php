<?php

// set status
$status = "";

// switch
switch ($status) {
    // first case
    case "active":
        echo "status active!";
        break;
    // second case
    case "inactive":
        echo "status not active";
        break;
    // default case // fallback
    default:
        echo "undefined";
}
