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
    <link rel="stylesheet" href="<?php echo SITE_CSS.'colorBlindness.css' ?>"><!-- CSS para simular daltonismo -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700;800;900&family=Roboto:wght@100;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="https://data.whicdn.com/images/194006120/original.png" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script>
        function f() {
            document.getElementsByClassName('dropdown')[0].classList.toggle('down');
            document.getElementsByClassName('arrow')[0].classList.toggle('gone');
            if (document.getElementsByClassName('dropdown')[0].classList.contains('down')) {
                setTimeout(function() {
                    document.getElementsByClassName('dropdown')[0].style.overflow = 'visible'
                }, 500)
                document.getElementsByClassName('dropdown')[0].style.marginTop = '24px';
            } else {
                document.getElementsByClassName('dropdown')[0].style.overflow = 'hidden'
                document.getElementsByClassName('dropdown')[0].style.marginTop = '0px';
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
                    <p>Description my website.</p>
                </div>
            </a>
            <div class="topnav">
                <a href="#" class="link-nav">Passagens</a>
                <a href="#" class="link-nav">Hospedagens</a>
                <a href="#" class="link-nav">Pacotes</a>
                <?php if(!isset($user)) echo '<a class="link-login" href="'.SITE.'/login" style="float:right;">Login</a>' ?>
                <?php if(isset($user) && $user != null) echo 
                    '<div class="menu">
                        <div class="title" onclick="f()"><p>'.$nome = $user['nome'].'</p> <img class="perfil-login" src="https://th.bing.com/th/id/R.36e933016f63d1d161332e11778ab681?rik=eUa13KLBzzhmEA&amp;pid=ImgRaw&amp;r=0" alt="desconectar"> <span class="fa fa-bars"></span>
                            <div class="arrow"></div>
                        </div>
                        <div class="dropdown">
                            <a href="'.SITE.'/painel">
                                <p>Painel
                                    <span class="fa fa-inbox"></span>
                                </p>
                            </a>
                            <a href="">
                                <p>Configuração
                                    <span class="fa fa-gear"></span>
                                </p>
                            </a>
                            <a href="'.SITE.'/user/logout">
                                <p>Sign Out 
                                    <span class="fa fa-sign-out"></span>
                                </p>
                            </a>
                        </div>
                    </div>'
                ?>
            </div>
        </div>
    </header>