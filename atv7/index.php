<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $funcionarios = 70;
    $AnosEmpresa = 5;
    //uso de IF e ELSE:
    if ($funcionarios >=60){
        echo "<h1>Empresa grande</h1>";
    }
    else {
        echo "<h1>Empresa pequena</h1>";
    }
    //uso de SWITCH CASE:
    switch ($AnosEmpresa) {
        case 1:
            echo "<p>Empresa  de nivel cobre</p>( $AnosEmpresa ) anos";
            break;
        case 5:
            echo "<p>Empresa de nivel Esmeralda</p> ( $AnosEmpresa ) anos";
            break;
        default:
            echo "$<p>Empresa nova</p>";
    }
    ?>
</body>
</html>