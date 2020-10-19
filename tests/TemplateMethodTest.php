<?php

use PHPUnit\Framework\TestCase;

class TemplateMethodTest extends TestCase
{
  public function testStringDisplay()
  {
    $stringDisplay = new StringDisplay('text');
    ob_start();
    $stringDisplay->display();
    $printedText = ob_get_clean();
    $this->assertEquals('[texttexttexttexttext]', $printedText);
  }
}
