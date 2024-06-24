<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DSF10 - Age calculator</title>
    <link rel="stylesheet" href="../styles.css">
</head>

<body>
    <main>
        <form action="" method="post">
            <h1>Calculando a sua idade</h1>
            <label for="anoNasc">Em que ano você nasceu?</label>
            <input type="number" name="anoNasc" placeholder="Ex: 2000" required>
            <label for="anoCalc">Quer saber sua idade em qual ano? <br> Estamos em <?php echo date('Y'); ?></label>
            <input type="number" placeholder="Ex: 2007" name="anoCalc" required>
            <button type="submit">Calcular</button>
        </form>
    </main>
    <section>
        <h1>Resultado</h1>
    
       <?php
       $anoNasc = $_POST['anoNasc'] ?? 0;
       $anoCalc = $_POST['anoCalc'] ?? 0; 
       
       if (!is_numeric($anoNasc) || !is_numeric($anoCalc) || floatval($anoNasc) != intval($anoNasc) || floatval($anoCalc) != intval($anoCalc)) {
           echo "Preencha com números válidos";
       } else {
           $anoNasc = (int)$anoNasc;
           $anoCalc = (int)$anoCalc;
       
           if ($anoNasc != 0 && $anoCalc != 0){
               $idade = $anoCalc - $anoNasc;
               echo "Você possui $idade anos em $anoCalc";
           } elseif ($anoNasc == 0 && $anoCalc == 0) {
               echo "Insira os anos requeridos para o cálculo";
           } else {
            echo "Preencha com números válidos";
           }
       }
       ?>
    </section>
</body>

</html>