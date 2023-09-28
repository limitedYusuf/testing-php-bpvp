<?php

use PHPUnit\Framework\TestCase;
use Testing\Calculator;

class MathTest extends TestCase
{
   private $math;

   protected function setUp(): void
   {
      parent::setUp();
      $this->math = new Calculator();
   }

   public static function additionDataProvider()
   {
      return [
         [2, 3, 5], // 2 + 3 = 5
         [0, 0, 0], // 0 + 0 = 0
         [-1, 1, 0], // -1 + 1 = 0
         [10, -5, 5], // 10 + (-5) = 5
      ];
   }

   /**
    * @dataProvider additionDataProvider
    */
   public function testAdd($a, $b, $expected)
   {
      $result = $this->math->add($a, $b);
      $this->assertEquals($expected, $result);
   }
}
?>