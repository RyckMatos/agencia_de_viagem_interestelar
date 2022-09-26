<?php
    date_default_timezone_set('America/Sao_Paulo');
    $pdo = new PDO('mysql:host=localhost;dbname=agencia_de_viagem', 'root', '');

    if(isset($_POST['registro'])) {
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $updated_at = data('Y-m-d H:i:s');
    
        $sql = $pdo->prepare("UPDATE `users` SET nome=?, senha=?, email=?, updated_at=? WHERE id=?");
    
        if($sql->execute(array($nome, $senha, $email, $updated_at, $id))) {
            return $msg = 'Atualizado com sucesso!';
        }
    }
?>