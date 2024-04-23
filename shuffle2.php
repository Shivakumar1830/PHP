<?php
$arr=[1,2,3,4,5,6,7,8,9,10,11,12];
function shf($arr){
    for($i=0;$i<=count($arr)/2;$i++){

    
        echo $arr[$i]."\n";
        echo $arr[$i+count($arr)/2-1]."\n";
  }
}
shf($arr);
?>