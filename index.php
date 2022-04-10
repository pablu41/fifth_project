<?php


// first assignment start

    $num = 12;
    $count = 0;

    for($i=1; $i<=$num; $i++)
    {
    if($num % $i == 0)
    $count++;
    }

    if($count == 2)
    print_r("$num  is a prime number");
    else
    print_r("$num is a composite number");
    echo "<br>";

    // first assignment ends

    // second assignment start

    // Indexed array

    $product_info = ['Mens T-Shirts', 'Kurtas', 'Polo T-Shirts','Mens Jeans', 'Formal Shirts for Men' ];
    foreach($product_info as  $index=> $value){
       echo $value;
       echo "<br>";
    };
    // second assingment ends


    // third assignment start
    
    $array = array(0,10,80,67,60,89,91,56,45,30,95,83,99);
 
    $max = $array[0];
    
    foreach($array as $key => $val){
    
        if($max < $val){
    
            $max = $val;
         
    }
}   
echo "maximum value". ':' .$max;


  





?>