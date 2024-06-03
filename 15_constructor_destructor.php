//constructor is a special function that is automatically called at time of object creation
//_construct() is fixed name for constructor
<?php
    //program to demostrate constructor
    class cons{
        function _construct(){
            echo "constructor function called\n";
        }
    }
    
    $object = new cons;
    
?>
