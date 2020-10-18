<?php

require('lib/Iterator.php');

function main()
{
  $bookShelf = new BookShelf();
  $bookShelf->add('Book1');
  $bookShelf->add('Book2');
  $bookShelf->add('Book3');
  $bookShelf->add('Book4');
  $iterator = $bookShelf->iterator();

  while($iterator->hasNext())
  {
    echo "{$iterator->next()->getName()}\n";
  }
}
main();
