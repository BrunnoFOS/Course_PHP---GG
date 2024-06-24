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
            <input type="number" name="n1" placeholder="Insira a 1° nota." required>
            <label for="">Peso - 1° nota</label>
            <input type="number" name="p1" placeholder="Caso seja um média simples, insira 1." required>
            <label for="">2° nota</label>
            <input type="number" name="n2" placeholder="Insira a 2° nota." required> 
            <label for="">Peso - 2° nota</label>
            <input type="number" name="p2" placeholder="Caso seja um média simples, insira 1." required>
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
            $peso1 = $_POST['p1'] ?? 1;
            $peso2 = $_POST['p2'] ?? 1;
            $medSimpSoma = $num1 + $num2;
            $medSimp = number_format($medSimpSoma / 2, 1, ".");
            $medPondSoma = $peso1 + $peso2;
            $medPond = number_format($medSimpSoma / $medPondSoma, 1, ".");

            if  ($num1 != 0 && $num2 != 0 && $peso1 == 1 && $peso2 == 1) {
                echo "Analisando os valores N1 = $num1, N2 = $num2. Temos que:";
                echo"
            <ul>
            <li>A <strong>média simples</strong> entre os valores é igual a $medSimp</li>
            </ul>";
            } elseif ($num1 != 0 && $num2 != 0 && $peso1 || $peso2 > 1) {
                echo "Analisando os valores N1 = $num1, N2 = $num2. Temos que:";
                echo"
            <ul>
            <li>A <strong>média ponderada</strong> entre os valores é igual a $medPond</li>
            </ul>";
            } elseif ($num1 == 0 && $num2 == 0 && $peso1 == 1 && $peso2 == 1){
                print('<h4>Aqui será exibido o resultado de sua média</h4>');
            } else {
                print('Digite valores válidos.');
            }
            ?> 
        </h2>
        <table>

        </table>
    </section>
</body>

</html>