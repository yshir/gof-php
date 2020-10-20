<?php

require('lib/Singleton.php');

function main()
{
  echo "Run\n";
  $instance1 = Singleton::getInstance();
  $instance2 = Singleton::getInstance();
  if ($instance1 === $instance2) {
    echo "These instances are same\n";
  } else {
    echo "These instances are different\n";
  }
  echo "All done\n";
}
main();
