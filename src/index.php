<?php

require('lib/TemplateMethod.php');

function main()
{
  $stringDisplay = new StringDisplay('text');
  $stringDisplay->display();
}
main();
