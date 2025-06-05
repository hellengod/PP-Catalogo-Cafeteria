<?php

$PDO = new PDO(
    'mysql:host=' . '127.0.0.1' .
    ';dbname=' . 'catcafe',
    'root',
    'root'
);


$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
$sql = 'DELETE FROM produto WHERE id_produto = ?';

$stmt = $PDO->prepare($sql);
$stmt->bindValue(1, $id);
if ($stmt->execute() === false) {
    header('Location: /index.php?sucesso=0');
} else {
    header('Location: /index.php?sucesso=1');
}
