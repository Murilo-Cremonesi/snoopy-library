<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($book['title']) ?></title>
</head>
<body>

<h1><?= htmlspecialchars($book['title']) ?></h1>

<p>
    <strong>Autor:</strong>
    <?= htmlspecialchars($book['author']) ?>
</p>

<p>
    <strong>Ano:</strong>
    <?= htmlspecialchars($book['year']) ?>
</p>

<a href="/livros">Voltar</a>

</body>
</html>