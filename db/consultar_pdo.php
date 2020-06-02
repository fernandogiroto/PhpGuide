<div class="titulo">Consultar PDO</div>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<?php
require_once("conexao_pdo.php");
$conexao = novaConexao();
$sql = "SELECT * from cadastro";
$id = $_GET['id'];

$resultado = $conexao->query($sql)->fetchAll(PDO::FETCH_ASSOC);
print_r($resultado);
echo "<hr>";

$sql = "SELECT id,nome,email,site,filhos,salario FROM cadastro LIMIT :qtde OFFSET :inicio";

$stmt = $conexao->prepare($sql);
$stmt->bindValue(':qtde',1, PDO::PARAM_INT);
$stmt->bindValue(':inicio',1, PDO::PARAM_INT);

//print_r(get_class_methods($stmt));

if($stmt->execute()){
    $resultado = $stmt->fetchAll();
    echo "<pre>";
    print_r($resultado);
    echo"</pre>";
    echo "<ul>";
    foreach($resultado as $row){
        echo "<li>". $row['nome'] . "</li>";
        echo "<li>". $row['email'] . "</li>";
        echo "<li>". $row['site'] . "</li>";
        echo "<li>". $row['filhos'] . "</li>";
        echo "<li>". $row['salario'] . "</li>";
    }
    echo "</ul>";

}else{
    echo "Código: " . $stmt->errorCode() . "<br>";
    print_r($stmt->errorInfo());
}

echo "<hr>";
$sql = "SELECT * FROM cadastro WHERE id = :id";
$stmt = $conexao->prepare($sql);
if($stmt->execute([':id' => $id])){
    $resultado = $stmt->fetchAll();
    print_r($resultado);
}else{
    echo "Código: " . $stmt->errorCode() . "<br>";
    print_r($stmt->errorInfo());
}

