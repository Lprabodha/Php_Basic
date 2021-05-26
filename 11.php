<!DOCTYPE html>
<html>

<head>
</head>
<meta charset="UFT-8">

<body>


    <?php

    $x = 5;
    $y = 10;
    function myTest()
    {
        $GLOBALS['y'] = $GLOBALS['x']+$GLOBALS['y'];

    }

    myTest();// run function
    
    echo $y;// output the new value for variable


    ?>

</body>

</html>