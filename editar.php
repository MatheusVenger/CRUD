<?php

include 'db.php';

$id = $_GET['id'];

$sql = "SELECT * FROM produtos WHERE id = $id";
$result = $conn->query($sql);

$produto = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Produto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<form action="atualizar.php" method="POST">

    <input type="hidden" name="id" value="<?= $produto['id'] ?>">

    <input type="text" name="nome" value="<?= $produto['nome'] ?>" required>

    <input type="text" name="categoria" value="<?= $produto['categoria'] ?>" required>

    <input type="number" step="0.01" name="preco" value="<?= $produto['preco'] ?>" required>

    <input type="number" name="estoque" value="<?= $produto['estoque'] ?>" required>

    <textarea name="descricao"><?= $produto['descricao'] ?></textarea>

    <button type="submit">Atualizar</button>

</form>

</div>

</body>
</html>
