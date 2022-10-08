<?php
    date_default_timezone_set('America/Sao_Paulo');
    $pdo = new PDO('mysql:host=localhost;dbname=agencia_de_viagem', 'root', '');
    session_start();
    if(isset($_POST['registrar'])) {
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $nascimento = $_POST['nascimento'];
        $telefone = $_POST['telefone'];
        $genero = $_POST['genero'];
        $email = $_POST['email'];
        $endereco = $_POST['endereco'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $pais = $_POST['pais'];

        $_SESSION['nome'] = $nome;
        $_SESSION['sobrenome'] = $sobrenome;
        $_SESSION['nascimento'] = $nascimento;
        $_SESSION['telefone'] = $telefone;
        $_SESSION['genero'] = $genero;
        $_SESSION['email'] = $email;
        $_SESSION['endereco'] = $endereco;
        $_SESSION['cidade'] = $cidade;
        $_SESSION['estado'] = $estado;
        $_SESSION['pais'] = $pais;

        if($_POST['senha'] == $_POST['senha-confirma']) {
            $senha = md5($_POST['senha']);
        } else {
            $_SESSION['msg_cadastro'] = 'Senhas incompatíveis';

            header('Location: /agencia-de-viagem-interestelar/resources/views/cadastro.php');
            die();
        }
        $created_at = date('Y-m-d H:i:s');
        $updated_at = date('Y-m-d H:i:s');

        $queryVerifica = $pdo->prepare("SELECT email FROM users WHERE email=?");

        $queryVerifica->execute(array($email));
        $registro = $queryVerifica->fetchAll(PDO::FETCH_ASSOC);
        // var_dump($registro[0]['email'] == null);
        // die();
        // echo '<pre>';
        // print_r($registro)
        // echo '</pre>';
        if($registro[0]['email'] == null){
            $sql = $pdo->prepare("INSERT INTO `users` VALUES (null,?,?,?,?,?)");
                
            $sql->execute(array($nome, $senha, $email, $created_at, $updated_at));

            $querySelector = $pdo->prepare("SELECT * FROM users WHERE email=?");

            $querySelector->execute(array($email));
            $info = $querySelector->fetchAll();
            $_SESSION['user'] = $info;

            header('Location: /agencia-de-viagem-interestelar/resources/views/home2-0.php');
            die();
        } else {
            $_SESSION['msg_cadastro'] = 'Email ja cadastrado!';

            header('Location: /agencia-de-viagem-interestelar/resources/views/cadastro.php');
            die();
        }
    }
?>