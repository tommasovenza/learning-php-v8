<?php

// array_combine(array $keys, array $values): array

$array1 = ['a', 'b', 'c'];
$array2 = [3, 6, 9];

// dimensions' array must be equal => same length
var_dump(array_combine($array1, $array2));

// array_filter(array $array, ?callable $callback = null, int $mode = 0)

$array = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];

$odd = array_filter($array, fn($item) => $item % 2 !== 0);

var_dump($odd);

// array_keys(array $array, mixed $filter_value = null, bool $strict = false)

$array = ['a' => 3, 'b' => 6, 'c' => 9, 'd' => '9'];

var_dump(array_keys($array, 9, true));

// array_map(callable $callback, array $array, array ...$arrays)

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9];

$array2 = array_map(fn($item) => $item * 2, $array);

var_dump($array, $array2);

// array_merge(array ...$arrays): array

$array1 = ['a' => 1, 2, 3];
$array2 = ['a' => 4, 5, 6];
$array3 = ['a' => 7, 8, 9];

var_dump(array_merge($array1, $array2, $array3));


// reduce
$array = [
    ['value' => 19.99, 'amount' => 3, 'description' => 'Item 1'],
    ['value' => 29.99, 'amount' => 6, 'description' => 'Item 2'],
    ['value' => 39.99, 'amount' => 9, 'description' => 'Item 3'],
];

$total = array_reduce(
    $array,
    fn($sum, $item) => $sum + ($item['value'] * $item['amount'])
);

var_dump($array, $total);
$array = ['a' => 3, 'b' => 6, 'c' => 9];

var_dump(array_reverse($array));


// search
$array = ['a', 'b', 'c', 'D', 'E', 'F', 'ab', 'cd', 'ef', 'a', 'b', 'c'];

$key = array_search('c', $array);

var_dump($key, $array);
