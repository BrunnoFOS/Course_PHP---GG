<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média Aritmética e Ponderada</title>
    <link rel="stylesheet" href="../styles.css">
</head>

<body>
    <main>
        <h1>
            Médias
        </h1>
        <form action="" method="post">
            <label for="">1° nota</label>
            <input type="number" name="n1" placeholder="Insira a 1° nota.">
            <label for="">Peso - 1° nota</label>
            <input type="number" name="p1" placeholder="Caso seja um média simples, insira 1.">
            <label for="">2° nota</label>
            <input type="number" name="n2" placeholder="Insira a 2° nota.">
            <label for="">Peso - 2° nota</label>
            <input type="number" name="p2" placeholder="Caso seja um média simples, insira 1.">
            <button type="submit">Calcular</button>
        </form>
    </main>
    <section>
        <h1>
            Resultado das médias
        </h1>
        <h2>
            <?php
            $num1 = $_POST['n1'] ?? 0;
            $num2 = $_POST['n2'] ?? 0;
            $peso1 = $_POST['p1'] ?? 0.1;
            $peso2 = $_POST['p2'] ?? 0;
            $medSimpSoma = $num1 + $num2;
            $medSimp = $medSimpSoma / 2;
            $medPondSoma = $peso1 + $peso2;
            $medPond = $medSimpSoma / $medPondSoma;

            echo "Precisa: Formatar o número com somente 1 casa decimal e limitar as notas de 1 a 10";

            if ($num1 & $num2 & $peso1 & $peso2 != 0) {
                echo "Analisando os valores N1 = $num1, N2 = $num2. Temos que:";
                echo"
            <ul>
            <li>A <strong>média simples</strong> entre os valores é igual a number_format($medSimp, 1, ".")</li>;
            <li>A <strong>média ponderada</strong> entre os valores é igual a $medPond</li>
            </ul>";
            } 
            ?>
        </h2>
        <table>

        </table>
    </section>
</body>

</html>