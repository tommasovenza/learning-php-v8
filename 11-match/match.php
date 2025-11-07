<?php

$toCheck = 'wrong';

$result = match ($toCheck) {
    'active' => 'Match Active',
    'not_active', 'inactive' => 'Unmatched',
    default => 'Not set any match',
};

var_dump($result);
