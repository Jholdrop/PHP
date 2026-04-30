<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
    <tr>
    <th>ID </th>
    <th>Nome</th>
    <th>Preço</th>
    </tr>
    <?php 
    $produtos = [
        ["id" => "1", "nome" => "batata lays", "preco" => 30],
        ["id" => "2", "nome" => "carne", "preco" => 50],
        ["id" => "3", "nome" => "vinho", "preco" => 100]
    ];
    foreach ($produtos as $f){
    echo
    "<tr>
    <td>". $f["id"] . "</td>
    <td>". $f["nome"]. "</td>
    <td>". $f["preco"] . "</td>
    </tr>";
    }
    ?>
    </table>
</body>
</html>