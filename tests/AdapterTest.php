<?php

use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase
{
  public function testPrintStrong()
  {
    $printBanner = new PrintBanner('text');
    ob_start();
    $printBanner->printStrong();
    $printedText = ob_get_clean();
    $this->assertEquals('*text*', $printedText);
  }

  public function testPrintWeak()
  {
    $printBanner = new PrintBanner('text');
    ob_start();
    $printBanner->printWeak();
    $printedText = ob_get_clean();
    $this->assertEquals('(text)', $printedText);
  }
}
