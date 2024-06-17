<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculador de renda</title>
    <link rel="stylesheet" href="../styles.css">k
</head>

<body>
    <section>
        <h1>Informe seu salário</h1>
        <form action="" method="post">
            <label for="salario">Salário (R$):</label>
            <input type="number" name="salario" placeholder="Insira seu salário.">
            <p>Considerando o salário mínimo de <strong>1,412.00 R$ - (2024)</strong></p>
            <button type="submit">Calcular</button>
        </form>
    </section>
    <section>
        <?php
        $renda = $_POST['salario'];
        $salarioMinimo = 1412;
        $quantidade = intval($renda / $salarioMinimo);
        ?>
        <h1>Resultado Final</h1>
        <?php 
        echo "Quem possui uma renda de $renda ganha"
        ?>
        <strong></strong></p>
    </section>
</body>

</html>