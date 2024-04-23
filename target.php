<?php
$arr=[10,20,30,40,50];
$res=[];
$tar=50;
for($i=0;$i<count($arr);$i++){
    for($j=$i;$j<count($arr);$j++){
        if($arr[$i]+$arr[$j]==$tar){
            $res[0]=$i;
            $res[1]=$j;
        }
    }
}
echo $res[0];
echo $res[1];
?>