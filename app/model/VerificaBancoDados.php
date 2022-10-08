<?php
    define('HOST', 'localhost');
    define('DB', 'agencia_de_viagem');
    define('USER', 'root');
    define('PASS', '');

    try {
        $pdo = new PDO('mysql:host='.HOST.';dbname='.DB,USER,PASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        header('Location: /agencia_de_viagem_interestelar/database/create_users_table.php');
    } catch (Exception $e) {
        // $_SESSION['banco'] = false;
        header('Location: /agencia_de_viagem_interestelar/database/create_database.php');
    }
?>