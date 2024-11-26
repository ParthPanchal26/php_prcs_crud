<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional Statements</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            background-color: rgb(255, 134, 134);
            padding: 3rem;
            margin: 0.1rem;
            border-radius: 0.3rem;
            box-shadow: 0 0 3px gray;
        }
    </style>

</head>

<body>

    <div class="container">

        age = 18
        <br>

        <?php


        $age = 18;

        if ($age > 18) {
            echo "You can drive";
        } else if ($age == 18) {
            echo "You can start learn driving";
        } else {
            echo "You can not drive";
        }

        ?>

        <br>
        <br>
        age = 19
        <br>

        <?php


        $age = 19;

        if ($age > 18) {
            echo "You can drive";
        } else if ($age == 18) {
            echo "You can start learn driving";
        } else {
            echo "You can not drive";
        }

        ?>

        <br>
        <br>
        age = 10
        <br>

        <?php


        $age = 10;

        if ($age > 18) {
            echo "You can drive";
        } else if ($age == 18) {
            echo "You can start learn driving";
        } else {
            echo "You can not drive";
        }

        ?>

        <br>
        <br>
        <br>

        <?php

        $languages = array("JavaScript", "html", "css", "python", "ruby");

        echo "Total elements in array : ", count($languages);
        
        echo "<br>";
        echo "<br>";

// while loop
        $i = 0;
        echo "Using while loop";
        echo "<br>";
        while ($i < count($languages)) {
            echo "Language $i : ", $languages[$i++];
            echo "<br>";
        }

        
        echo "<br>";
        echo "<br>";
        
// do_While loop
        echo "Using do_while loop";
        echo "<br>";
        $i = 0;
        do {
            echo "Language $i : ", $languages[$i++];
            echo "<br>";
        } while ($i < count($languages));

        
        echo "<br>";
        echo "<br>";
        
// For loop
        echo "Using for loop";
        echo "<br>";
        $i = 0;
        for ($i=0; $i < count($languages); $i++) { 
            echo "Language $i : ", $languages[$i];
            echo "<br>";
        }

        
        echo "<br>";
        echo "<br>";
        
// Foreach loop
        echo "Using foreach loop";
        echo "<br>";
        $i = 0;
        foreach ($languages as $val) { 
            echo "Language is : $val";
            echo "<br>";
        }

        ?>

        <br>
        <br>
        <br>

        <?php

            function display($num) {
                echo "Function got value : ";
                echo $num;
            }

            display(234);

        ?>

    </div>

</body>

</html>