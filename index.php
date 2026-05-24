<?php
include 'db.php';

$sql = "SELECT * FROM produtos";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>ByteBazar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<header>
    <img src="logo.png" alt="Logo">
    <div>
        <h1>ByteBazar</h1>
        <p>www.bytebazar.com.br</p>
    </div>
</header>

<a class="button" href="criar.php">Novo Produto</a>

<table>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Categoria</th>
        <th>Preço</th>
        <th>Estoque</th>
        <th>Descrição</th>
        <th>Ações</th>
    </tr>

    <?php while($produto = $result->fetch_assoc()): ?>

    <tr>
        <td><?= $produto['id'] ?></td>
        <td><?= $produto['nome'] ?></td>
        <td><?= $produto['categoria'] ?></td>
        <td>R$ <?= $produto['preco'] ?></td>
        <td><?= $produto['estoque'] ?></td>
        <td><?= $produto['descricao'] ?></td>
        <td class="action-links">
            <a href="editar.php?id=<?= $produto['id'] ?>">Editar</a>
            <a href="excluir.php?id=<?= $produto['id'] ?>">Excluir</a>
        </td>
    </tr>

    <?php endwhile; ?>

</table>

</div>

</body>
</html>
