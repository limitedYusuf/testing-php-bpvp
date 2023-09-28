<?php

use PHPUnit\Framework\TestCase;

class Calculator
{
   public function divide($a, $b)
   {
      if ($b === 0) {
         throw new \InvalidArgumentException("Division by zero is not allowed.");
      }
      return $a / $b;
   }
}

class ExceptionTest extends TestCase
{
   public function testDivideByZero()
   {
      $calculator = new Calculator();
      $this->expectException(\InvalidArgumentException::class);
      $calculator->divide(10, 0);
   }
}
?>