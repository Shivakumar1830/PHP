<?php
class Calculator{
    function add($num1,$num2){
     echo  "\n". $num1+$num2;
    }
    function sub($num3,$num4){
        echo "\n".$num3-$num4;
    }
    function mul($num5,$num6){
      echo "\n". $num5*$num6;
    }
    function div($num7,$num8){
        echo "\n". $num7/$num8;
    }



}
class Scientific_Calculator extends Calculator{
      function po($num1,$num2){
        echo (pow($num1,$num2));
      }
      function sq($num1){
        echo "\n".(sqrt($num1));
      }
      function ran(){
        echo "\n" .(rand());
      }
      function flo($num1){
        echo "\n". (floor($num1));
      }

}
// $object1=new Calculator();
// $object1->add(5,5);
// $object1->sub(30,20);
// $object1->mul(5,2);
// $object1->div(100,10);
// $object2=new Calculator();
// $object2->add(10,20);
 

$object3=new Scientific_Calculator();
$object3->po(3,2);
$object3->sq(10);
$object3->ran();
$object3->flo(4.3);
$object3->add(20,40);
$object3->sub(30,20);
$object3->mul(5,2);
$object3->div(100,10);

