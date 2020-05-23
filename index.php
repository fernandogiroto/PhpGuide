<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/estilo.css">
    <title>GUIA PHP</title>
</head>
<body>
    <header class="cabecalho">
        <h1>GUIA PHP <img  width="60px" src="php.png"></h1>
        <h2>Índice dos Exercícios</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <?php require_once('menu.php'); ?>
        </div>
    </main>
    <footer class="rodape">
        FERNANDO PORTUGAL © <?= date('Y'); ?>
    </footer>
</body>
</html>