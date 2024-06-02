//associative arrays are arrays that use named keys that you assign to them
<?php
    $car=array("brand"=>"Hyundai", "model"=>"Verna", "year"=>2009);
    var_dump($car);
    
    //accessing elements using key name
    echo $car["model"];
    
    //change value
    $car["year"]=2023;
    
    //looping through array
    foreach($car as $x=>$y){
        echo "$x: $y\n";
    }

    //to add single item in array, use [] with = operator
    $car["detailing_wrap_color"]="black";

    //to add multiple items in array, we can use += operator
    $car+=["color"=>"white", "showroom"=>"Ahmedabad"];

    //for deleting array item, use unset() function
    unset($car["model"]);
?>
