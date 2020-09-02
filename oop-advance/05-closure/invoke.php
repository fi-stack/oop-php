<?php

class isPossitiveInt
{
    public function __invoke($value)
    {
        // apakah value tsb int dan lebih dari 0
        return ((int) $value == $value && $value > 0);
    }
}

$invoke = new IsPossitiveInt();

var_dump($invoke(1));
var_dump($invoke('5'));
var_dump($invoke(4.0));
var_dump($invoke(-2));
var_dump($invoke(3.1)); // float
