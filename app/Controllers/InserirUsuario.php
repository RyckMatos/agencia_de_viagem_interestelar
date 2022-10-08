<?php
    namespace App\Controller;
    // include('../model/VerificarUsuario.php');
    use App\Model\VerificarUsuario;
    // date_default_timezone_set('America/Sao_Paulo');
    class InserirUsuario {
        public function inserirUsuario() {
            $pdo = new PDO('mysql:host=localhost;dbname=agencia_de_viagem', 'root', '');
            // session_start();
            if(isset($_POST['registrar'])) {
                $nome = $_POST['nome'];
                $sobrenome = $_POST['sobrenome'];
                $email = $_POST['email'];
                $telefone = $_POST['telefone'];
                $nascimento = $_POST['nascimento'];
                $genero = $_POST['genero'];
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
        
                    header('Location: /agencia_de_viagem_interestelar/resources/views/cadastro.php');
                    die();
                }
                $created_at = date('Y-m-d H:i:s');
                $updated_at = date('Y-m-d H:i:s');
        
                
                $VerificarUsuario = VerificarUsuario::verificaEmail($email);
                // var_dump($VerificarUsuario);
                // die();
                // echo '<pre>';
                // print_r(verificaEmail($email));
                // echo '</pre>';
                if($VerificarUsuario == null){
                    $sql = $pdo->prepare("INSERT INTO `users` VALUES (null,?,?,?,?,?,?,?,?,?,?,?,?,?)");
                        
                    $sql->execute(array($nome, $sobrenome, $email, $telefone, $nascimento, $genero, $endereco, $cidade, $estado, $pais, $senha, $created_at, $updated_at));
        
                    $querySelector = $pdo->prepare("SELECT * FROM users WHERE email=?");
        
                    $querySelector->execute(array($email));
                    $info = $querySelector->fetchAll();
                    $_SESSION['user'] = $info;
        
                    header('Location: /agencia_de_viagem_interestelar/resources/views/home2-0.php');
                    die();
                } else {
                    $_SESSION['msg_login'] = 'Email ja cadastrado!';
        
                    header('Location: /agencia_de_viagem_interestelar/resources/views/login.php');
                    die();
                }
            }
        }
    }
?>