<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basics - PhP web page</title>
</head>
<body>

    <div class="container">
        Yo..! This is a php page!
    </div>

    <?php 
        echo "A secret algorithm is running..."
    ?>

    <?php
        
        // Secret algorithm to calculate sum
        $num_1 = 50;
        $num_2 = 50;

        /*  The Secret algorithm will calculate sum of two numbers
            and will print it. 
        */
        
        echo $num_1 + $num_2;

    ?>

</body>
</html>