<?php

namespace Tests\App;

use App\Calculator;
use PHPUnit\Framework\TestCase;

final class CalculatorTest extends TestCase
{
   public function testDefault()
   {
        $this->assertInstanceOf(Calculator::class, new Calculator());
   }
}
