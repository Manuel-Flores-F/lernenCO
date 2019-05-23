<?php
$data=$_POST['data'];
$fp=fopen("01.txt",'w');
fwrite($fp, utf8_decode($data));
fclose($fp);

?>


