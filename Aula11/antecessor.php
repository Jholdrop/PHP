<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form3</title>

    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container{
            background-color: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
            width: 500px;
        }

        h2{
            text-align: center;
        }

        input{
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"]{
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }

        table{
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td{
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

    </style>
</head>

<body>

<div class="container">
    <h2>Numero anterior e posterior</h2>

    <form method="POST">
        <label>digite o numero escolhido</label>
        <input type="number" name="numero" id="numero">
        <input type="submit" value="Enviar">
    </form>

    <?php 
    if(isset($_POST["numero"])){
    $numero = $_POST["numero"];
    $antecessor = $numero - 1;
    $posterior = $numero +1;

        echo "
        <table>
            <tr>
                <th>Antecessor</th>
                <th>Numero</th>
                <th>Posterior</th>
            </tr>

            <tr>
                <td>$antecessor</td>
                <td>$numero</td>
                <td>$posterior</td>
            </tr>
        </table>
        ";
    }
    ?>

</div>

</body>
</html>