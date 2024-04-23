<?php
$table=['_','_','_','_','_','_','_','_','_'];
          $val='X';
        for($i=0;$i<count($table);$i++){
            $a=readline("enter the number  ");
            if(!change($a,$val)){
                $i--;
                continue;
                
            }
            
            board();
           if(game(val)){
            break;
           };
        $val=num($val);
        }
    
    function num($y){
        if($y=='X'){
            $y = 'O';  
        }
        else{
           $y='X';
        }
         return $y;
    }
    function board (){
         $a=0;
        echo("| ");
        for($i=0;$i<count($table);$i++){
            $a++;
            echo($table[i]+" |  ");
            if($a%3==0){
                echo("  ");
                if($a!=9){
                echo("| ");
                }
            }
               
        } 
    }
  function change($a,$player){
        if($table[$a-1]=='_'){
            $table[$a-1]=$player;
            

            return true;
            
        }
        else{
            echo("invalid");
            return false;
        }
        
    }
    function game($n){
        if($table[0]==$n&& $table[1]==$n && $table[2]==$n){
             echo("winner");
             return true;
        }
        if($table[3]==$n&& $table[4]==$n && $table[5]==$n){
            echo("winner");
            return true;
        }
        if($table[6]==$n&& $table[7]==$n && $table[8]==$n){
            echo("winner");
            return true;
        }
        if($table[0]==$n&& $table[3]==$n && $table[6]==$n){
            echo("winner");
            return true;
        }
        if($table[1]==$n&& $table[4]==$n && $table[7]==$n){
            echo("winner");
            return true;
        }
        if($table[2]==$n&& $table[5]==$n && $table[8]==$n){
            echo("winner");
            return true;
        }
        if($table[0]==$n&& $table[4]==$n && $table[8]==$n){
            echo("winner");
            return true;
        }
        if($table[2]==$n&& $table[4]==$n && $table[6]==$n){
            echo("winner");
            return true;
        }
        else{
           
            return false;
        }

    } 
       
       
           