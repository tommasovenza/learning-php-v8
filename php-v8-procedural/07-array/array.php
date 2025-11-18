<?php

// create an array
$array = ['AUDI', 'BMW', 'FIAT'];
// 
var_dump($array);

$array[2] = "PEUGEOT";
$array[] = "CITROEN";

// 
var_dump($array);

// associative array 
$array = [
    "AUDI" => "Audi A3",
    "BMW" => "BMW M4",
    "FIAT" => "Grande Punto"
];

// get an element by key
var_dump($array["AUDI"]);

// add an element by key
$array["TESLA"] = "Model S";

// dump
var_dump($array);

// mod an element by key
$array["BMW"] = "Model M6";

var_dump($array);

// multiDim array
$multiDimArray = [
    "AUDI" => [
        "brand" => "AUDI",
        "model" => "A3"
    ],
    "BMW" => [
        "brand" => "BMW",
        "model" => "M4"
    ],
    "FIAT" => [
        "brand" => "FIAT",
        "model" => "Grande Punto"
    ]
];
// dump
var_dump($multiDimArray["AUDI"]["model"]);

// Unset 
unset($multiDimArray["FIAT"]);
unset($multiDimArray["BMW"]["model"]);

// New Value
$multiDimArray["BMW"]["model"] = "new model";
