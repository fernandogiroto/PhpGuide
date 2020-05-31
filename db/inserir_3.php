<div class="titulo">Insrir 03</div>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<?php 
require_once('conexao.php');


$sql = "INSERT INTO cadastro (nome,email,site,filhos,salario) VALUES (?,?,?,?,?)";
$conexao = novaConexao();
$stmt = $conexao->prepare($sql);

$params = ['luis','luis@gmail.com','luis.com',3,1000];

$stmt->bind_param("sssid", ...$params);
$stmt->execute();


