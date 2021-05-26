<!DOCTYPE html>
<html>

<head>
</head>
<meta charset="UFT-8">

<body>


    <?php

    function myTest()
    {
    static $x = 0;
    echo $x;
    $x++;

    }

    myTest();
    echo "<br>";
    myTest();
    echo "<br>";
    myTest();
    echo "<br>";
  myTest();


    ?>

</body>

</html>