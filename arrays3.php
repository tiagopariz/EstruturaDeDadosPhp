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
    
            /*Notas de aula
             * João 7
             * Pedro 5
             * Marcelo 13
             */  
        
        $notas = array("João"=>7, "Pedro"=>5, "Marcelo"=>13);
      
        echo "Aluno João teve nota ". $notas["João"] . "<br>";
        echo "Aluno Pedro teve nota ". $notas["Pedro"] . "<br>";
        echo "Aluno Marcelo teve nota ". $notas["Marcelo"] . "<br>";


            
            
        ?>
    </body>
</html>
