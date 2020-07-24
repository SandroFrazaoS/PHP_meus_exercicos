<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
        /*
            // determinar timezone
            date_default_timezone_set('Etc/GMT+3');
            $agora = getdate();
     

            print_r($agora);
            echo "<br>";

            // criar elementos
            $ano = $agora["year"];
            $mes = $agora["mon"];
            $dia = $agora["mday"];

            $hora    = $agora["hours"];
            $minuto  = $agora["minutes"];
            $segundo = $agora["seconds"];

            echo $dia . "/" . $mes . "/" . $ano . " - " . $hora . ":" . $minuto .":". $segundo;

            // 
            echo "<br>";  */

            date_default_timezone_set('America/Sao_Paulo');
            setlocale(LC_TIME, "pt_BR"); // mostra a informaçao em portugues
            $ano = strftime('%Y');
            $mes = strftime('%B');
            $dia = strftime('%d');
            $dia_da_semana = strftime('%A');
            $hora    = strftime('%H');
            $minuto  = strftime('%M');
            $segundo = strftime('%S');
            
            echo $dia_da_semana . "  - " . $dia. "/" . $mes . "/" . $ano . " - " . $hora . ":" . $minuto .":". $segundo;
            
        ?>
    </body>
</html>