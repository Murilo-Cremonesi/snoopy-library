<?php

require_once __DIR__ . '/../controllers/LivrosController.php';

$livrosController = new LivrosController();

$url = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

if ($url == '/livros' && $method == 'GET') {
    $livrosController->index();
}

if ($url == '/livros/criar' && $method == 'POST') {
    $livrosController->create();
}

if ($url == '/livros/ver' && $method == 'GET') {
    $livrosController->read();
}

if ($url == '/livros/editar' && $method == 'GET') {
    $livrosController->edit();
}

if ($url == '/livros/editar' && $method == 'POST') {
    $livrosController->edit();
}

if ($url == '/livros/excluir' && $method == 'POST') {
    $livrosController->delete();
}