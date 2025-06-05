<?php

$PDO = new PDO(
    'mysql:host=' . '127.0.0.1' .
    ';dbname=' . 'catcafe',
    'root',
    'root'
);


$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
if ($id === null && $id === false) {
    header('Location: /index.php?sucesso=0');
    exit();
}

$name = filter_input(INPUT_POST, 'name');
if ($name === null && $name === false) {
    header('Location: /index.php?sucesso=0');
    exit();
}

$descricao = filter_input(INPUT_POST, 'descricao');
if ($descricao === null && $descricao === false) {
    header('Location: /index.php?sucesso=0');
    exit();
}

$preco = filter_input(INPUT_POST, 'preco');
if ($preco === null && $preco === false) {
    header('Location: /index.php?sucesso=0');
    exit();
}

$sql = 'UPDATE produto SET nome = :nome, Descricao = :descricao, Preco = :preco WHERE id_produto = :id;';

$stmt = $PDO->prepare($sql);

$stmt->bindValue(':nome', $name);
$stmt->bindValue(':descricao', $descricao);
$stmt->bindValue(':preco', $preco);
$stmt->bindValue(':id', $id, PDO::PARAM_INT); 

if ($stmt->execute() === false) {
    header('Location: /index.php?sucesso=0');
} else {
    header('Location: /index.php?sucesso=1');
}
