<?php

abstract class AbstractDisplay
{
  abstract public function open();
  abstract public function print();
  abstract public function close();

  final public function display(): void
  {
    $this->open();
    for ($i = 0; $i < 5; $i++) {
      $this->print();
    }
    $this->close();
  }
}

class StringDisplay extends AbstractDisplay
{
  private $text;

  public function __construct(string $text)
  {
    $this->text = $text;
  }

  public function open()
  {
    echo '[';
  }

  public function print()
  {
    echo $this->text;
  }

  public function close()
  {
    echo ']';
  }
}
