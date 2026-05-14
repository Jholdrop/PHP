<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajuste de Produto</title>

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container{
            width: 400px;
            background-color: white;
            padding: 35px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.3);
        }

        h2{
            text-align: center;
            color: #1e3c72;
            margin-bottom: 25px;
            font-size: 28px;
        }

        label{
            font-weight: bold;
            color: #333;
        }

        input[type="number"]{
            width: 100%;
            padding: 12px;
            margin-top: 10px;
            margin-bottom: 20px;
            border: 2px solid #ccc;
            border-radius: 8px;
            outline: none;
            font-size: 16px;
            transition: 0.3s;
        }

        input[type="number"]:focus{
            border-color: #2a5298;
            box-shadow: 0 0 8px rgba(42,82,152,0.4);
        }

        input[type="submit"]{
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 8px;
            background-color: #2a5298;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        input[type="submit"]:hover{
            background-color: #1e3c72;
            transform: scale(1.02);
        }

        .resultado{
            margin-top: 25px;
            background-color: #f1f5ff;
            border-left: 5px solid #2a5298;
            padding: 20px;
            border-radius: 10px;
        }

        .resultado p{
            margin-bottom: 10px;
            color: #333;
            font-size: 16px;
        }

        .resultado strong{
            color: #1e3c72;
        }
    </style>
</head>
<body>

<div class="container">

    <h2>Reajuste de Produto</h2>

    <form method="POST">

        <label>Digite o preço do produto:</label>

        <input 
            type="number" 
            step="0.01" 
            name="preco" 
            placeholder="Ex: 100"
            required
        >

        <label>Digite o percentual de reajuste:</label>

        <input 
            type="number" 
            step="0.01" 
            name="reajuste" 
            placeholder="Ex: 15"
            required
        >

        <input type="submit" value="Calcular Reajuste">

    </form>

    <?php

        if($_SERVER["REQUEST_METHOD"] == "POST"){

            $preco = $_POST["preco"];
            $reajuste = $_POST["reajuste"];

            // Valor do aumento
            $aumento = ($preco * $reajuste) / 100;

            // Novo valor
            $novoPreco = $preco + $aumento;

            echo "<div class='resultado'>";

            echo "<p><strong>Preço original:</strong> R$ " . number_format($preco, 2, ',', '.') . "</p>";

            echo "<p><strong>Percentual de reajuste:</strong> " . $reajuste . "%</p>";

            echo "<p><strong>Valor do aumento:</strong> R$ " . number_format($aumento, 2, ',', '.') . "</p>";

            echo "<p><strong>Novo preço:</strong> R$ " . number_format($novoPreco, 2, ',', '.') . "</p>";

            echo "</div>";
        }

    ?>

</div>

</body>
</html>