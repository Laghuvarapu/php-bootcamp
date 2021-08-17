<?php

$json="{\"players\":[{\"name\":\"Ganguly\",\"age\":45,\"address\":{\"city\":\"Hyderabad\"}},{\"name\":\"Dravid\",\"age\":45,\"address\":{\"city\":\"Hyderabad\"}},{\"name\":\"Dhoni\",\"age\":37,\"address\":{\"city\":\"Hyderabad\"}},{\"name\":\"Virat\",\"age\":35,\"address\":{\"city\":\"Hyderabad\"}},{\"name\":\"Jadeja\",\"age\":35,\"address\":{\"city\":\"Hyderabad\"}},{\"name\":\"Jadeja\",\"age\":35,\"address\":{\"city\":\"Hyderabad\"}}]}";

 $inputObject=json_decode($json);

//echo isset($inputArray["players"]["name"]);
function getNames($inputObject)
{
    $arrayNames = array();
    foreach ($inputObject as $multi) {
        foreach ($multi as $p) {
            array_push($arrayNames, $p->name);
        }
    }
    print_r($arrayNames);
}
function getAge($inputObject)
{
    $arrayAge = array();
    foreach ($inputObject as $multi) {
        foreach ($multi as $p) {
            array_push($arrayAge, $p->age);
        }
    }
    print_r($arrayAge);
}
function getAddress($inputObject)
{
    $arrayAddress = array();
    foreach ($inputObject as $multi) {
        foreach ($multi as $p) {
            array_push($arrayAddress, $p->address->city);
        }
    }
    print_r($arrayAddress);
}
function getUniqueNames($inputObject)
{
    $arrayUnique = array();
    foreach ($inputObject as $multi) {
        foreach ($multi as $p) {

            $arrayUnique[$p->name]=1;
        }
    }

    print_r(array_keys($arrayUnique));
}
function getMaxAge($inputObject)

{
    $max=0;

    foreach ($inputObject as $players) {
        foreach ($players as $details) {
            if( $details->age>$max){
                $max=$details->age;
            }
        }
    }
    $maxAge = array();
    foreach ($inputObject as $players) {
        foreach ($players as $details) {

          if($details->age==$max){
              array_push($maxAge,$details->name);
          }
        }
    }

    print_r($maxAge);
}



getNames($inputObject);
getAge($inputObject);
getAddress($inputObject);
getUniqueNames($inputObject);
getMaxAge($inputObject);


