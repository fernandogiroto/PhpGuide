<div class="titulo">Praticando</div>


<?php

//inserir dados na tabela

require_once('conexao.php');

$sql = "INSERT INTO 
cadastro(nome, nascimento,email,site,filhos,salario)
VALUES('Fernando',28-05-1990,email@fernando.com,'https://fernandoportugal.com',0,2000)"
;

$conexao = novaConexao();
$resultado = $conexao->query($sql);
if($resultado){
    echo "Sucesso";
}else{
    echo "Erro " . $conexao->error;
}

$conexao->close();