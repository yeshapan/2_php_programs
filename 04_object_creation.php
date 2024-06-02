<?php
    class greeting{
        public
            function display_greeting(){
                echo "hello! welcome to display function\n";
            }
    }
    
    $object = new greeting;
    $object -> display_greeting();
    var_dump($object);
    
?>
