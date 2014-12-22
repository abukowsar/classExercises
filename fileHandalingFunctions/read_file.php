<?php
$myFile = "Arifa.txt";
$fh = fopen($myFile, 'r');
$theData = fread($fh, 500);
fclose($fh);
echo $theData;

//alt
$theData = file('Arifa.txt');
print_r($theData);

//alt
$theData =  file_get_contents('Arifa.txt');
echo $theData;

$explodetheData = explode("\n", $theData);
print_r($thaData);

?>

