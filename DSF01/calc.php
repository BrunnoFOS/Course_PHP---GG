<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 01 - Contador</title>
    <link rel="stylesheet" href="../styles.css">
</head>

<body>
    <header>
        <h1>
            RESULTADO FINAL
        </h1>
    </header>
    <section>
        <main>
            <?php
            $numero = $_GET["numero"];
            $antecessor = $_GET["numero"] - 1;
            $sucessor = $_GET["numero"] + 1;

            echo "O número escolhido foi <strong>$numero</strong> <br>";
            echo "O seu antecessor é $antecessor <br>";
            echo "O seu sucessor é $sucessor <br>";
            ?>
        </main>
        <a href="javascript:history.go(-1)">
            <button>Voltar</button>
        </a>
    </section>
</body>

</html>