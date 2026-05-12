<?php
// Tema padrao
$temaAtual = "claro";

// Verifica se o usuario aceitou salvar dados e cookies
$consentimentoDados = false;
if (isset($_COOKIE["consentimento_dados"])) {
    if ($_COOKIE["consentimento_dados"] == "sim") {
        $consentimentoDados = true;
    }
}

if ($consentimentoDados && isset($_COOKIE["tema"])) {
    if ($_COOKIE["tema"] == "escuro") {
        $temaAtual = "escuro";
    }
}

// Troca de tema imediata pelo clique (sem precisar cadastrar)
if (isset($_GET["tema"])) {
    if ($_GET["tema"] == "claro" || $_GET["tema"] == "escuro") {
        $temaAtual = $_GET["tema"];
        if ($consentimentoDados) {
            setcookie("tema", $temaAtual, time() + 60 * 60 * 24 * 30, "/");
        }
    }
}

// Titulo padrao
if (!isset($tituloPagina)) {
    $tituloPagina = "Mini Sistema";
}

$usuarioNome = "";
if (isset($_SESSION["nome"])) {
    $usuarioNome = $_SESSION["nome"];
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $tituloPagina; ?></title>
    <style><?php include "style.php"; ?></style>
</head>
<body class="tema-<?php echo $temaAtual; ?>">
    <div class="container">
        <header class="topo">
            <h1>Mini Sistema de Usuario</h1>
            <p>Exemplo pratico com sessao, cookie e navegacao entre paginas.</p>

            <nav class="menu">
                <a href="index.php">Cadastro</a>
                <a href="dashboard.php">Dashboard</a>
                <a href="logout.php">Sair</a>
            </nav>

            <div class="tema-links">
                Tema:
                <a href="?tema=claro">Claro</a>
                <a href="?tema=escuro">Escuro</a>
            </div>

            <?php if (!$consentimentoDados): ?>
                <div class="mensagem mensagem-erro">
                    Cookies e salvamento so funcionam apos aceitar no formulario de cadastro.
                </div>
            <?php endif; ?>

            <?php if ($usuarioNome != ""): ?>
                <div class="badge-usuario">
                    Usuario ativo: <strong><?php echo $usuarioNome; ?></strong>
                </div>
            <?php endif; ?>
        </header>
        <main>
