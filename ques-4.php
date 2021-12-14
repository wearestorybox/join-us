<?php
$numbers = array(1,2,3,4,5,6);
$rotate=rotateByK($numbers,2);
print_r($rotate);
function rotateByK($numbers,$key){
    if(count($numbers)>=$key){
        $rev=[];
        for($i=0;$i<$key;$i++){
            $rev[]=$numbers[$i];
            unset($numbers[$i]);
        }
        return array_merge($numbers,$rev);
    }

}

