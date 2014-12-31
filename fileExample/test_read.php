<?php
$myFile = "Arifa.txt";
$fh = fopen($myFile, 'r');
$theData = fread($fh, 500);
fclose($fh);
echo $theData;
?>