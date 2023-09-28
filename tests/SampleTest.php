<?php

use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
   public function testEquality()
   {
      $value1 = 5;
      $value2 = 5;

      $this->assertEquals($value1, $value2);
   }

   public function testTrue()
   {
      $result = true;

      $this->assertTrue($result);
   }

   public function testFalse()
   {
      $result = false;

      $this->assertFalse($result);
   }

   public function testNull()
   {
      $value = null;

      $this->assertNull($value);
   }

   public function testNotNull()
   {
      $value = 'notnull';

      $this->assertNotNull($value);
   }

   public function testEmpty()
   {
      $value = [];

      $this->assertEmpty($value);
   }

   public function testNotEmpty()
   {
      $value = [1, 2, 3];

      $this->assertNotEmpty($value);
   }

   public function testContains()
   {
      $array = ['apple', 'banana', 'cherry'];

      $this->assertContains('banana', $array);
   }

   public function testNotContains()
   {
      $array = ['apple', 'banana', 'cherry'];

      $this->assertNotContains('grape', $array);
   }

   public function testGreaterThan()
   {
      $value = 10;

      $this->assertGreaterThan(5, $value);
   }

   public function testLessThan()
   {
      $value = 3;

      $this->assertLessThan(5, $value);
   }
}
?>