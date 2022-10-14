<?php
    date_default_timezone_set('America/Sao_Paulo');
    session_start();
    define('HOST', 'localhost');
    define('DATABASE', 'agencia_de_viagem');
    define('USER', 'root');
    define('PASSWORD', '');

    $autoload = function($class){
        if($class == 'Email'){
			include('phpmailer/PHPMailerAutoload.php');
		}
        include($class.'.php');
    };

    spl_autoload_register($autoload);

    $sql = new \MySql;
    $sql->criarBanco();
    $app = new \Routes\web;
    $app->executar();
?>