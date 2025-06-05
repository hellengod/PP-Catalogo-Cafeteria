<?php



if (!array_key_exists('PATH_INFO', $_SERVER) || $_SERVER['PATH_INFO'] === '/') {
    require_once 'list-produto.php';
} elseif ($_SERVER['PATH_INFO'] === '/novo-produto') {
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        require_once 'add-produto.php';
    } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
        require_once 'novo-produto.php';
    }
} elseif ($_SERVER['PATH_INFO'] === '/editar-produto') {
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        require_once 'add-produto.php';
    } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
        require_once 'editar-produto.php';
    }
} elseif ($_SERVER['PATH_INFO'] === '/remover-produto') {
    require_once 'remover-produto.php';

}
