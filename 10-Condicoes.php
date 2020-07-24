<?php
    $a = 8;
    $b = 6;

    $x = 3;
    $y = 3;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 

            if($a > $b) {
                echo "A é maior do que B" . "<br>";
            }

            $fumante = false;
            if ( $fumante == false ){
                echo "Não podera entrar"  . "<br>";
            }

            if ( $fumante ){
                echo "igual a true"  . "<br>";
            }

            if ( !$fumante ){
                echo "igual a true entra "  . "<br>";
            }

            // else
            

            if($x > $y) {
                echo "A é maior do que B" . "<br>";
            } else  if ($x < $y){
                echo "B é maior do que A" . "<br>";
            } else {
                echo "A é igual a B" . "<br>";
            }


        ?>
    </body>
</html>