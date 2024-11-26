<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators in php</title>
</head>

<body>

    <?php
    
    // Arithmetic Operators

    $numOne = 50;
    $numTwo = 30;

    $addition = $numOne + $numTwo;
    $subtraction = $numOne - $numTwo;
    $multiplication = $numOne * $numTwo;
    $division = $numOne / $numTwo;

    echo "<h4>Arithmetic Operations : </h4>";
    
    echo "Addition: $addition";
    echo "<br>";
    
    echo "Subtraction : $subtraction";
    echo "<br>";
    
    echo "Multiplication: $multiplication";
    echo "<br>";
    
    echo "Division: $division";
    echo "<br>";


    // Assignment Operators
    echo "<h4>Assignment Operators : </h4>";
    
    $var = 20; 
    echo "var = $var";
    echo "<br>";
    
    $var += 20; 
    echo "var += 20 : $var";
    echo "<br>";
    
    $var -= 20; 
    echo "var -= 20 : $var";
    echo "<br>";
    
    $var *= 20; 
    echo "var *= 20 : $var";
    echo "<br>";
    
    $var /= 20; 
    echo "var /= 20 : $var";
    echo "<br>";
    
    
    // Comparison Operators
    echo "<h4>Comparison Operators : </h4>";
    
    $num_1 = 10;
    $num_2 = 20;
    
    echo "num_1 = $num_1 and num_2 = $num_2";
    echo "<br>";
    
    echo "num_1 == num_2 :";
    echo var_dump($num_1 == $num_2);
    echo "<br>";

    echo "num_1 != num_2 :";
    echo var_dump($num_1 != $num_2);
    echo "<br>";

    echo "num_1 => num_2 :";
    echo var_dump($num_1 >= $num_2);
    echo "<br>";
    
    echo "num_1 <= num_2 :";
    echo var_dump($num_1 <= $num_2);
    echo "<br>";


    // Increment/Decrement Operators
    echo "<h4>Increment/Decrement Operators : </h4>";
    
    $val = 500;
    
    echo "val = $val";
    echo "<br>";
    
    echo "val++ : ", $val++, ", ", $val;
    echo "<br>";
    
    echo "val-- : ", $val--, ", ", $val;
    echo "<br>";
    
    echo "++val : ", ++$val;
    echo "<br>";
    
    echo "--val : ", --$val;
    echo "<br>";
    
    
    // Logical Operators
    echo "<h4>Logical Operators : </h4>";
    
    echo "<h4>Logical AND</h4>";
    echo "<br>";
    
    echo "(false) and (false) : ", var_dump((false) and (false));
    echo "<br>";
    
    echo "(false) and (true) : ", var_dump((false) and (true));
    echo "<br>";
    
    echo "(true) and (false) : ", var_dump((true) and (false));
    echo "<br>";
    
    echo "(true) and (true) : ", var_dump((true) and (true));
    echo "<br>";
    
    
    echo "<h4>Logical OR</h4>";
    echo "<br>";
    
    echo "(false) or (false) : ", var_dump((false) or (false));
    echo "<br>";
    
    echo "(false) or (true) : ", var_dump((false) or (true));
    echo "<br>";
    
    echo "(true) or (false) : ", var_dump((true) or (false));
    echo "<br>";
    
    echo "(true) or (true) : ", var_dump((true) or (true));
    echo "<br>";
    
    
    echo "<h4>Logical XOR</h4>";
    echo "<br>";
    
    echo "(false) xor (false) : ", var_dump((false) xor (false));
    echo "<br>";
    
    echo "(false) xor (true) : ", var_dump((false) xor (true));
    echo "<br>";
    
    echo "(true) xor (false) : ", var_dump((true) xor (false));
    echo "<br>";
    
    echo "(true) xor (true) : ", var_dump((true) xor (true));
    echo "<br>";
    
    
    echo "<h4>Logical ! (not)</h4>";
    echo "<br>";
    
    echo "!(false) xor (false) : ", var_dump(!(false) xor (false));
    echo "<br>";
    
    echo "!(false) xor (true) : ", var_dump(!(false) xor (true));
    echo "<br>";
    
    echo "!(true) xor (false) : ", var_dump(!(true) xor (false));
    echo "<br>";
    
    echo "!(true) xor (true) : ", var_dump(!(true) xor (true));
    echo "<br>";

    ?>

</body>

</html>