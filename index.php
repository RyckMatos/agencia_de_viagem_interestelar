<?php
    date_default_timezone_set('America/Sao_Paulo');
    session_start();
    define('HOST', 'us-cdbr-east-06.cleardb.net');
    define('DATABASE', 'heroku_64ab7f2a23f5892');
    define('USER', 'ba6df35e92247f');
    define('PASSWORD', '797f5fc5');

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