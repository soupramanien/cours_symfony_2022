<?php

namespace App\Tests\Unit;

use App\Util\Calcul;
use PHPUnit\Framework\TestCase;

class CalculTest extends TestCase
{
    public function testDivisionCasNormal(): void
    {
        $resActuel = Calcul::division(10, 2);
        $this->assertEquals(5, $resActuel);
    }
    public function testDivisionDoitRetournerEntier(): void
    {
        $resActuel = Calcul::division(11, 2);
        $this->assertEquals(5, $resActuel);
    }
    public function testDivisionCasException(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        Calcul::division(10, 0);
    }
}
