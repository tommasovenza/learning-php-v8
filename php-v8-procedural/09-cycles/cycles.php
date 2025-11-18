<?php

// While Cycle

// initialize var
$i = 1;

while ($i <= 10) {
    // printing
    echo $i . PHP_EOL;
    // incrementing var
    $i++;
}

// For Cycle
for ($i = 1; $i <= 10; $i++) {
    // same results but white for cycle
    echo $i . PHP_EOL;
}

// array
$array = ['a', 'b', 'c', 'd', 'e'];

// For on Arrays with Count
for ($i = 0; $i < count($array); $i++) {
    // printing current element
    echo $array[$i] . PHP_EOL;
}

// Better Performance declaring length and using count before cycle condition
$lengthArr = count($array);

for ($i = 0; $i < $lengthArr; $i++) {
    // printing current element
    echo $array[$i] . PHP_EOL;
}

// using foreach on array
foreach ($array as $element) {
    echo $element . PHP_EOL;
}

// using foreach on array with index
foreach ($array as $index => $element) {
    echo "element at index " . $index . " => " . $element . PHP_EOL;
}

$keysArray = [
    'Key' => 'first element',
    'Key 2' => 'second element',
    'Key 3' => 'third element',
];

// using foreach on array with keys
foreach ($keysArray as $key => $el) {
    echo "key: " . $key . " => " . $el . PHP_EOL;
}

// not unsetted element
echo $index . PHP_EOL;
echo $element . PHP_EOL;
echo $key . PHP_EOL;
echo $el . PHP_EOL;

// unsetting
unset($index);
unset($element);
unset($key);
unset($el);

// getting warning now cause these variable have been unsetted
echo $index . PHP_EOL;
echo $element . PHP_EOL;
echo $key . PHP_EOL;
echo $el . PHP_EOL;
