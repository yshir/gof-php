<?php

use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{
  public function testSingletonGetInstance()
  {
    $instance1 = Singleton::getInstance();
    $instance2 = Singleton::getInstance();
    $this->assertTrue($instance1 === $instance2);
  }
}
