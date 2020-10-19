<?php

interface MyPrint
{
  public function printWeak(): void;
  public function printStrong(): void;
}

class Banner
{
  private $text;

  public function __construct(string $text)
  {
    $this->text = $text;
  }

  public function showWithParen(): void
  {
    echo "({$this->text})";
  }

  public function showWithAster(): void
  {
    echo "*{$this->text}*";
  }
}

class PrintBanner extends Banner implements MyPrint
{
  public function __construct(string $text)
  {
    parent::__construct($text);
  }

  public function printWeak(): void
  {
    parent::showWithParen();
  }

  public function printStrong(): void
  {
    parent::showWithAster();
  }
}
