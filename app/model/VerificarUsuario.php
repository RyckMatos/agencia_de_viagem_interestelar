<?php
    namespace App\Model;
    session_start();
    date_default_timezone_set('America/Sao_Paulo');
    class VerificarUsuario {
        public static function verificaEmail($email) {
            $pdo = new PDO('mysql:host=localhost;dbname=agencia_de_viagem', 'root', '');
            $queryVerifica = $pdo->prepare("SELECT email FROM users WHERE email=?");
    
            $queryVerifica->execute(array($email));
            $registro = $queryVerifica->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>