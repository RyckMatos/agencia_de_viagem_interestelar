<?php
    session_start();
    $link = mysqli_connect('localhost', 'root', '') or die('Não foi possível conectar: ' . mysql_error());

    $sql = 'CREATE DATABASE agencia_de_viagem';
    mysqli_query($link,$sql) or die("Erro ao criar banco de dados");

    header('Location: /agencia_de_viagem_interestelar/database/create_users_table.php');
    // echo "Banco de Dados criado com sucesso\n";
?>