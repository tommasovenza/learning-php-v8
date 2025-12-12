<?php

// datetime object
$date = new DateTime('now', new DateTimeZone('UTC'));
// dump
var_dump($date);

// ***** Difference Time Between two Date Objects ***** //
$today = new DateTime('now');
var_dump($today);

$thatDay = new DateTime('2016-05-21 16:30:00');
var_dump($thatDay);

$timegap = $thatDay->diff($today); // first one is the same of the second one
var_dump($timegap);

$timegap2 = $today->diff($thatDay); // first one is the same of the second one
var_dump($timegap2);
