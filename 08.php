<!DOCTYPE html>
<html>

<head>
</head>
<meta charset="UFT-8">
<body>


<?php

$x = 5; //Global scop
function myTest(){
    // using x inside this function will generate an error
    echo "<p>Variable x inside function is: $x</p>";
}

myTest();
     echo "<p>Variable x inside function is: $x</p>";


?>

</body>

</html>