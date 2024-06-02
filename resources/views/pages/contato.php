<main>
    <div class="background-form tritanopia-sncs">
        <h2 class="title-main">Contato 🚀</h2>
        <form>
            <div class="form-formulario">
                <h2 style="margin-left: 0;">Preencha o Formulário abaixo ⬇️ </h2>
                <div class="w100 linha-form">
                    <div class="">
                        <label for="nome">Nome completo</label>
                        <input type="text" id="nome" name="nome" placeholder="Digite seu nome">
                    </div>
                    <div class="">
                        <label for="fone">Telefone</label>
                        <input type="tel" onClick="maskPhone()" id="suporte_tel" name="telefone" minlength="14" maxlength="15" placeholder="(xx) x-xxxx-xxxx">
                    </div>
                </div>
                <div class="linha-form">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Digite seu e-mail">
                </div>
                <div class="linha-form">
                    <label for="texto">Assunto</label>
                    <input type="text" id="assunto" name="assunto" placeholder="Digite o assunto que sera abordado aqui...">
                </div>
                <div class="linha-form textarea">
                    <label for="texto">Digite a mensagem</label>
                    <textarea id="manifestacao" name="manifestacao" rows="10" cols="40" placeholder="Digite sua mensagem aqui..."></textarea>
                </div>
            </div>

            <input type="submit" id="enviar" value="Enviar" size="25" maxlength="25">
        </form>
    </div>
</main>