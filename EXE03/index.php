<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data e Hora</title>
</head>
<body>
    <?php
    $nome = 'Brunno';
    date_default_timezone_set('America/Sao_Paulo');
    echo "Olá," . " " . $nome . ", " . "tudo bem?";
    echo "<br>";
    echo "Hoje estamos em" . " " . date('d/M/Y') . ' , exatamente as ' . date('G:i:s') . ".";
    ?>
</body>
</html>