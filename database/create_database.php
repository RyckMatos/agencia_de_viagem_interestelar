<?php
    try{
        $pdo = new PDO('mysql:host='.HOST.';',USER,PASSWORD,);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch(Exception $e){
        // echo '<h2>Erro ao conectar</h2>';
    }
    $mysqli = $pdo->prepare("CREATE DATABASE agencia_de_viagem");
    $mysqli->execute();

    include('database\create_users_table.php');
?>