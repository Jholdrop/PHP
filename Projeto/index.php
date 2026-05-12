<?php
session_start();

$mensagem = "";
$tipoMensagem = "sucesso";
$nome = "";
$email = "";
$cargo = "";
$empresa = "";
$aceitouDados = false;

if (isset($_COOKIE["consentimento_dados"])) {
    if ($_COOKIE["consentimento_dados"] == "sim") {
        $aceitouDados = true;
    }
}

// Cria lista de cadastros na sessao (se ainda nao existir)
if (!isset($_SESSION["cadastros"])) {
    $_SESSION["cadastros"] = array();
}

// Carrega dados da sessao, se existirem
if (isset($_SESSION["nome"])) {
    $nome = $_SESSION["nome"];
}
if (isset($_SESSION["email"])) {
    $email = $_SESSION["email"];
}
if (isset($_SESSION["cargo"])) {
    $cargo = $_SESSION["cargo"];
}
if (isset($_SESSION["empresa"])) {
    $empresa = $_SESSION["empresa"];
}

// Carrega preferencia de empresa do cookie
if (isset($_COOKIE["empresa"])) {
    $empresa = $_COOKIE["empresa"];
}

// Mensagem de retorno do logout
if (isset($_GET["status"])) {
    if ($_GET["status"] == "logout") {
        $mensagem = "Sessao encerrada com sucesso.";
        $tipoMensagem = "sucesso";
    }
    if ($_GET["status"] == "acesso_negado") {
        $mensagem = "Cadastre um usuario primeiro.";
        $tipoMensagem = "erro";
    }
}

// Botao para limpar apenas sessao
if (isset($_POST["limpar"])) {
    session_unset();
    $_SESSION["cadastros"] = array();
    $nome = "";
    $email = "";
    $cargo = "";
    $empresa = "";
    $mensagem = "Dados da sessao foram apagados.";
    $tipoMensagem = "sucesso";
}

// Salvar cadastro
if (isset($_POST["salvar"])) {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $cargo = $_POST["cargo"];
    $empresa = $_POST["empresa"];

    if ($nome == "" || $email == "" || $cargo == "" || $empresa == "") {
        $mensagem = "Preencha todos os campos.";
        $tipoMensagem = "erro";
    } elseif (!isset($_POST["aceite_dados"])) {
        $mensagem = "Voce precisa aceitar cookies e salvamento de dados para cadastrar.";
        $tipoMensagem = "erro";
    } else {
        setcookie("consentimento_dados", "sim", time() + 60 * 60 * 24 * 30, "/");
        $aceitouDados = true;

        // Sessao = ultimo usuario salvo
        $_SESSION["nome"] = $nome;
        $_SESSION["email"] = $email;
        $_SESSION["cargo"] = $cargo;
        $_SESSION["empresa"] = $empresa;

        // Sessao = historico de cadastros (nao substitui os antigos)
        $novoCadastro = array(
            "nome" => $nome,
            "email" => $email,
            "cargo" => $cargo,
            "empresa" => $empresa
        );
        $_SESSION["cadastros"][] = $novoCadastro;

        // Cookie = preferencia de empresa
        setcookie("empresa", $empresa, time() + 60 * 60 * 24 * 30, "/");

        header("Location: dashboard.php");
        exit;
    }
}

$tituloPagina = "Cadastro";
include "header.php";
?>

<h2>Cadastro</h2>
<p>Preencha os dados para salvar na sessao.</p>
<?php if (count($_SESSION["cadastros"]) > 0): ?>
    <p>Total de cadastros salvos: <strong><?php echo count($_SESSION["cadastros"]); ?></strong></p>
<?php endif; ?>

<?php if ($mensagem != ""): ?>
    <div class="mensagem mensagem-<?php echo $tipoMensagem; ?>"><?php echo $mensagem; ?></div>
<?php endif; ?>

<form method="POST" action="index.php">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome" value="<?php echo $nome; ?>">

    <label for="email">Email:</label>
    <input type="text" name="email" id="email" value="<?php echo $email; ?>">

    <label for="cargo">Cargo:</label>
    <input type="text" name="cargo" id="cargo" value="<?php echo $cargo; ?>">

    <label for="empresa">Empresa:</label>
    <input type="text" name="empresa" id="empresa" value="<?php echo $empresa; ?>">

    <label class="checkbox-consentimento">
        <input type="checkbox" name="aceite_dados" value="sim" <?php if ($aceitouDados || isset($_POST["aceite_dados"])) { echo "checked"; } ?>>
        Eu aceito o uso de cookies e o salvamento dos dados no sistema.
    </label>

    <div class="acoes">
        <button type="submit" name="salvar">Salvar</button>
        <button type="submit" name="limpar" class="secundario">Limpar Sessao</button>
    </div>
</form>

<?php include "footer.php"; ?>
