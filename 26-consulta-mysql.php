<?php 
// por segurança criar uma pasta DB e levar a conexao para um conexao.php
//assim o usuario nao em acesso ao dados
//    require_once("../../conexao/conexao.php");
//pega a parte de baixo e coloca no  arquivo
?>

<?php 
    //passo 1 abrir a conexao - localhost por causa do xamp quando for para servidor trocar
    $servidor = "localhost";
    $usuario  =  "root";
    $senha    =  "";
    $banco    = "andes";
    $conecta = mysqli_connect($servidor,$usuario,$senha,$banco);

    // passo 2 testar conexao
    if(mysqli_connect_errno()) {
        die("Conexao fahlou: " . mysqli_connect_errno());
    }
?>
<?php 
    // passo 3 abrir consulta ao banco de dados
    //$consulta_categorias .= "SELECT * FROM categorias"; 
    $consulta_categorias = "SELECT *"; 
    $consulta_categorias .= " FROM categorias";
    $consulta_categorias .= " WHERE categoriaID > 0";

    $categorias = mysqli_query($conecta, $consulta_categorias);  
    if (!$categorias){
        die("falha na consulta");
    }
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <ul>
            <?php 
                //while ( $registro = mysqli_fetch_row($categorias)) {
                while ( $registro = mysqli_fetch_assoc($categorias)) {    
                    print_r($registro);
                    echo "<br>";
                }
            ?>
        </ul>
    </body>
</html>
    
<?php
    // fecha conexão
    mysqli_close($conecta);
 ?>