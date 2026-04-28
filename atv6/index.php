<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $ValorVendas = 5000;
    $obraPrima = 1000;
    $desconto = 200;
    //calculos aritmeticos
    $gasto = $obraPrima - $desconto;
    $lucro = $ValorVendas - $gasto;
    $empresaGrande = $lucro >= 1000;
   echo "<h1>a empresa tem gasto com obra prima de  $gasto <br> e o lucro é de  $lucro;</h1>"; // (uso de concatenação)
   echo "<p>a empresa é: <br>" . ($empresaGrande ? "Grande" : "Pequena") . "</p>"; //atribuição de valor para True e False (comparação)
    ?>
</body>
</html>