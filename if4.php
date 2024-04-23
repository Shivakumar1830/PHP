<?php
$month=readline("enter the month");
$year=readline("enter the year");
$hemo=readline("enter the hemoglobin level");
if($month>=1){
    if($hemo>=10 && $hemo<=20){
        echo("hemoglobin level is normal");
    }
    else{
        echo("hemoglobin level is abnormal");
    }
}
else if($month>=1 && $month<=2){
    if($hemo>=10 && $month>=2 && $month<=6){
    if($hemo>=9.5 && $hemo<=14){
        echo("hemoglobin level is normal");
    }
    else{
        echo("hemoglobin level is abnormal");
    }
}
else{
    if($year>=1 && $month<=2){
        if($hemo>=10.5 && $hemo<=13.5){
            echo("hemoglobin level is normal");
        }
        else{
            echo("hemoglobin level is abnormal");
        }
        if($year>=2 && $year<=6){
           if($hemo>=11.5 && $hemo<=13.5){
            echo("hemoglobin level is normal");
           } 
           else{
            echo("hemoglobin level is abnormal");
           }
        }
        else if($year>=6 && $year<=12){
            if($hemo>=11.5 && $hemo<=15.5){
            echo("hemoglobin level is normal");
            }
            else{
                 echo("hemoglobin level is abnormal");
            }
        } 
    }
}
}

?>