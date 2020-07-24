<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php   
            // a diferenca do include e require, o require para com o erro o include no
            include("28-pagina1.php");
            echo "<br>";
            include_once("29-pagina2.php");
            echo "<br>";
            include_once("29-pagina2.php");
            echo "<br>";
            require_once("29-pagina2.php");
            echo "<br>";
            require("29-pagina2.php");

        ?>
    </body>
</html>
    
