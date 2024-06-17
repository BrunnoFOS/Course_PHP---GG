<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Somador</title>
    <link rel="stylesheet" href="../styles.css">
</head>

<body>
    <main>
        <?php 
        $number1 = $_POST['n1'] ?? 0;
        $number2 = $_POST['n2'] ?? 0;
        ?>
        <h1>Soma de 2 números.</h1>
        <form action="" method="post">
            <label for="number1">Número 1</label>
            <input type="number" name="n1" placeholder="Digite o 1° número." value="<?=$number1?>">
            <label for="number2">Número 2</label>
            <input value="<?=$number2?>" type="number" name="n2" placeholder="Digite o 1° número.">
            <button type="submit">Somar</button>
        </form>
    </main>
    <section>
        <h2>Resultado da soma</h2>
        <?php
        
        $soma = $number1 * $number2;
        echo "O resultado da soma é $soma.";
        ?>
    </section>
</body>

</html>