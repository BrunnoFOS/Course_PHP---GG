<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número Aleatório</title>
    <link rel="stylesheet" href="../styles.css">
</head>

<body>
    <main>
        <h1>
            Trabalhando com números aleatórios
        </h1>
        <!--Poderia também ser "rand() ou random_int()", inclusive a segunda opção é inclusive utilizada para
criptografar esses números, porém ambas citadas são MUITO lentas, principalmente a criptografada.-->
        <?php
        $min = 0;
        $max = 100;

        $num = mt_rand($min, $max);
        echo "<p>Clique para sortear um número entre $min e $max</p>";
        echo "<p>O número sorteado foi $num</p>"
        ?>
        <button id="idReset"> Gerar um novo número</button>
    </main>
</body>
<script>
    let botao = document.getElementById("idReset")

    botao.addEventListener('click', () => {
        location.reload()
    })
</script>

</html>