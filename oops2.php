<?php
class Vehicle{
    public $gear;
    public $color;
    public $engine;
    public $stearing;

    public function setColor($col){
        $this->color=$col;
    }
    function color($color1,$color2,$color3){
        echo "color 1 ".$color1,"\n"."color 2 ".$color2,"\n"."color 3 ".$color3.$this->color;
    }
    public function setEngine($eng){
        $this->engine=$eng;
    }
    function engine($engine1,$engine2,$engine3){
        echo"\n". "engine type ".$engine1,"\n"."engine type ".$engine2,"\n"."engine type ".$engine3.$this->engine;
    }    
    public function setStearing($str){
        $this->stearing=$str;
    }    
    function stearing($str1,$str2,$str3){
        echo "\n". "stearing type ".$str1,"\n"."stearing type ".$str2,"\n"."stearing type ".$str3.$this->stearing;
    }
}
$object1=new Vehicle();
$object1->color("green","yellow","red");
$object1->engine("diesel engine","petrol engine","jet engine");
$object1->stearing("power","normal","flex");
