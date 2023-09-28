<?php

use Testing\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
   private $calculator;

   // dijalankan sebelum setiap metode pengujian.
   public function setUp(): void
   {
      $this->calculator = new Calculator();
   }

   // dijalankan setelah setiap metode pengujian.
   public function tearDown(): void
   {
      $this->calculator = null;
   }

   public function testAdd()
   {
      // Pengujian penambahan.
      $result = $this->calculator->add(2, 3);
      $this->assertEquals(5, $result);
   }

   public function testSubtract()
   {
      // Pengujian pengurangan.
      $result = $this->calculator->subtract(5, 3);
      $this->assertEquals(2, $result);
   }
}

?>