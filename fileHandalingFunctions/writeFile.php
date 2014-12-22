<?php
//$my_file = 'Arifa.txt';
//$handle = fopen($my_file, 'r');
//$data = fread($handle,filesize($my_file));


//$TestFile = "Arifa.txt";
//$fp = fopen($TestFile, "w");
//$isWritten = fwrite($fp.'whatever i want to write');
//var_dump($isWritten);



file_put_contents ('Arifa.txt', 'whatever it is...' );
var_dump($isWritten);

?>