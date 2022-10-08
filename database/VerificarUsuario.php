<?php
    date_default_timezone_set('America/Sao_Paulo');
    $pdo = new PDO('mysql:host=localhost;dbname=agencia_de_viagem', 'root', '');
    session_start();
    if(isset($_POST['logar'])) {
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = $pdo->prepare("SELECT * FROM users WHERE email=?");

        $sql->execute(array($email));
        $info = $sql->fetchAll();
        
        if(!isset($_SESSION['tentativa']))
            $_SESSION['tentativa'] = 1;
        if(md5($senha) == $info[0]['senha'] && $info != null && $_SESSION['tentativa'] < 3) {
            $_SESSION['user'] = $info;
            header('Location: /agencia-de-viagem-interestelar/resources/views/home2-0.php');
            die();
        } elseif($_SESSION['tentativa'] < 3) {
            $_SESSION['email'] = $email;
            $_SESSION['tentativa'] = 1 + $_SESSION['tentativa'];
            $_SESSION['msg_login'] = 'Senha ou email esta incorreto, tentativa '.($_SESSION['tentativa']-1);

            header('Location: /agencia-de-viagem-interestelar/resources/views/login.php');
            die();
        } else {
            $_SESSION['tentativa'] = 1 + $_SESSION['tentativa'];
            $_SESSION['msg_login'] = 'Errou 3 vezes, tente novamente mais tarde';

            header('Location: /agencia-de-viagem-interestelar/resources/views/login.php');
            die();
        }
    }
?>