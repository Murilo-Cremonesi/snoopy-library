<?php

require_once __DIR__ . '/../config/connection.php';

class Book
{
    public function create($title, $author, $year)
    {
        global $pdo;

        $stmt = $pdo->prepare("INSERT INTO books (title, author, year)
        VALUES (?, ?, ?)");

        $stmt->execute([$title, $author, $year]);
    }

    public function delete($id)
    {
        global $pdo;

        $stmt = $pdo->prepare("DELETE FROM books WHERE id = ?");
        $stmt->execute([$id]);
    }

    public function list()
    {
        global $pdo;

        $stmt = $pdo->query("SELECT * FROM books");

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id)
    {
        global $pdo;

        $stmt = $pdo->prepare("SELECT * FROM books WHERE id = ?");
        $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function edit($id, $title, $author, $year)
    {
        global $pdo;

        $stmt = $pdo->prepare("UPDATE books SET title = ?, author = ?, year = ? WHERE id = ?");

        $stmt->execute([$title, $author, $year, $id]);
    }
}