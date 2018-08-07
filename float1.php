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
        <hr>
        <?php
        
        $float2 = 0.000000000000001;
        echo "O resultado deveria ser um número com 15 casas decimais: $float2";
        echo "<hr>";
        
        
        $float2 = 8.000000000000001;
        echo "O resultado deveria ser igual o anterior mais 8: $float2";
        echo "<hr>";
        
        

        
        $float2 = floor(8);
        echo "O resultado deveria ser 8: $float2";
        echo "<hr>";

        
        $float2 = ((0.1 + 0.7) * 10);   
        echo "O resultado deveria ser 8: $float2";
        echo "<hr>";
        
        $float2 = floor((0.1 + 0.7) * 10); 
        echo "O resultado deveria ser 8: $float2";
        echo "<hr>";

        
        
        
        // put your code here
        ?>
    </body>
</html>
