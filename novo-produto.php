<?php

$PDO = new PDO(
    'mysql:host=' . '127.0.0.1' .
    ';dbname=' . 'catcafe',
    'root',
    'root'
);

$name = filter_input(INPUT_POST, 'name');
$descricao = filter_input(INPUT_POST, 'descricao');
$preco = filter_input(INPUT_POST, 'preco');

$sql = 'INSERT INTO produto (nome, Descricao, Preco) VALUES (?,?,?)';
$stmt = $PDO->prepare($sql);
$stmt->bindValue(1, $name);
$stmt->bindValue(2, $descricao);
$stmt->bindValue(3, $preco);

if ($stmt->execute() === false) {
    header('Location: /?sucesso=0');
} else {
    header('Location: /?sucesso=1');
}