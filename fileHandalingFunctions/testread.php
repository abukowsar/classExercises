<?php
$my_file = 'test.txt';
$handle = fopen($my_file, 'r');
$data = fread($handle,filesize($my_file));
echo $data;
?>