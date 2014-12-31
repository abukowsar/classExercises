<?php
$my_file = 'Arifa.txt';
$d=unlink($my_file);


if ($d){
echo "File has been deleted";} else
{echo "File has not been created";}
?>