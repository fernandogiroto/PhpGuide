<div class="titulo">Excluir PDO</div>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<?php
require_once("conexao_pdo.php");
$conexao = novaConexao();


   // $sql = "DELETE FROM cadastro WHERE id = ?";
    //$stmt = $conexao->prepare($sql);
    //$stmt->execute([14]);

echo $_GET['excluir'];
    if(isset($_GET['excluir'])){
        $excluirSQL = "DELETE FROM cadastro WHERE iD = ?";
        $stmt = $conexao->prepare($excluirSQL);
        $stmt->bind_param("i", $_GET['excluir']);
        $stmt->execute();
        //header('refresh:0');
    }