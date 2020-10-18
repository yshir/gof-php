<?php

use PHPUnit\Framework\TestCase;

class IteratorTest extends TestCase
{
  public function testIterator()
  {
    $bookShelf = new BookShelf();
    $bookShelf->add('Book1');
    $bookShelf->add('Book2');
    $bookShelf->add('Book3');
    $iterator = $bookShelf->iterator();

    $results = [];
    while($iterator->hasNext()) {
      array_push($results, $iterator->next()->getName());
    }
    $this->assertEquals('Book1', $results[0]);
    $this->assertEquals('Book2', $results[1]);
    $this->assertEquals('Book3', $results[2]);
  }
}
