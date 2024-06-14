    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Numero Real</title>
        <link rel="stylesheet" href="../styles.css">
    </head>

    <body>
        <main>
            <h1>
                Análise sobre o número real
            </h1>
            <?php
            $numeroSaida = $_GET['numeroEntrada'] ?? 0;
            $inteira = (int) $numeroSaida;
            $fracionaria =  $numeroSaida - $inteira;

            echo "Analisando o número <strong>" . number_format($numeroSaida, 2, ",", ".") . "</strong>
    informado por você, temos que:";
            echo "<br>";
            echo "<br>";
            echo "
            <ul> 
            <li>
            A parte inteira do número é <strong>" . number_format($inteira, 0, ",", ".") . "</strong>
            </li>
            <li>
            A parte fracionária do número é <strong>" . number_format($fracionaria, 2, ",", ".") . "</strong>
            </li>
            </ul>"
            ?>
            <button onclick="window.history.back()">Voltar para a página anterior</button>
        </main>
    </body>

    </html>