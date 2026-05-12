<?php
session_start();

// Encerra somente a sessao do usuario.
$_SESSION = [];
session_destroy();

header("Location: index.php?status=logout");
exit;
?>
