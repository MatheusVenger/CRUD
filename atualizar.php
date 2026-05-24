<?php

include 'db.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$categoria = $_POST['categoria'];
$preco = $_POST['preco'];
$estoque = $_POST['estoque'];
$descricao = $_POST['descricao'];

$sql = "UPDATE produtos SET
nome='$nome',
categoria='$categoria',
preco='$preco',
estoque='$estoque',
descricao='$descricao'
WHERE id=$id";

$conn->query($sql);

header("Location: index.php");

?>
