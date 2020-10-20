<?php

require('lib/FactoryMethod.php');

function main()
{
  $factory = new IDCardFactory();

  $idCard1 = $factory->create('User1');
  $idCard2 = $factory->create('User2');
  $idCard3 = $factory->create('User3');

  $idCard1->use();
  $idCard2->use();
  $idCard3->use();
}
main();
