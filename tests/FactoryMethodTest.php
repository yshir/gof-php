<?php

use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
  public function testStringDisplay()
  {
    $factory = new IDCardFactory();
    ob_start();
    $idCard = $factory->create('user');
    $idCard->use();
    $printedText = ob_get_clean();
    $this->assertEquals("Created user's ID card.\nUsed user's ID card.\n", $printedText);
  }
}
