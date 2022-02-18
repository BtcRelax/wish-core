<?php
  require __DIR__ . '/vendor/autoload.php';
  include_once  'src/index.php';
  $cnt = count($adapters,0);
  echo sprintf("%s adapers started!", $cnt);
?>

