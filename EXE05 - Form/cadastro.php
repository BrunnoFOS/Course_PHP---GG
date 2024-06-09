<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento de envio de dados - Formulário</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
<header>
    <h1>
        Resultado de processamentos de dados - Envio por formulário.
    </h1>
</header>
<main>
    <?php 
     $nome = isset($_GET["nome"]) ? $_GET["nome"] : "Você não forneceu";
     $sobrenome = isset($_GET["sobrenome"]) ? $_GET["sobrenome"] : "um nome";

    echo "<p>É um prazer te conhecer $nome $sobrenome</p>"
    ?>
</main>
</body>

</html>