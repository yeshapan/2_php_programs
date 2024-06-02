//A multidimensional array is an array containing one or more arrays

<?php
    $depts=array(
        array(1, "CSE", 500000),
        array(2, "AIML", 600000),
        array(3, "Civil", 200000),
        array(4, "Mechanical", 300000)
        );
        
    for($row=0; $row<4; $row++){
        for($col=0; $col<3; $col++){
            echo $depts[$row][$col];
            echo"\n";
        }
    }
    
?>
