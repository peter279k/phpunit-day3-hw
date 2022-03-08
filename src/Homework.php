<?php

namespace Lab;

class Homework
{
    public function addGmpBigNumber(string $a, string $b): string
    {
        $sum = gmp_add($a, $b);

        return gmp_strval($sum);
    }
 
    public function concatString(string $a, string $b): string
    {
        return $a . $b;
    }
 
    public function wait($second): void
    {
        sleep(1);
    }
}
