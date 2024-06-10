<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas - PHP</title>
    <link rel="stylesheet" href="../styles.css">
</head>

<body>
    <main>
        <h1>
            Conversor de Moedas 1.0v
        </h1>
        <?php
        $numero = $_GET["numeroEntrada"];
        $cotacao = 5.35;
        $convert = $numero * $cotacao;

        echo "<p>$numero em dolár é exatamente <strong>$convert</strong> <br>";
        echo "<p>Baseando-se na cotação de $cotacao informada diretamente no código</p>";
        ?>
        <button onclick="voltar()">Voltar</button>
    </main>
</body>
<script>
    function voltar() {
        window.history.back();
    };
</script>

</html>