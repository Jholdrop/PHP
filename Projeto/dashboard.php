<?php
session_start();

// So entra se ja existir usuario salvo
if (!isset($_SESSION["cadastros"])) {
    header("Location: index.php?status=acesso_negado");
    exit;
}

if (count($_SESSION["cadastros"]) == 0) {
    header("Location: index.php?status=acesso_negado");
    exit;
}

$cadastros = $_SESSION["cadastros"];

$tema = "claro";
$empresaCookie = "Nao definida";

if (isset($_COOKIE["tema"])) {
    $tema = $_COOKIE["tema"];
}
if (isset($_COOKIE["empresa"])) {
    $empresaCookie = $_COOKIE["empresa"];
}

$tituloPagina = "Dashboard";
include "header.php";
?>

<h2>Dashboard</h2>
<p>Lista de todos os cadastros salvos na sessao.</p>
<p>Total: <strong><?php echo count($cadastros); ?></strong></p>

<table>
    <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Cargo</th>
        <th>Empresa</th>
    </tr>
    <?php foreach ($cadastros as $cadastro): ?>
        <tr>
            <td><?php echo $cadastro["nome"]; ?></td>
            <td><?php echo $cadastro["email"]; ?></td>
            <td><?php echo $cadastro["cargo"]; ?></td>
            <td><?php echo $cadastro["empresa"]; ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<h3>Preferencias do cookie</h3>
<table>
    <tr>
        <th>Tema</th>
        <th>Empresa preferida</th>
    </tr>
    <tr>
        <td><?php echo $tema; ?></td>
        <td><?php echo $empresaCookie; ?></td>
    </tr>
</table>

<?php include "footer.php"; ?>
