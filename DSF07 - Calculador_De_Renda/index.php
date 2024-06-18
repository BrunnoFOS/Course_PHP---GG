<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculador de renda</title>
    <link rel="stylesheet" href="../styles.css">
</head>

<body>
    <section>
        <h1>Informe seu salário</h1>
        <form action="" method="post">
            <label for="salario">Salário (R$):</label>
            <input type="number" name="salario" placeholder="Insira seu salário." required>
            <p>Considerando o salário mínimo de <strong>1,412.00 R$ - (2024)</strong></p>
            <button type="submit">Calcular</button>
        </form>
    </section>
    <section>
        <?php
        $renda = $_POST['salario'] ?? 0;
        $salarioMinimo = 1412;
        $quantidade = $renda / $salarioMinimo;
        $quantidadeFormatada = number_format($quantidade, 1, ",", ".");
        ?>
        <h1>Resultado Final</h1>
        <?php
        if ($quantidade == 0) {
            echo "Informe um valor maior que 0.";
        } elseif ($quantidade <= 1) {
            echo "Quem possui uma renda de $renda ganha cerca de $quantidadeFormatada salário mínimo.";
        } else {
            echo "Quem possui uma renda de $renda ganha aproximadamente $quantidadeFormatada salários mínimos.";
        };
        ?>
        <strong></strong></p>
    </section>
</body>

</html>