<?php
$file=fopen("hello.json","r");
$data=fread($file,filesize("hello.json"));
echo $data;

$new=file_get_contents("hello.json");
$new1=json_decode($new);
foreach($new1 as $y){
    foreach($y as $s=>$val){

    echo $s.":".$val."\n";
   }
}   