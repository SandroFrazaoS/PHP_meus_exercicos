<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
    <?php
        // condiçao usando while
          $contador = 1;
          while ( $contador <=6 ){
            $sorteio = rand(1,60);
            echo $sorteio . "  ";
            //$contador = $contador + 1;
            $contador ++;
          }

        // condiçao usando do while
          $contador = 1;
          echo "<br>";
          do {
            $sorteio = rand(1,60);
            echo $sorteio . "  ";
            $contador ++;
          } while ( $contador <=4 );

        // condiçao usando for
          echo "<br>";
          for ($contador = 1; $contador < 7; $contador ++ ){
            echo rand(1,60) . " - ";
          }

        // condiçao usando for com break
          echo "<br>";
          for ($contador = 1; ; $contador ++ ){
              if ($contador == 7){
                break;
              }
            echo rand(1,60) . " ";
          }

        // for each  - é usado somente em objetos - array ou objet
        echo "<br>";
        $salada = array("Maça", "Abacate", "Laranja", "Banana");
          foreach($salada as $fruta){
            echo $fruta . "<br>";  
          }

    ?>


    </body>
</html>