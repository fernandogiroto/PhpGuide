<div class="titulo">Consultar Registros</div>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<?php

function novaConexao($banco = 'curso_php'){

    $servidor = '127.0.0.1';
    $usuario = 'root';
    $senha = '';

    try{
        $conexao = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha);
        return $conexao;
    }catch(PDOException $e){
        die('Erro: ' . $e->getMessage());
    }
}


novaConexao();