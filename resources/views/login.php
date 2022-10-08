<?php 
    $titulo_site = 'Login Page';
    $link_css_base = 'styleLogin.css';
    $link_css = 'login.css';
    include('layouts/headerhome2-0.php');

    if(isset($_SESSION['tentativa']) && $_SESSION['tentativa'] > 3) {
        if (!isset($_SESSION['time']))
            $_SESSION['time'] = time();
        if (isset($_SESSION['time']) && (time() - $_SESSION['time'] > 300)) {
            session_unset(); 
            session_destroy(); 

            $_SESSION['time'] = time();
        }
    }
    
?>
    
<main>
    <div class="main-container" id="container">
        <div class="mask-foguete">
            <svg style="height: 90%;" class="z-0 mt-10 ml-5 absolute text-brand-lilac-dark transform" viewBox="0 0 988 889" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M806.516 604.504C752.826 692.71 772.739 835.735 678.657 878.33C585.278 920.608 489.905 819.981 391.102 792.582C295.116 765.964 182.163 787.548 108.701 720.274C31.8361 649.885 0.17496 539.255 0.692414 435.063C1.18988 334.908 50.7124 243.33 111.465 163.719C168.01 89.6196 239.209 17.3823 331.164 2.00143C417.189 -12.3878 486.145 71.3159 572.012 86.6841C669.564 104.144 780.311 40.6387 861.846 96.9808C946.955 155.793 997.486 270.141 986.278 372.948C975.421 472.531 858.596 518.943 806.516 604.504Z" fill="currentColor"></path>
                <img src="/agencia_de_viagem_interestelar/resources/img/foguete.png" alt="">
            </svg>
        </div>
        <!-- <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>HTML CSS Login Form</h1>
                    <p>Este formulário de login é criado usando HTML puro e CSS. Para ícones sociais, o FontAwesome é usado.</p>
                </div>
            </div>
        </div> -->
        <div class="form-container log-in-container">
            <form action="/agencia_de_viagem_interestelar/app/model/VerificarUsuario.php" method="POST" class="form login">
                <h1>Login</h1>
                <?php if(isset($_SESSION['msg_login'])) echo '<p style="width: 100%; text-align: center; font-weight: 500; background-color: #ff0000d9; padding: 10px;">'.$_SESSION['msg_login'].' </p>' ?>
                <div class="form-field">
                    <label for="login__email"><span class="material-symbols-outlined">person</span></label>
                    <input id="login__email" type="email" name="email" class="form-input" placeholder="Email" value="<?php if(isset($_SESSION['email'])) echo $_SESSION['email'] ?>" required>
                </div>
                <div class="form-field">
                    <label for="login__password"><span class="material-symbols-outlined">lock</span></label>
                    <input id="login__password" type="password" minlength="3" name="senha" class="form-input" placeholder="Senha" <?php if(isset($_SESSION['tentativa']) && $_SESSION['tentativa'] > 3) echo 'disabled' ?> required>
                </div>
                <p><a href="#">Esqueceu a senha?</a></p>
                <input type="submit" name="logar" value="Entrar">
                <span>Não é membro? <a href="/agencia_de_viagem_interestelar/resources/views/cadastro.php">Inscreva-se agora</a></span>
            </form>
        </div>
    </div>
</main>

<?php include('layouts/footer.php'); ?>