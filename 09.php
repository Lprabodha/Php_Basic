<!DOCTYPE html>
<html>

<head>
</head>
<meta charset="UFT-8">

<body>


    <?php

    
    function myTest()
    {
        $x = 5; //Global scop
      
        echo "<p>Variable x inside function is: $x</p>";
    }

    myTest();
      // using x inside this function will generate an error
    echo "<p>Variable x inside function is: $x</p>";


    ?>

</body>

</html>