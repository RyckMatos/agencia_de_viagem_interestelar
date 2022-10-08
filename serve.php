<?php
    namespace Agencia;
    $autoload = function($class){
        include($class.'.php');
    };

    spl_autoload_register($autoload);

    $app = new routes\web;
    $app->executar();
?>