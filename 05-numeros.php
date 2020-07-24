<?php
    $salario  = 800;
    $gasolina = 2.79;
    $gasolina2 = 2.39587;
    $gasolina3 = 2.79587;
    $nome     = "Sandro"
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        
        <?php
            // testar se é numérica
            echo "O $salario é um numero? " . is_numeric($salario) . "</br>";
            echo "A $gasolina é um numero? " . is_numeric($gasolina) . "</br>";
            echo "A $nome é um numero? " . is_numeric($nome) . "</br>";

            // testar se é inteiro
            echo "O $salario é um numero? " . is_int($salario) . "</br>";
            echo "A $gasolina é um numero? " . is_int($gasolina) . "</br>";

            // testar se é float
            echo "O $salario é um numero? " . is_float($salario) . "</br>";
            echo "A $gasolina é um numero? " . is_float($gasolina) . "</br>";

            echo round($gasolina2) . "</br>";
            echo round($gasolina2,1) . "</br>";
            echo round($gasolina3) . "</br>";
            echo floor($gasolina2) . "</br>"; // para baixo é chao
            echo ceil($gasolina2) . "</br>";  // para cima

        ?>
        
        
    </body>
</html>