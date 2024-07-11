<?php

    ob_start();
    
    echo "<h1>Hello, World</h1>";

### Data Types: 

    $name = "Moussa";
    
    $age = 27;

    $price = 12.02;

    $is_true = true;  # i.e. false 

    $brands = array("Google", "Microsoft", "Huawei", 10); // Array

    var_dump($brands);

    # -> array(4) { [0]=> string(6) "Google" [1]=> string(9) "Microsoft" [2]=> string(6) "Huawei" [3]=> int(10) } 

    $clubs = [
        'BAR' => "Barcelona",
        'RM' => "Real Madrid"
    ];

    var_dump($clubs);

    # -> array(2) { ["BAR"]=> string(9) "Barcelona" ["RM"]=> string(11) "Real Madrid" } 


    $is_empty = NULL;

### Outputting to the Browser: 

    var_dump($name); # used for debug and give information about a variable.

    # -> string(6) "Moussa" 

    print_r($clubs);

    # -> Array ( [BAR] => Barcelona [RM] => Real Madrid )

    echo $clubs;

    # -> Array

    print($clubs);

    # -> Array


### Indirect Reference: 

    $user = "First User";

    $$user = "Second User";

    echo $user ;

    # -> First User

    echo $$user;
    
    # -> Second User

### define a constant: 

    define("APP_USER", "Constant Value");

    var_dump(APP_USER);
    
    # -> string(14) "Constant Value"

    ob_clean();


### Arithmetic operators: 

    $num1 = 10;
    $num2 = 5;

    echo $num1 + $num2; // - * / ** %

    ob_clean();

### Asignement Operators:

    $num1 = 10;

    $num2 += $num1; // += -= *= /= %= 

    echo $num2;

### Comparison Operators

    $num1 = 1;
    $num2 = 2;

    var_dump($num1 == $num2); //  return true if they have same values

    var_dump($num1 === $num2); // true if also they have same datatype.

    var_dump($num1 != $name); // or <>, not equal

    var_dump($num1 !== $num2); // data type is matter.

    var_dump($num1 > $num2); # <, >=, <= 

    ob_clean();

### Logical Operators: 

    $username = "Moussa";
    $password = "password";

    var_dump(
        $username == "moussa" && $password == "password"
    ); # use AND
    
    var_dump(
        $username == "moussa" || $password == "password"
    ); # use OR, check XOR.

    $is_true = true;

    echo !$is_true;

    ob_clean();

### Conditional Statement:

    $num = 1;

    if($num == 1) {
        echo "num = 1";
    } elseif($num == 2) {
        echo "num = 2";
    } else {
        echo "else";
    }

    $username = "Moussa";

    switch($username) {
        case strlen($username) < 10: 
            echo "username is less than 10 chars";
            break;

        case strlen($username) < 20: 
            echo "username is less than 10 chars";
            break;

        case strlen($username) >= 30: 
            echo "OK username is accepted";
            break;

        default:
            echo "You're using too many charachters.";
    }

    # Ternary Operator:
     echo $is_true ? "variable is True": "var is not true";

    ob_clean();

### Loops in PHP:


    $brands = ["Apple", "Mircrosoft", "Google"];

    foreach($brands as $brand){
        echo $brand;
    }

    ob_clean();

    $i = 0;

    while( $i < 10){
        echo $i++;
    }

    ob_clean();

    for($i = 1; $i <= 10; $i++){
        echo $i;
    }

    ob_clean();

### Functions: 

    function add($a, $b) {
        return $a + $b;
    }


    $sum = add(1, 2);

    echo $sum;

    function display_name_and_age($name, $age) {
        echo "{$name} is {$age} years ago";
    }

    display_name_and_age("Moussa", 22);


    # function with types: 

    function add_with_types(int | float $a, int | float $b) { 
        return $a + $b;
    }

    # force cheking types: 

    declare(strict_types = 1);

    ob_clean();


?>