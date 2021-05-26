<!DOCTYPE html>
<html>

<head>
</head>
<meta charset="UFT-8">

<body>


    <?php

   $t = date("H");

   if($t < "10"){
       echo "Have a good morning! ";
   }
   else if($t < "20"){
       echo "Have a good day!";
   }
   else{
       echo "Have a good night!";
   }
    ?>

</body>

</html>