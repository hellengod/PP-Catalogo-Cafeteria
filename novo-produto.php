<?php

    $PDO = new PDO(
        'mysql:host=' . '127.0.0.1' .
        ';dbname=' . 'catcafe',
        'root',
        'root'
    );

    $name = $_POST['name'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];

    $sql = 'INSERT INTO produto (nome, Descricao, Preco) VALUES (?,?,?)';
    $stmt = $PDO->prepare($sql);
    $stmt->bindValue(1, $name);
    $stmt->bindValue(2, $descricao);
    $stmt->bindValue(3, $preco);

    var_dump($stmt->execute());