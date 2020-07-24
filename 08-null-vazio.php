<?php
    $nome = null;    
    $nome2 = "Sandro";    
    $endereco = ""
    
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>
        
    <body>
        <?php
            echo "é null a variavel: " . is_null($nome) . "<br>";
            echo "é null a variavel: " . is_null($nome2) . "<br>";
            echo "é null a variavel: " . is_null($endereco) . "<br>";

            //vazio
            echo "a variavel esta vazia: " . empty($nome) . "<br>";
            echo "a variavel esta vazia: " . empty($endereco) . "<br>";
            echo "a variavel esta vazia: " . empty($nome2) . "<br>";

            // testar se variavel esta configurada - se foi iniciada
            echo "Se variavel esta iniciado: " . isset($nome) . "<br>";
            echo "Se variavel esta iniciado: " . isset($nome2) . "<br>";
            echo "Se variavel esta iniciado: " . isset($endereco) . "<br>";
            echo "Se variavel esta iniciado: " . isset($cep) . "<br>"; // nao existe a variavel

        ?>
    </body>
</html>