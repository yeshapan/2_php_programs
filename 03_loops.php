// for loop
<?php
    for($x=1; $x<10; $x++){
        echo $x;
    }
?>

//-------------------------------------------------------------------------
// while loop
<?php
    $x=1;
    while($x<10){
        echo "hello world!\n";
        $x++;
    }
?>

//-------------------------------------------------------------------------
//do...while loop
<?php
    $x=1;
    do{
        echo "hello world!\n";
        $x++;
    }
    while($x<10);
?>

//-------------------------------------------------------------------------
// for each loop
//repeats a block of code for each element in array or each property in object
<?php
    $fruits=array("apple","banana","grapes","litchi");
    foreach($fruits as $x){
        echo "$x\n";
    }
?>
