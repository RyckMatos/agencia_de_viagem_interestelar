<?php
    session_start();
    desconecta();
    function desconecta() {
        session_destroy();
        header('Location: /agencia-de-viagem-interestelar/resources/views/home2-0.php');
        die();
    }
?>