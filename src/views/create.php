<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar livro</title>
</head>
<body>

<h1>Cadastrar Livros</h1>

<form action="/livros/criar" method="post">
    <label for="title">Título:</label>
    <input type="text" id="title" name="title" required>

    <label for="author">Autor:</label>
    <input type="text" id="author" name="author" required>

    <label for="year">Ano:</label>
    <input type="number" id="year" name="year" required>

    <button type="submit">Cadastrar</button>
</form>

</body>
</html>