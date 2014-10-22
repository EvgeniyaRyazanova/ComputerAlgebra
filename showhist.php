<?php

$my_request = $_GET["request"];
$my_request = str_replace(" ", "+", $my_request);
$f = fopen('history.txt', 'a');
fwrite($f,$my_request.PHP_EOL);
fclose($f);
  
?>