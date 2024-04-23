<?php
$m=readline("enter the gender");
$age=readline("enter the age");
$hemo=readline("enter the hemoglobin level");
if($m=='m'){
    echo("male");
    if($age>=12 && $age<=18){
        if($hemo>=13.0&&$hemo<=16.0){
        echo("hemoglobin level is normal");
        }
        else{
        echo("hemoglobin level is abnormal");
        }
    }
    else if($age>=18){
        if($hemo>=13.6&&$hemo<=17.7){
        echo("hemoglobin level is normal");
        }
        else{
        echo("hemoglobin level is abnormal");
        }
    }
}
else{
    echo("female");
    if($age>=12&&$age<=18){
        if($hemo>=12.0&& $hemo<=16.0){
            echo("hemoglobin level is normal");
        }
        else{
            echo("hemoglobin level is abnormal");
        }

    }
    else if($age>=18){
        if($hemo>=12.1&&$hemo<=15.1){
            echo("hemoglobin level is normal");
        }
        else{
            echo("hemoglobin level is abnormal");
        }
    }
    else{
        echo("age is not valid");
    }
}
?>