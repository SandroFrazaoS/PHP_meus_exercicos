<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            $data1 = new DateTime('2020-04-10');
            $data2 = new DateTime('2020-05-11');
            $intervalo = $data1->diff($data2);
        ?>
    </body>
    <pre>
        <?php 
            print_r($intervalo);
        ?>
    </pre>
    <pre>
        <?php 
            print_r($intervalo->format('%d')) 
            print_r($intervalo->format('%m'))
            print_r($intervalo->format('%y'))
            print_r($intervalo->format('%a'))  // dia
            print_r($intervalo->format('%r%a')) //dia negativo
        ?>
    </pre>

</html>