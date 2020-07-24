<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
    <?php

        // for each  - é usado somente em objetos - array ou objetos
        
        $salada = array("Maça", "Abacate", "Laranja", "Banana");
          foreach($salada as $fruta){
            echo $fruta . "<br>";  
          }

          echo "<br>";
          echo "<br>";
          $agenda = array(
            "nome" => "Jose",
            "sobrenome" => "Silva",
            "salario" => 1000,
            "aniversario" => "03/08/1990"
          );

          //                    nome        jose
          foreach($agenda as $atributo => $valor){
            echo $atributo . ":" . $valor . "<br>";
          }

    ?>


    </body>
</html>