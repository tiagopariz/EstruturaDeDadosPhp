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
                    array("João",7),
                    array("Pedro",5),        
                    array("Marcelo",13)
                );
                
            echo "Aluno " . $notas[0][0] . " teve nota " . $notas[0][1] . "<br>";
            echo "Aluno " . $notas[1][0] . " teve nota " . $notas[1][1] . "<br>";
            echo "Aluno " . $notas[2][0] . " teve nota " . $notas[2][1] . "<br>";
        
            echo "<br><br>Também temos o mesmo resultado com uma estrutura chamada for:<BR><BR>";
            for ($i = 0; $i < 3; $i++)
            {
                echo "Aluno " . $notas[$i][0] . " teve nota " . $notas[$i][1] . "<br>";
            }
            
            
        ?>
    </body>
</html>
