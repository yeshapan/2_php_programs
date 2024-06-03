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

//A destructor is called when the object is destructed or the script is stopped or exited
//If you create a __destruct() function, PHP will automatically call this function at the end of the script
//Notice that the destruct function starts with two underscores (__)

