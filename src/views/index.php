<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIVRARIA DO SNOOPY</title>
</head>
<body>

<h1>Livros</h1>

<a href="/livros/criar">Cadastrar livro</a>

<table>
    <thead>
        <tr>
            <th>Título</th>
            <th>Opções</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($books as $book): ?>
            <tr>
                <td><?= htmlspecialchars($book['title']) ?></td>

                <td>
                    <a href="/livros/ver?id=<?= $book['id'] ?>">Ver</a>

                    <a href="/livros/editar?id=<?= $book['id'] ?>">Editar</a>

                    <form action="/livros/excluir" method="post">
                        <input type="hidden" name="id" value="<?= $book['id'] ?>">
                        <button type="submit">Excluir</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>