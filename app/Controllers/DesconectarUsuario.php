<?php
    session_start();
    desconecta();
    function desconecta() {
        session_destroy();
        header('Location: /agencia_de_viagem_interestelar/resources/views/home2-0.php');
        die();
    }
?>