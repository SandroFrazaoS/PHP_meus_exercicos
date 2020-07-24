<?php
    $idade = 18;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            $maioridade = ($idade > 17)? "de maior" : "de menor";
            
            echo $maioridade;
        ?>
    </body>
</html>