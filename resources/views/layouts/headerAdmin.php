<?php
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo self::titulo; ?></title>
    <link rel="stylesheet" href="<?php echo SITE_CSS.$arr['link_css_base'] ?>">
    <link rel="stylesheet" href="<?php echo SITE_CSS.$arr['link_css'] ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700;800;900&family=Roboto:wght@100;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="https://data.whicdn.com/images/194006120/original.png" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script>
        function f() {
            document.getElementsByClassName('dropdown')[0].classList.toggle('down');
            document.getElementsByClassName('arrow')[0].classList.toggle('gone');
            if (document.getElementsByClassName('dropdown')[0].classList.contains('down')) {
                setTimeout(function() {
                document.getElementsByClassName('dropdown')[0].style.overflow = 'visible'
                }, 500)
            } else {
                document.getElementsByClassName('dropdown')[0].style.overflow = 'hidden'
            }
        }
    </script>
</head>
<body>
    <header>
        <div class="elementor-background-header-overlay"></div>
        <div class="container-header">
            <a href="<?php echo SITE ?>">
                <div class="titulo-site">
                    <h1>Space Agency</h1>
                    <h3 class="subtitle">Admin</h3>
                </div>
            </a>
            <div class="topnav">
                <a href="#">Clientes</a>
                <a href="#">Passagens</a>
                <a href="#">Viagens</a>
                <a href="#">Relatórios</a>
                <a href="#">Sair</a>
                
            </div>
        </div>
    </header>