<?php

function flattenArray($inputArray){
    $outputArray=[];
    foreach ($inputArray as $value) {
        if (is_array($value) == true) {
            foreach ($value as $subValue) {
                array_push($outputArray, $subValue);
            }
        } else {
            array_push($outputArray, $value);
        }
    }


    print_r($outputArray);
}
$inputArray= [1, 2, [4,5], [6,7], 8];
flattenArray($inputArray);


