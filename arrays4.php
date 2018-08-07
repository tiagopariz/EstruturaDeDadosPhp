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
        
        $notas = array
                (
                    array("Nome" => "João" , "Nota" =>7),
                    array("Nome" => "Pedro" , "Nota" =>5),
                    array("Nome" => "Marcelo" , "Nota" =>13)
                );        
        
        
            for ($i = 0; $i < 3; $i++)
            {
//                echo "Aluno " . $notas[$i][0] . " teve nota " . $notas[$i][1] . "<br>";
                echo "Aluno " . $notas[$i]["Nome"] . " teve nota " . $notas[$i]["Nota"] . "<br>";
            }
        
      


            
            
        ?>
    </body>
</html>
