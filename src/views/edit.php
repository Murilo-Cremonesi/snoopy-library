<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar livro</title>
</head>
<body>

<h1>Editar livro</h1>

<form action="/livros/editar" method="post">

    <input type="hidden" name="id" value="<?= $book['id'] ?>">

    <label for="title">Título:</label>
    <input type="text" id="title" name="title" value="<?= htmlspecialchars($book['title']) ?>" required>

    <label for="author">Autor:</label>
    <input type="text" id="author" name="author" value="<?= htmlspecialchars($book['author']) ?>" required>

    <label for="year">Ano:</label>
    <input type="number" id="year" name="year" value="<?= htmlspecialchars($book['year']) ?>" required>

    <button type="submit">Salvar alterações</button>

</form>

</body>
</html>