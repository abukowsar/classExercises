<?php

$file = 'counter.txt';

$data = file_get_contents ( $file );
echo ($data);

$data = ($data) + 1;

file_put_contents($file, $data);

?>