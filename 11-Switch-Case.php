<?php
    $dia = "Segunda";
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            if ( $dia == "Segunda" ) {
                echo "Hoje é " . $dia . "<br>";
            } else if ( $dia == "Terça" ) {
                echo "Hoje é " . $dia . "<br>";
            } else if ( $dia == "Quarta" ) {
                echo "Hoje é " . $dia . "<br>";
            } else if ( $dia == "Quinta" ) {
                echo "Hoje é " . $dia . "<br>";
            } else if ( $dia == "Sexta" ) {
                echo "Hoje é " . $dia . "<br>";
            } 

            // swirch
            switch ( $dia) {
                case "Segunda":
                    echo "Hoje é " . $dia . "<br>";
                    break;
                case "Terça":
                    echo "Hoje é " . $dia . "<br>";
                    break;
                case "Quarta":
                    echo "Hoje é " . $dia . "<br>";
                    break;
                case "Quinta":
                    echo "Hoje é " . $dia . "<br>";
                    break;
                case "Sexta":
                    echo "Hoje é " . $dia . "<br>";
                    break;
                default:
                    echo "dia nao informado ";
                        
            }
        ?>
    </body>
</html>