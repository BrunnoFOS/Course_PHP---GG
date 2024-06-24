<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajustador de preço</title>
    <link rel="stylesheet" href="../styles.css">
</head>

<body>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="" method="post">
            <label for="preço">Preço do produto(R$)</label>
            <input type="number" name="preçoInput" require="required">
            <label for="Ajuste">Qual será o percentual de reajuste?</label>
            <input type="range" name="ajusteRange" require="required" min="0" max="100">
        </form>
        <button type="submit">Calcular</button>
    </main>
    <section>
        <h1>Resultado do Reajuste</h1>
        <p>
            <?php
            $preco = $_POST['preçoInput'] ?? 1;
            $aumento = $_POST['ajusteRange'] ?? 1;
            $precoTotal = $preco + $preco / 100 * $aumento;

            echo "O produto que custava $preco, com $ajusteRange de aumento vai passar a custar";
            ?>
        </p>
    </section>
</body>

</html>