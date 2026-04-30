<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        ul {
            border: 2px solid black;
            width: 200px;
            padding: 10px;
            list-style-type: none;
        }

        li {
            border-bottom: 1px solid gray;
            padding: 5px;
        }

    </style>
</head>
<body>

    <ul>
    <?php 
    $numero = 9;
    for ($i = 0; $i <= 10; $i++) {
        $tabuada = $numero * $i;
        echo "<li>$numero x $i = $tabuada</li>";
    }
    ?>
    </ul>

</body>
</html>