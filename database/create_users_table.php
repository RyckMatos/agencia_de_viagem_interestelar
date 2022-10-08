<?php
    session_start();
    $HOST = "localhost";
    $USER = "root";
    $PASS = "";
    $DB = "agencia_de_viagem";

    $conn = mysqli_connect($HOST, $USER, $PASS, $DB) or die("Falha na conexão: " . $conn->connect_error);

    $table = 'users';
    $result = mysqli_query($conn, "SHOW TABLES LIKE '$table'");
    $tableExists = $result && $result->num_rows > 0;

    if ($tableExists) {
        $_SESSION['banco'] = true;
        $_SESSION['msgBanco'] = 'Banco ja existente!';
    } else {
        $sql = "CREATE TABLE users (
            id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            nome VARCHAR(255) NOT NULL,
            sobrenome VARCHAR(255) NOT NULL,
            email VARCHAR(255) NOT NULL UNIQUE,
            telefone varchar(20) NOT NULL,
            data_de_nascimento DATE NOT NULL,
            genero VARCHAR(10) NOT NULL,
            endereco VARCHAR(255) NOT NULL,
            cidade VARCHAR(255) NOT NULL,
            estado VARCHAR(255) NOT NULL,
            pais VARCHAR(255) NOT NULL,
            senha VARCHAR(255) NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ,
            updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
        $conn->query($sql);

        $conn->close();
        $_SESSION['banco'] = true;
        $_SESSION['msgBanco'] = 'Banco criado com sucesso!';
    }
    
    header("Location: /agencia_de_viagem_interestelar/resources/views/home2-0.php");
    
?>