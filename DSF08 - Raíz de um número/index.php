<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raíz Quadrada</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
    <main>
        <h1>Informe um número</h1>
        <form action="" method="post">
            <label for="numero">Número:</label>
            <input type="number" placeholder="Insira um número." name="numero" required>
            <button type="submit">Calcular raízes</button>
        </form>
    </main>
    <section>
        <h1>Resultado:</h1>
        <?php
        $numero = $_POST['numero'] ?? 0;
        $raizQuadrada = sqrt($numero);
        $raizQuadradaFormatada = number_format($raizQuadrada, 2, ".", ",");
        $raizCubica = $numero ** (1/3);
        $raizCubicaFormatada = number_format($raizCubica, 2, ".", ",");
        echo "Analisando o número \"" . "<strong>$numero</strong>" . "\", temos:";
        echo "<br>";
        echo "<ul>
        <li>A sua raíz quadrada é <strong>$raizQuadradaFormatada</strong></li>
        <li>A sua raíz cúbica é <strong>$raizCubicaFormatada</strong></li>
        </ul>"
        ?>
    </section>
</body>
</html>