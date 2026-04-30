<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border ="1">
        <tr>
            <th>Nome</th>
            <th>Cargo</th>
            <th>Salário</th>
        </tr>
    <?php 
$funcionarios = [
    ["nome" => "ana","cargo" => "analista", "salario" => 3500],
    ["nome" => "carlos","cargo" => "dev", "salario" => 8800],
    ["nome" => "higor","cargo" => "senior", "salario" => 7600],
    ];

    /*echo "funcionario:"  . $funcionarios [2]["nome"]. "<br>" .
    $funcionarios [2]["cargo"];
*/
    foreach ($funcionarios as $f){
        echo
        "<tr>
        <td>". $f["nome"] . "</td>
        <td>" . $f ["cargo"] . "</td>
        <td>" . $f["salario"] . "</td>
        </tr>";
    }
?>
</table>
</body>
</html>
