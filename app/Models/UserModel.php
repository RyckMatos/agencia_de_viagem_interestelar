<?php
    namespace App\Models;

    class UserModel
    {
        public static function verificaEmail($email) {
            $mysqli = \MySql::conectar()->prepare("SELECT * FROM users WHERE email=?");

            $mysqli->execute(array($email));
            return $mysqli->fetchAll();
        }
    }
?>