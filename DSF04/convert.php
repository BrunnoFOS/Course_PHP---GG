<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas - 2.0</title>
    <link rel="stylesheet" href="../styles.css">
</head>

<body>
    <main>
        <h1>
            Conversor de Moedas 2.0
        </h1>
        <?php
        $url = "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial='06-10-2024'&@dataFinalCotacao='06-16-2024'&$top=100&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao";

        $dados = json_decode(file_get_contents($url), true);

        $cotacao = $dados["value"][0]["cotacaoCompra"];
        ?>
        <button onclick="window.history.back()">Voltar a página anterior</button>
    </main>
</body>

</html>