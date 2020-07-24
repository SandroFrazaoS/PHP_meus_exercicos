<?php
    $_nome = "Sandro Frazao";
    $_sobrenome = "Specht";
    $_salario = 780;
    $_nomecompleto = $_nome . " " . $_sobrenome;
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>
        
    <body>
        <p><?php echo $_nome ?></p>
        <p><?php echo $_salario ?></p>
        <p><?php echo $_nome . " " . $_sobrenome ?></p>
        <p><?php echo $_nomecompleto ?></p>
    </body>
</html>