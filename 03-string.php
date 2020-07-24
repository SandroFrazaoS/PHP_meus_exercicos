<?php 
    $_nome = "Curso PHP Fundamental Curso";
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        <?php 
            // strlen - Retorna primeira ocorrencia
            echo strlen($_nome) . "</br>"; 
            echo strlen("Brasil") . "</br>"; 
            
            // stripos  - Retorna primeira ocorrência 
            echo stripos($_nome, "u") . "</br>"; 

            // strripos - Retorna última ocorrência
            echo strripos($_nome, "u") . "</br>"; 
            
            // strtolower - converte para letras min.
            echo strtolower($_nome) . "</br>"; 

            // strtoupper - converte para letras min.
            echo strtoupper($_nome) . "</br>"; 

            // SUBSTR_COUNT - Conta quantas ocorreram
            // de um texto ou string
            // Faz diferença Maiusculas e minusculas
            echo SUBSTR_COUNT($_nome, "u") . "</br>"; 
            echo SUBSTR_COUNT($_nome, "C") . "</br>"; 

            echo SUBSTR_COUNT($_nome, "Curso") . "</br>"; 
            
        ?>
        
        
    </body>
</html>