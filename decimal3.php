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
            if (isset($_GET["valor"]))
                $valor = $_GET["valor"] ;
            else
                $valor = 1;
        $valor = $valor * 2;
            
        ?>
        <form>
            <input name="valor" value ="<?php echo $valor; ?>" >
            <input type="submit">
        </form>
        <?php
        
        $inteiro = $valor;
        printf("<br>Este é o número %1$2d",$inteiro);
        printf("<br>Este é o número em binário %1$08b",$inteiro);
        printf("<br>Este é o número em hexadecimal %1$08x",$inteiro);
        echo "<br>";
        
        echo var_dump($valor);
        // put your code here
        ?>
    </body>
</html>
