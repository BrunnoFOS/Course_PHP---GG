<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cash Machine </title>
    <link rel="stylesheet" href="../styles.css">
    <style>
        img {
            width: 70px;
        }
    </style>
</head>

<body>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="" method="get">
            <label for="valorInput">Qual valor você deseja sacar? <strong>(R$)</strong></label>
            <input type="number" required name="valorInput" step="5">
            <small><strong>Só podem ser sacadas notas de 100 R$, 50 R$, 10 R$ e 5 R$.</strong></small>
            <button>Sacar</button>
        </form>
    </main>
    <section>
        <h1>SAQUE</h1>
        <?php
        $saque = $_REQUEST['valorInput'] ?? 0;
        $resto = $saque;
        $tot100 = floor($resto / 100);
        $resto %= 100;
        $tot50 = floor($resto / 50);
        $resto %= 50;
        $tot10 = floor($resto / 10);
        $resto %= 10;
        $tot5 = floor($resto / 5);
        $resto %= 5;

        if ($saque == 0) {
            echo "Por favor, insira o valor do saque";
        } else {
            echo "O saque de <strong>$saque R$</strong> resultará nas seguintes notas:";

        }
        ?>
        <ul>
            <li><img src="../imagens/100-reais.jpg" alt=""> <?= $tot100 ?> x</li>
            <li><img src="../imagens/50-reais.jpg" alt=""> <?= $tot50 ?> x</li>
            <li><img src="../imagens/10-reais.jpg" alt=""> <?= $tot10 ?> x</li>
            <li><img src="../imagens/5-reais.jpg" alt=""> <?= $tot5 ?> x</li>
        </ul>
    </section>
</body>

</html>