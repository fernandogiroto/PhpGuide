<div class="titulo">Praticando</div>

<?php 

require_once('praticando2.php');

$sql = "INSERT INTO cadastro(
    nome,salario,site,nascimento,filhos,email)
    VALUES('Fernando',2000,'http://fernandoportugal.com',28-05-1990,2,mail@fernandoportugal.com)
    ";

$conexao = NovaConexao();
$conexao->query($sql);