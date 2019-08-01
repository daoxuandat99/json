<?php
function readFileJson($filePath)
{
   $json_data = file_get_contents($filePath);
   $arr_data = json_decode($json_data,true);
   return $arr_data;
}
function saveFileJson($user,$filePath){
    $arr_data = readFileJson($filePath);
     array_push($arr_data,$user);
    $json_data = json_encode($arr_data,JSON_PRETTY_PRINT);
    file_put_contents($filePath,$json_data);
}