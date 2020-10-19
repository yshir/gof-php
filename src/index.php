<?php

require('lib/Adapter.php');

function main()
{
  $printBanner = new PrintBanner('TEXT');
  $printBanner->printWeak();
  echo "\n";
  $printBanner->printStrong();
  echo "\n";
}
main();
