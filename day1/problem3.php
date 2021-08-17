<?php
function camelCase($inputArrayString)
{
    $outputStringArray = [];
    foreach ($inputArrayString as $sub) {

        $localArray = explode("_", $sub);
        $charAscii = ord($localArray[1][0]);
        $localArray[1][0] = chr($charAscii - 32);
        $localString = $localArray[0] . $localArray[1];
        array_push($outputStringArray, $localString);
    }
    print_r($outputStringArray);
}

$inputArrayString=["snake_case", "camel_case"];
camelCase($inputArrayString);




