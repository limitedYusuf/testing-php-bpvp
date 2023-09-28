<?php

use Testing\Calculator;
use PHPUnit\Framework\TestCase;

class PerformanceTest extends TestCase
{
   public function testPerformance()
   {
      $calculator = new Calculator();
      $start = microtime(true);
      for ($i = 0; $i < 1000; $i++) {
         $calculator->calculate();
      }
      $end = microtime(true);
      $executionTime = $end - $start;

      $this->assertLessThan(1, $executionTime);
   }
}

?>