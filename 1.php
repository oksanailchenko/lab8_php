<!DOCTYPE html>
<html>
<head>
<title>Чат</title>
</head>
<body>
<?php
$h =$_GET['login'];
$fname="acounts.txt";
$f=fopen($fname,"a");
fputs($f,"$h<br>");
fclose($f);
?>
<h2>Введіть повідомлення</h2>
<form action="2.php" method="GET">
<input type="hidden" name="$h" value="$h">
<input name="message" type="text" >
<input type="submit" name="Надіслати" value="Надіслати">
<br> <br>
<?php
$cnt_file="text.txt"; // Файл
$f=fopen($cnt_file,"r");
while($s=fgets($f)) print "$s<br>";
fclose($f);
?>
</form>
</body>
</html>
