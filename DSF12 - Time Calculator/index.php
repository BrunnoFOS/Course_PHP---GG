<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time Calculator</title>
    <link rel="stylesheet" href="../styles.css">
</head>

<body>
    <main>
        <h1>Calculadora de tempo</h1>
        <form action="" method="post">
            <?php
            $inputSegundos = $_REQUEST['segundosEntrada'] ?? 0;
            ?>
            <label for="segundos">Qual é o total de segundos?</label>
            <input type="number" name="segundosEntrada" value="<?= $inputSegundos ?>" required>
            <button type="submit">Calcular</button>
        </form>
    </main>
    <section>
        <h1>Resultado</h1>
        <?php
        $semanas = number_format(((($inputSegundos / 60) / 60) / 24) / 7, 1, ".", ".");
        $dias = number_format((($inputSegundos / 60) / 60) / 24, 1, ".", ".");
        $horas = number_format(($inputSegundos / 60) / 60, 1, ".", ".");
        $minutos = number_format($inputSegundos / 60, 1, ".", ".");
        if ($inputSegundos == 0) {
            print "Insira o valor em segundos para ver o resultado";
        } elseif ($inputSegundos == 1) {
            print "Analisando o valor que você inseriu, de $inputSegundos segundo equivale a um total de: <br>
            <br>
$semanas semanas<br>
$dias dias<br>
$horas horas<br>
$minutos minutos<br>
$inputSegundos segundo";
        } else {
            echo "Analisando o valor que você inseriu, de $inputSegundos segundos equivalem a um total de: <br>
            <br>
$semanas semanas<br>
$dias dias<br>
$horas horas<br>
$minutos minutos<br>
$inputSegundos segundos";
        }
        ?>
    </section>
</body>

</html>