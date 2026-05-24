<?php

include 'db.php';

$nome = $_POST['nome'];
$categoria = $_POST['categoria'];
$preco = $_POST['preco'];
$estoque = $_POST['estoque'];
$descricao = $_POST['descricao'];

$sql = "INSERT INTO produtos (nome, categoria, preco, estoque, descricao)
VALUES ('$nome', '$categoria', '$preco', '$estoque', '$descricao')";

$conn->query($sql);

header("Location: index.php");

?>
