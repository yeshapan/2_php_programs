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
   
   //add array items
   //To add items to an existing array, you can use the bracket [] syntax
   $cars[]="honda";
   
   //to add multiple items to an existing array, use the array_push() function
   array_push($cars, "bugatti", "tata", "tesla");
   
   //deleting array item
   //To remove an existing item from an array, you can use the array_splice() function.
   //With the array_splice() function you specify the index (where to start) and how many items you want to delete.
   array_splice($cars,1,1);
   
   //you can also use the unset() function
   //NOTE: The unset() function does not re-arrange the indexes, meaning that after deletion the array will no longer contain the missing indexes.
    unset($cars[1]);
    
    //array_pop() removes last item
    //array_shift() removes first item
?>
