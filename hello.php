<?php
abstract class vehicle{

public function welcome(){
echo "welcome \n";
}    

abstract function break();
abstract function light();
abstract function engine();

}
interface road{
    function sunroof();
    function speaker();
}
class car extends vehicle implements road{
    function break(){
   echo"break is working \n";
    }
    function light(){
echo"light is working \n";
    }
    function engine(){
echo"engine is running \n";
    }
    function sunroof(){
echo"sunroof is working \n";
    }
    function speaker(){
echo"speaker is working \n";
    }

function welcome(){
    echo"wel\n";
}
}
$a=new car();
$a->welcome();
$a->speaker();
$a->sunroof();

