<?php

declare(strict_types=1);

function getSum(int $a, int $b): int // for the return value if we will want to use echo instead of int should be void
{
    return $a + $b;
}
echo getSum(1, 2); //3

function greeting(string  $name): void
{
    echo 'hello' . $name;
}
greeting('John'); // hello John