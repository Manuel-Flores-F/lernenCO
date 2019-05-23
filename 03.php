<?php

$cmd="./hola < 01.txt";echo(exec($cmd));
$fp=fopen("02.txt",'w');
fwrite($fp, utf8_decode(exec($cmd)));
fclose($fp);
?>


