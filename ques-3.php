<?php
$string='Join with storybox';
$strArray=explode(' ',$string);

foreach($strArray as $str){
     echo rotateString($str, 1).'ay ';
}
function rotateString($str, $len) {
     $len = $len % strlen($str);
    return substr($str, $len) . substr($str, 0, $len);
}
