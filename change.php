<?php
$arr=[1,2,3,4,5,6,7,8,9,10];
$temp=0;
$d = count($arr)/2-1;
for($i=0;$i<count($arr)/5;$i++){

$temp=$arr[$i];
$arr[$i]=$arr[$d];
$arr[$d]=$temp;
$d--;

}

$d1 = count($arr)-1;
for($i=count($arr)/2;$i<count($arr)-3;$i++){

    $temp=$arr[$i];
    $arr[$i]=$arr[$d1];
    $arr[$d1]=$temp;
    $d1--;
}

for($i=0;$i<count($arr);$i++){
    echo $arr[$i]."\n";
}




?>