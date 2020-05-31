<div class="titulo">Excluir Registro #01</div>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<?php
require_once('conexao.php');

$sql = "DELETE FROM cadastro WHERE id = 3";

$conexao = novaConexao();
if($sql){
    $resultado = $conexao->query($sql);
}else{
    echo "nao existe";
}



if($resultado){
    echo "Sucesso";
}else{
    echo "Erro: " . $conexao->error ;
}

$conexao->close();