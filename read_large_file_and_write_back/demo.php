<?php

$original_filename = './large.csv';
$new_filename = './new_file.csv'; 

/*
$large_file = file_get_contents($filename);
print_r($large_file);
*/

$new_fp = fopen($new_filename, 'w') or die("Couldn't get new_fp");


$original_fp = fopen($original_filename, "r") or die("Couldn't get original_fp");
if ($original_fp) {
    while (!feof($original_fp)) {
        $buffer = fgets($original_fp, 4096);
        fputs($new_fp, $buffer);
       // echo $buffer;
    }
    fclose($original_fp);
}
fclose($new_fp);
