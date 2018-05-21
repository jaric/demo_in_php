<?php

$original_filename = './large.csv';
$new_filename = './new_file.csv';

$large_file = file_get_contents($original_filename);
print_r($large_file);
