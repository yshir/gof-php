<?php

interface MyAggregate
{
  public function iterator();
}

interface MyIterator
{
  public function next();
  public function hasNext();
}

class Book
{
  private $name;

  public function __construct(string $name)
  {
    $this->name = $name;
  }

  public function getName(): string
  {
    return $this->name;
  }
}

class BookShelf implements MyAggregate
{
  private $books;

  public function __construct()
  {
    $this->books = [];
  }

  public function add(string $bookName): void
  {
    array_push($this->books, new Book($bookName));
  }

  public function getLength(): int
  {
    return count($this->books);
  }

  public function getBookAt(int $index): Book
  {
    return $this->books[$index];
  }

  public function iterator(): BookShelfIterator
  {
    return new BookShelfIterator($this);
  }
}

class BookShelfIterator implements MyIterator
{
  private $bookShelf;
  private $index;

  public function __construct(BookShelf $bookShelf)
  {
    $this->bookShelf = $bookShelf;
    $this->index = 0;
  }

  public function next(): Book
  {
    return $this->bookShelf->getBookAt($this->index++);
  }

  public function hasNext(): bool
  {
    return $this->index < $this->bookShelf->getLength();
  }
}
