//examples of class and object (OOP concepts using php)

//example 1
<?php
    class math_operations{
        function addition($num1,$num2){
            echo $num1+$num2;
        }
        
        function subtraction($num1,$num2){
            echo $num1-$num2;
        }
        
        function multiplication($num1,$num2){
            echo $num1*$num2;
        }
        function division($num1,$num2){
            echo $num1/$num2;
        }
    }
    $sum_obj= new math_operations();
    $sum_obj->addition(10,20);
    
    $sub_obj= new math_operations();
    $sub_obj->subtraction(50,10);
    
    $mul_obj= new math_operations();
    $mul_obj->multiplication(10,20);
    
?>
