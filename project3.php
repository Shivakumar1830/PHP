<?php
for($i=1;$i<=5;$i++){
    for($m=1;$m<=5-$i;$m++){
      echo" ";
    }
    for($j=$i;$j>=1;$j--){
    echo"*";
    }
    for($l=2;$l<=$i;$l++){
    echo"*";
    }
    echo"\n";
}
for($i=5-1;$i>=1;$i--){
        
  for($m=1;$m<=5-$i;$m++){
      echo" ";
  }
  for($j=$i;$j>=1;$j--){
      echo"*";
  }
  for($l=2;$l<=$i;$l++){
      echo"*";
  }
     echo"\n";
}
?>
