<?php 
$number = 2456;
$array  = array_map('intval', str_split($number));
print_r($array);

