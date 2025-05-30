<?php

define('MYSQL_HOST', '127.0.0.1');
define('MYSQL_USER', 'root');
define('MYSQL_PASSWORD', 'root');
define('MYSQL_DB_NAME', 'catcafe');

try {
    $PDO = new PDO(
        'mysql:host=' . MYSQL_HOST .
        ';dbname=' . MYSQL_DB_NAME,
        MYSQL_USER,
        MYSQL_PASSWORD
    );
} catch (PDOException $e) {
    echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
}