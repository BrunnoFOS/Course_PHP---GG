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
        <?php
        $preco = $_POST['precoInput'] ?? 0;
        $ajusteRange = $_POST['ajusteRange'] ?? 0;
        $aumento = $preco + $preco / 100 * $ajusteRange;
        ?>
        <h1>Reajustador de Preços</h1>
        <form action="" method="post">
            <label for="preço">Preço do produto (R$)</label>
            <input type="number" name="precoInput" required value="<?=$preco?>"> 
            <label for="Ajuste">Qual será o percentual de reajuste? <strong><span id="porc"><?=$ajusteRange?>%</span></strong> </label>
            <input type="range" name="ajusteRange" id="range" required value="<?=$ajusteRange?>">
            <button type="submit">Calcular</button>
        </form>
    </main>
    <section>
        <h1>Resultado do Reajuste</h1>
            <?php
            if ($preco == 0 || $ajusteRange == 0) {
                echo "Insira o preço e o ajuste para calcular o reajuste";
            } else {
                echo "O produto que custava R$ " . number_format($preco, 2, ',', '.') . ", com $ajusteRange% de aumento vai passar a custar R$ " . number_format($aumento, 2, ',', '.');
            }
            ?>
    </section>
</body>
<script>
    let elementoPorc = document.getElementById('range');
    elementoPorc.setAttribute('min', 0);
    elementoPorc.setAttribute('max', 100);
    elementoPorc.addEventListener('input', (event) => {
        document.getElementById('porc').textContent = event.target.value + '%';
    });
</script>

</html>