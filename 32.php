<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       $age = array("Peter"=>"35","lahiru"=>"10","prabodha"=>"21","Dilan"=>"30");
       
       foreach ($age as $x => $x_value){
           echo $x."  ".$x_value;
           echo "<br>";
       }
        
        ?>
    </body>
</html>
