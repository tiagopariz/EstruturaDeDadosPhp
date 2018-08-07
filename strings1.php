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
                $valor = "0";
            
        ?>
        <form>
            <input name="valor" value ="<?php echo $valor; ?>" >
            <input type="submit">
        </form>
        <hr>
        <?php
        
        $texto = $valor;
        echo "texto = $texto <br>";
        echo "primeiro byte de texto = " . ord($texto[0]) . "<br>";
        echo "primeiro byte de texto = " . ord($texto[1]) . "<br>";
        
        echo var_dump($texto);
        // put your code here
        ?>
    </body>
</html>
