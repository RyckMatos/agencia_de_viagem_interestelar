<?php
    $conn = mysqli_connect(HOST, USER, PASSWORD, DATABASE) or die("Falha na conexão");
    $table = 'users';
    $result = mysqli_query($conn, "SHOW TABLES LIKE '$table'");
    $tableExists = $result && $result->num_rows > 0;

    if ($tableExists) {

    } else {
        $sql = "CREATE TABLE users (
            id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            `status` INT NOT NULL COMMENT '0 = desativado, 1 = ativado, 2 = admin',
            token VARCHAR(255) NOT NULL UNIQUE,
            nome VARCHAR(255) NOT NULL,
            sobrenome VARCHAR(255) NOT NULL,
            email VARCHAR(255) NOT NULL UNIQUE,
            telefone VARCHAR(20) NOT NULL,
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
    }
    
?>