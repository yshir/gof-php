<?php

use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{
  public function testStringDisplay()
  {
    $instance1 = Singleton::getInstance();
    $instance2 = Singleton::getInstance();
    $this->assertTrue($instance1 === $instance2);
  }
}
