<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings in php</title>
</head>

<body>

    <?php
    
    echo "<br>";
    $str_1 = 'This is a string made using \'single quotes\'';
    echo $str_1;

    echo "<br>";
    echo "<br>";
    echo "<br>";

    $str_2 = "This is a string made using \"double quotes\"";
    echo $str_2;
    
    echo "<br>";
    echo "<br>";
    echo "<br>";

    $str_3 = <<< SYMBOL
    This is a string made using heredoc <br>
    to make multiline string <br>
    <<< ABC your string ... ABC;
    SYMBOL;
    echo $str_3;

    echo "<br>";
    echo "<br>";
    echo "<br>";

    $str_4 = <<< 'NVP'
    The nowdoc is similar to heredoc <br>
    but the difference is that it does not allows <br>
    variable parsing
    NVP;
    echo $str_4;

    ?>

    <br>
    <br>
    <br>

    <h4>String functions</h4>

    <?php 
        
        echo "Length of \"Parth Panchal \" is : ", strlen("Parth Panchal");
        echo "<br>";
        echo "First occurrence of \"Panchal\" at : ", strpos("Parth Panchal, Panchal Parth", "Panchal");
        echo "<br>";
        echo "str_replace 'world' : ", str_replace("world", "Parth", "Hello, world!");
        echo "<br>";
        echo "Extracted from above string : ", substr("Hello, Parth!", 7, 5); // string, starting index, quantity
        echo "<br>";
        echo "in lowercase : ", strtolower("PARTH PANCHAL");
        echo "<br>";
        echo "in uppercase : ", strtoupper("parth panchal");
        echo "<br>";
        echo "<pre>           so many       white spaces</pre> : ", trim("           so many       white spaces removed!");
        echo "<br>";
        $name = "Parth";
        echo "Hi, " . $name . " : used '.' to concat";
        

        



    ?>


</body>

</html>