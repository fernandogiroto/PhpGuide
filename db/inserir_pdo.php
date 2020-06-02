<div class="titulo">Inserir PDO</div>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


<?php
require_once("conexao_pdo.php");
$conexao = novaConexao();

$sql = "INSERT INTO cadastro
(nome,email,site,filhos,salario)
VALUES (
    'Guilherme Filho',
    'gui@gmail.com',
    'http://guia.com',
    2,
    3000

)";

//print_r(get_class_methods($conexao));
if($conexao->exec($sql)){
    $id = $conexao->lastInsertId();
    echo "novo Cadastro com o id" . $id;
}else{
    echo $conexao->errorCode() . "<br>";
    print_r($conexao->errorInfo());
}