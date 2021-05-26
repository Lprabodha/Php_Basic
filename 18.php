<!DOCTYPE html>
<html>

<head>
</head>
<meta charset="UFT-8">

<body>


    <?php

    $favcolor = "blue";

    switch ($favcolor) {

        case "red":
            echo "You favorite color is red";
            break;
        case "blue":
            echo "You favorite color is blue";
            break;

        case "green":
            echo "You favorite is green";
            break;

        default:
            echo "You favorite color is neither red, blue, nor green";
    }
    ?>

</body>

</html>