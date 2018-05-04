<?php
$s =$_GET['message'];
$fname="text.txt";
$f=fopen($fname,"a");
fputs($f,"$s<br>");
fclose($f);
?>
