<?php

namespace App\Util;

class Calcul
{
    /**
     * @param $a un nombre entier
     * @param $b un nombre entier autre que 0 
     * @throws InvalidArgumentException si $b est égal à 0
     * @return un nombre entier 
     */
    public static function division($a, $b)
    {
        if ($b == 0) throw new \InvalidArgumentException();
        return (int)($a / $b);
    }
}
