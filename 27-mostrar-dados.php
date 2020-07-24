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
        die("falha na consulta categoria");
    }

    $consulta_produtos = "SELECT nomeproduto"; 
    $consulta_produtos .= " FROM produtos";

    $produtos = mysqli_query($conecta, $consulta_produtos);  
    if (!$produtos){
        die("falha na consulta de produto");
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
                // passo 4 listagem de dados
                //while ( $registro = mysqli_fetch_row($categorias)) {
                while ( $registro = mysqli_fetch_assoc($categorias)) {    
            ?>
                <li><?php echo $registro["nomecategoria"] ?></li>
            <?php 
                }
            ?>
        </ul>
        
        <ul>
            <?php 
                while ( $registrop = mysqli_fetch_assoc($produtos)) {    
            ?>
                <li><?php echo $registrop["nomeproduto"] ?></li>
            <?php 
                }
            ?>
        </ul>
        <?php 
            // passo 5 liberar dados da memoria 
           mysqli_free_result($categorias);
           mysqli_free_result($produtos);
        ?>
    </body>
</html>
    
<?php
    // fecha conexão
    mysqli_close($conecta);
 ?>