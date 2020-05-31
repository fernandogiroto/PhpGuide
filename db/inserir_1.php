<div class="titulo">Inserir Registro #01 </div>
<?php

$testeNome ="fernando";
require_once "conexao.php";

$sql = "INSERT INTO cadastro(nome,email,site,filhos,salario)
VALUES ('Fernando','fernando@example.com','site.com',0,3)";

$conexao = novaConexao();
$resultado = $conexao->query($sql);
if($resultado){
    echo "Sucesso";
}else{
    echo "Erro " . $conexao->error;
}

$conexao->close();