<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            function retornaDiaria(){
                $salario = 910;
                return number_format( $salario/30,2);
            }
            echo retornaDiaria() . "<br>";


            // funcao com parametro
            function retornaDiaria2( $salario2){
                return number_format( $salario2/30,2);
            }
                $diaria =  retornaDiaria2(8000);
                echo $diaria . "<br>";


            // funcao com mais de um parametro
            function retornaDiaria3( $salario3, $dias){
                return number_format( $salario3/$dias,2);
            }
                $diaria3 =  retornaDiaria3(2000,15);
                echo $diaria3 . "<br>";


           // funcao multiplos valores
           function retornaDiaria4( $salario4,$dias4,$cotação){
                $real  = number_format($salario4/$dias4, 2);
                $dolar = number_format(($salario4/$dias4)/$cotação, 2);
                return array($real,$dolar);
            }
              $diaria_arrya =  retornaDiaria4(3000,10,2.5);
              echo "Diaria em R$ " . $diaria_arrya[0] . "<br>";
              echo "Diaria em US$ " . $diaria_arrya[1] . "<br>";

              list($resultado_real,$resultado_dolar) = retornaDiaria4(3000,10,2.5);
              echo "Diaria em R$ " . $resultado_real . "<br>";
              echo "Diaria em US$ " . $resultado_dolar . "<br>";


        ?>
    </body>
</html>