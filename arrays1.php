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
        <p>Nosso curso de estrutura de dados</p>
        <?php
         
            $array = array(1, 2, 7, 4, 5);
            
            echo $array[0];
            echo "<br>";
            echo $array[1];
            echo "<br>";
            echo $array[2];
            echo "<br>";
            echo $array[3];
            echo "<br>";
            echo $array[4];
            
            

            
            $array[5] = 9;
            echo "<br>";
            echo $array[5];
            
            
            
            $array[6] = "teste";
            echo "<br>";
            echo $array[6];
  
            
            
        ?>
    </body>
</html>
