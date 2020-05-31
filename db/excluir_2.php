<div class="titulo">Excluir Registro #01</div>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<?php
// 
require_once('conexao.php');

$sql = "SELECT id,nome,email,site,filhos FROM cadastro";
$registros = [];
$conexao = novaConexao();
$resultado = $conexao->query($sql);


if(isset($_GET['excluir'])){
    $excluirSQL = "DELETE FROM cadastro WHERE iD = ?";
    $stmt = $conexao->prepare($excluirSQL);
    $stmt->bind_param("i", $_GET['excluir']);
    $stmt->execute();
    //header('refresh:0');
}


if($resultado->num_rows > 0){
    while($row = $resultado->fetch_assoc()){
        $registros[] = $row; 
    }
}elseif($conexao->error){
    echo "Erro: " . $conexao->error;
}

$conexao->close();

?>

<table class="table table-hover border rounded shadow">
    <thead>
        <th>Códigos</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Site</th>
        <th>Filhos</th>
    </thead>
    <tbody> 
        <?php 
            foreach($registros as $registro){ ?>
                <tr>
                    <td> <?php echo $registro['id']  ?>  </td>
                    <td> <?php echo $registro['nome']  ?>  </td>
                    <td> <?php echo $registro['email']  ?>  </td>
                    <td> <?php echo $registro['site']  ?>  </td>
                    <td> <?php echo $registro['filhos']  ?>  </td>
                    <td> <a href="http://localhost/guiaphp/exercicio.php?dir=db&file=excluir_2&excluir=<?php echo $registro['id'] ?>"
                     class="btn btn-danger">Excluir</a></td>
                </tr>
            
            <?php } ?>
    </tbody>
</table>