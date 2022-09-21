<?php

namespace Lugasalhawariy\SimplePackage;

use Lugasalhawariy\SimplePackage\interfaces\CalculateInterface;

class Calculate implements CalculateInterface
{
    public function sum($a, $b)
    {
        return $a + $b;
    }

    public function divide($a, $b)
    {
        return $a / $b;
    }
}
