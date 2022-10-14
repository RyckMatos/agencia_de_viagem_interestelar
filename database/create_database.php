<?php
    // session_start();
    // $link = mysqli_connect('localhost', 'root', '') or die('Não foi possível conectar: ' . mysql_error());
    try{
        $pdo = new PDO('mysql:host='.HOST.';',USER,PASSWORD,);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch(Exception $e){
        // echo '<h2>Erro ao conectar</h2>';
    }
    $mysqli = $pdo->prepare("CREATE DATABASE agencia_de_viagem");
    $mysqli->execute();

    include('database\create_users_table.php');
    // mysqli_query($link,$sql) or die("Erro ao criar banco de dados");

    // header('Location: /agencia_de_viagem_interestelar/database/create_users_table.php');
    // echo "Banco de Dados criado com sucesso\n";
?>