<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Novo Produto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<header>
    <img src="logo.png" alt="Logo">
    <div>
        <h1>ByteBazar</h1>
    </div>
</header>

<form action="salvar.php" method="POST">

    <input type="text" name="nome" placeholder="Nome" required>

    <input type="text" name="categoria" placeholder="Categoria" required>

    <input type="number" step="0.01" name="preco" placeholder="Preço" required>

    <input type="number" name="estoque" placeholder="Estoque" required>

    <textarea name="descricao" placeholder="Descrição"></textarea>

    <button type="submit">Salvar</button>

</form>

</div>

</body>
</html>
