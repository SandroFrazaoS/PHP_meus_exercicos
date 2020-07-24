<?php
    $salada = array("Maça", "Abacate", "Laranja");
    $salada2 = array("Maça", "Abacate", "Laranja", array(1, "Bolsa", 79.90));
    
    //array associative
    $agenda = array("nome" => "Jose",
                    "sobrenome" => "Silva",
                    "salario" => 800.99
    );

    $lost = array(23,15,16,8,42,4);

    
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            echo $salada[0] . "</br>";
            echo $salada[1] . "</br>";
            echo $salada2[2][1] . "</br>";
            echo count($salada) . "</br>";
            $salada[] = "Kiwi";
            echo count($salada) . "</br>";

            //array funçoes
            echo max($lost) . "</br>";
            echo min($lost) . "</br>";
            echo array_sum($lost) . "</br>";

            sort($lost);
            rsort($lost); // decresente
            shuffle($lost); // ordem embaralhada

            
            //pesquisar um elemento no array
            echo "existe elemento " . in_array("Pera", $salada). "</br>";
            echo "existe elemento " . in_array("Maça", $salada). "</br>";
            echo "existe elemento " . array_search("Laranja", $salada). "</br>";

        ?>
        <pre>
            <?php
                //visuaçizador somente programador - teste interno
                print_r($salada);
                print_r($agenda["nome"] . "</br>");
                print_r($lost);
            ?>
        </pre>
        
        <p>
            <?php //echo $agenda[0]; ?> 
            <?php //echo $agenda[nome]; ?>
        </p>
    </body>
</html>