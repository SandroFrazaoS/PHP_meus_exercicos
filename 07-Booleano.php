<?php
    $fumante = true;    
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>
        
    <body>
        <?php
            echo "é fumante: " . $fumante . "<br>";
            echo "é boleana: " . is_bool($fumante) . "<br>";
        ?>
    </body>
</html>