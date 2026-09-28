<?php

require_once __DIR__ . '/../models/Books.php';

class LivrosController
{
    public function create()
    {
        $title = $_POST['title'];
        $author = $_POST['author'];
        $year = $_POST['year'];

        $book = new Book();

        $book->create($title, $author, $year);

        header('Location: /livros');
        exit;
    }

    public function delete()
    {
        $id = $_POST['id'];

        $book = new Book();

        $book->delete($id);

        header('Location: /livros');
        exit;
    }

    public function index()
    {
        $book = new Book();

        $books = $book->list();

        require __DIR__ . '/../views/index.php';
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {

            $id = $_GET['id'];

            $bookModel = new Book();

            $book = $bookModel->find($id);

            require __DIR__ . '/../views/edit.php';
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $id = $_POST['id'];
            $title = $_POST['title'];
            $author = $_POST['author'];
            $year = $_POST['year'];

            $book = new Book();

            $book->edit($id, $title, $author, $year);

            header('Location: /livros');
            exit;
        }
    }

    public function read()
    {
        $id = $_GET['id'];

        $bookModel = new Book();

        $book = $bookModel->find($id);

        require __DIR__ . '/../views/read.php';
    }
}