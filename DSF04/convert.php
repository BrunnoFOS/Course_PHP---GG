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

        $inicio = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y");

        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=100&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $dados = json_decode(file_get_contents($url), true);

        $cotacao = $dados["value"][0]["cotacaoCompra"];
        $cotacaoConvertida = number_format($cotacao, 2);

        $valor = $_GET["numeroEntrada"];
        $valorConvertido = $valor/$cotacao;
        $valorConvertidoFormatado = number_format($valorConvertido, 2);

        echo "O valor de " . "<strong>$valor $</strong>" . " em reais é: <br> <strong>$valorConvertidoFormatado R$</strong>";
        echo "<br>";
        echo "<br>";
        echo "A cotação atual do dólar em <strong>$fim (M/D/A)</strong> é <strong>$cotacaoConvertida $</strong>, informação extraída diretamente da API do " . '<a href="https://www.bcb.gov.br/">Banco Central do Brasil</a>';
        ?>
        <button onclick="window.history.back()">Voltar a página anterior</button>
    </main>
</body>

</html>