<?php 

?>
    
<main>
    <div class="main-container" id="container">
        <div class="mask-foguete">
            <svg style="height: 90%;" class="z-0 mt-10 ml-5 absolute text-brand-lilac-dark transform" viewBox="0 0 988 889" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M806.516 604.504C752.826 692.71 772.739 835.735 678.657 878.33C585.278 920.608 489.905 819.981 391.102 792.582C295.116 765.964 182.163 787.548 108.701 720.274C31.8361 649.885 0.17496 539.255 0.692414 435.063C1.18988 334.908 50.7124 243.33 111.465 163.719C168.01 89.6196 239.209 17.3823 331.164 2.00143C417.189 -12.3878 486.145 71.3159 572.012 86.6841C669.564 104.144 780.311 40.6387 861.846 96.9808C946.955 155.793 997.486 270.141 986.278 372.948C975.421 472.531 858.596 518.943 806.516 604.504Z" fill="currentColor"></path>
                <img src="<?php echo SITE_IMG.'/foguete.png'; ?>" alt="" />
            </svg>
        </div>
        <div class="form-container cadastro-container">
            <form action="<?php echo SITE.'/cadastrar/usuario' ?>" method="POST" class="form cadastro">
                <h1 class="w-100">Cadastro</h1>
                <?php if(isset($arr['msg_cadastro'])) echo '<p style="width: 100%; text-align: center; font-weight: 500; background-color: #ff0000d9; padding: 10px;">'.$arr['msg_cadastro'].' </p>' ?>
                <div class="form-field w-50">
                    <label for="cadastro__nome">Nome</label>
                    <input id="cadastro__nome" type="text" name="nome" class="form-input" placeholder="Nome" value="<?php if(isset($arr['registro']['nome'])) echo $arr['registro']['nome'] ?>" required>
                </div>
                <div class="form-field w-50">
                    <label for="cadastro__sobrenome">Sobrenome</label>
                    <input id="cadastro__sobrenome" type="text" name="sobrenome" class="form-input" placeholder="Sobrenome" value="<?php if(isset($arr['registro']['sobrenome'])) echo $arr['registro']['sobrenome'] ?>" required>
                </div>
                <div class="form-field w-33">
                    <label for="cadastro__nascimento">Data de Nascimento</label>
                    <input id="cadastro__nascimento" type="date" name="nascimento" class="form-input" placeholder="Data de Nascimento" value="<?php if(isset($arr['registro']['nascimento'])) echo $arr['registro']['nascimento'] ?>" required>
                </div>
                <div class="form-field w-33">
                    <label for="cadastro__tell">Telefone</label>
                    <input id="cadastro__tell" onClick="maskPhone()" type="tel" minlength="14" maxlength="15" name="telefone" class="form-input" placeholder="Telefone" value="<?php if(isset($arr['registro']['telefone'])) echo $arr['registro']['telefone'] ?>" required>
                </div>
                <div class="form-field w-33" style="height: 61px;">
                    <label style="padding: 0;">Gênero</label>
                    <div style="display: flex; margin-top: 6px;">
                        <input style="margin-left: -10px;" id="cadastro__genero" type="radio" name="genero" class="form-input" value="masculino" <?php if(isset($arr['registro']['genero'])) if($arr['registro']['genero'] == 'masculino') echo 'checked' ?> required>
                        <label style="padding: 0; margin-right: 10px;" for="cadastro__genero">Masculino</label>
                        <input id="cadastro__genero" type="radio" name="genero" class="form-input" value="feminino" <?php if(isset($arr['registro']['genero'])) if($arr['registro']['genero'] == 'feminino') echo 'checked' ?> required>
                        <label style="padding: 0;" for="cadastro__genero">Feminino</label>
                    </div>
                </div>
                <div class="form-field w-100">
                    <label for="cadastro__email">Email</label>
                    <input id="cadastro__email" type="email" name="email" class="form-input" placeholder="Email" value="<?php if(isset($arr['registro']['email'])) echo $arr['registro']['email'] ?>" required>
                </div>
                <div class="form-field w-100">
                    <label for="cadastro__endereco">Endereco</label>
                    <input id="cadastro__endereco" type="text" name="endereco" class="form-input" placeholder="Endereço" value="<?php if(isset($arr['registro']['endereco'])) echo $arr['registro']['endereco'] ?>" required>
                </div>
                <div class="form-field w-33">
                    <label for="cadastro__cidade">Cidade</label>
                    <input id="cadastro__cidade" type="text" name="cidade" class="form-input" placeholder="Cidade" value="<?php if(isset($arr['registro']['cidade'])) echo $arr['registro']['cidade'] ?>" required>
                </div>
                <div class="form-field w-33">
                    <label for="cadastro__estado">Estado</label>
                    <input id="cadastro__estado" type="text" name="estado" class="form-input" placeholder="Estado" value="<?php if(isset($arr['registro']['estado'])) echo $arr['registro']['estado'] ?>" required>
                </div>
                <div class="form-field w-33">
                    <label for="cadastro__pais">Pais</label>
                    <input id="cadastro__pais" type="text" name="pais" class="form-input" placeholder="Pais" value="<?php if(isset($arr['registro']['pais'])) echo $arr['registro']['pais'] ?>" required>
                </div>
                <div class="form-field w-50">
                    <label for="cadastro__password">Senha</label>
                    <input id="cadastro__password" type="password" minlength="3" name="senha" class="form-input" placeholder="Senha" required>
                </div>
                <div class="form-field w-50">
                    <label for="cadastro__password">Confirme a Senha</label>
                    <input id="cadastro__password" type="password" minlength="3" name="senha-confirma" class="form-input" placeholder="Senha" required>
                </div>
                <input type="submit" name="registrar" value="Cadastrar">
                <span class="w-100">Já é membro? <a href="<?php echo SITE.'/login' ?>">Logar agora</a></span>
            </form>
        </div>
    </div>
</main>
