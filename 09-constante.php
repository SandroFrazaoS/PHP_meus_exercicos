<?php
     $nome = "Sandro";    
     $nome = "Maria";
 
     // UMA CONTANTE SEMPRE EM MAIUSCULO
     define("MESES", 12);
 ?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>
        
    <body>
        <?php
            echo "Meu nome é: " . $nome . "<br>";
            echo "Quantidade de meses do ano: " . MESES . "<br>";
         ?>
    </body>
</html>