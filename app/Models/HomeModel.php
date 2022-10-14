<?php
    namespace App\Models;

    class HomeModel
    {
        public static function verificaEmail($token) {
            $mysqli = \MySql::conectar()->prepare("SELECT * FROM users WHERE token=?");

            $mysqli->execute(array($token));
            return $mysqli->fetch();
        }
    }
?>