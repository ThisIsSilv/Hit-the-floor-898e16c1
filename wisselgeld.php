<?php
$geld =$argv[1];
$valueM = array(
  20,
  10,
  5,
  2,
  1
);

foreach ($valueM as $ammount) {
    $aantal = floor($geld / $ammount);
    $geld = $geld - ($aantal * $ammount);
    if ($aantal != 0) {
    echo "$aantal keer $ammount".PHP_EOL;
    }
}