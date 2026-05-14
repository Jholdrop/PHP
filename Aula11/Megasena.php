<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sorteio Da Megasena</title>

<style>

body{
    font-family: Arial, Helvetica, sans-serif;
    background:#1e1e1e;
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
    margin:0;
}

.container{
    text-align:center;
}

h1{
    color:white;
    margin-bottom:30px;
}

.roletas{
    display:flex;
    gap:15px;
}

.slot{
    width:80px;
    height:100px;
    background:white;
    border-radius:10px;
    display:flex;
    justify-content:center;
    align-items:center;
    font-size:35px;
    font-weight:bold;
    box-shadow:0 5px 10px rgba(0,0,0,0.4);
}

button{
    margin-top:30px;
    padding:12px 30px;
    border:none;
    border-radius:8px;
    background:#ff4444;
    color:white;
    font-size:18px;
    cursor:pointer;
}

button:hover{
    background:#ff2222;
}

</style>
</head>
<body>

<div class="container">

    <h1>SORTEIO</h1>

    <div class="roletas">

        <?php

        $vencedor = [];

        for ($i = 0; $i < 6; $i++) {

            $numero = rand(1, 60);
            $vencedor[] = $numero;

            echo "<div class='slot' id='n$i'>00</div>";
        }

        ?>

    </div>

    <button onclick="sortear()">Sortear</button>

</div>

<script>

const numeros = <?php echo json_encode($vencedor); ?>;

function sortear(){

    numeros.forEach((numero,index)=>{

        let slot = document.getElementById("n"+index);

        let animacao = setInterval(()=>{

            slot.innerHTML =
                Math.floor(Math.random()*60)+1;

        },100);

        setTimeout(()=>{

            clearInterval(animacao);

            slot.innerHTML =
                String(numero).padStart(2,'0');

        },1500 + (index * 500));

    });

}

</script>

</body>
</html>