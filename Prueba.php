<?php declare(strict_types=1);

namespace App\Tests; // Puedes usar un namespace como este

use PHPUnit\Framework\TestCase;

final class Prueba extends TestCase
{
    public function testLaSumaFuncionaCorrectamente(): void
    {
        $this->assertEquals(4, 2 + 2);
    }
}
