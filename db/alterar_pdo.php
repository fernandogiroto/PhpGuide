<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<?php
require_once("conexao_pdo.php");
$conexao = novaConexao();

$sql = "UPDATE cadastro SET nome = ?, email = ?, site = ?, filhos = ?, salario = ?
WHERE id = ?";

$stmt = $conexao->prepare($sql);
$resultado = $stmt ->execute([
    'Gui2',
    'gui@gmail.com',
    'http://gui.com',
    1,
    12200,
    21

]);

if($resultado){
    echo "Sucesso";
}else{
    print_r($stmt->errorInfo());
}