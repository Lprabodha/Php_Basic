 <!DOCTYPE html>
<html>

<head>
</head>
<meta charset="UFT-8">

<body>


    <?php
 
   $cars = array("Volvo","BMW","Toyota");
   $arrlength = count($cars);

   for($x = 0; $x < $arrlength; $x++){
       echo $cars[$x];
       echo "<br>";
   }
   
  
    ?>

</body>

</html>