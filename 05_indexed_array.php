<?php
    // elements all have index number (automatically starting from zero)
   $cars=array("bmw","audi","volkswagen","bentley");
   var_dump($cars);
   
   //to access/display indexed elements
   echo $cars[0];
   echo $cars[1];
   
   //change value of an element
   $cars[1]="toyota";
   echo $cars[1];
   
   //loop through an indexed array
   foreach($cars as $x){
       echo "$x\n";
   }
    
?>
