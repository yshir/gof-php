<?php

class Singleton
{
  final protected function __construct()
  {
    echo "Created an instance\n";
  }

  final public static function getInstance(): self
  {
    static $instance;
    if (!$instance) {
      $instance = new static();
    }
    return $instance;
  }
}
