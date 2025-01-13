<?php

// autoload do composer
require __DIR__ . '/../vendor/autoload.php';

// Criando instância PDO
$pdo = null;

try {
    // instância PDO
    $pdo = new PDO('mysql:host=mariadb-docker;dbname=php', 'root', 'toor');
} catch (PDOException $e) {
    // mensagem de erro ao tentar se conectar ao banco
    echo $e->getMessage();
    die;
}

phpinfo();
