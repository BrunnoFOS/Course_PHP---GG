<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anamotia de uma divisão</title>
    <link rel="stylesheet" href="../styles.css">
</head>

<body>
    <main>
        <?php
        $dividendo = $_POST['dividendo'] ?? 0;
        $divisor = $_POST['divisor'] ?? 0;
        if ($divisor != 0) {
            $quociente = $dividendo / $divisor;
            $resto = $dividendo % $divisor;
        } else {
            echo "<script type='text/javascript'>alert('Você não pode dividir um número por 0');";
            echo "javascript:window.reload;</script>";
        };
        ?>
        <h1>
            Anatomia de uma divisão
        </h1>
        <form action="" method="post"><label for="dividendo">Dividendo:</label>
            <input type="number" name="dividendo" required value="<?= $dividendo ?>">
            <label for="divisor">Divisor:</label>
            <input type="number" name="divisor" required value="<?= $divisor ?>">
            <button type="submit">Dividir</button>
        </form>
    </main>
    <section>
        <h2>
            Estrutura de uma divisão
        </h2>
        <?php
        echo "O dividendo é $dividendo";
        echo "<br>";
        echo "O divisor é $divisor";
        echo "<br>";
        if ($divisor != 0) {
            echo "Logo o resultado será $quociente, com resto $resto";
        } else {
            echo "Não é possível dividir um número por 0";
        }

        ?>
    </section>
</body>

</html>