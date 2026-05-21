<?php 
require_once 'connect_postgres.php';
$sql ='INSERT INTO alunos (
nome, 
sobrenome,
data_nascimento,
turma
) 
VALUES (:nome,
:sobrenome,
:data_nascimento,
:turma)';
$stmt = $conexao->prepare($sql);
$stmt->bindValue(":nome", "Joao");
$stmt->bindValue(":sobrenome", "Silva");
$stmt->bindValue(":data_nascimento", "2002-02-12");
$stmt->bindValue(":turma", "I1D35");

$stmt->execute();

echo "Aluno inserido com sucesso";
?>