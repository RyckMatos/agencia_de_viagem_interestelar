<main>
    <div class="background-form tritanopia-sncs">
        <h2 class="title-main">Suporte 🚀</h2>
        <form>
            <div class="form-ocorrencia">
                <h2>Tipo de ocorrência</h2>
                <div class="linha-ocorrencia"><input type="checkbox" name="ocorrencia" value="reembolso"><p>Reembolso</p></div>
                <div class="linha-ocorrencia"><input type="checkbox" name="ocorrencia" value="cancelamento"><p>Cancelamento</p></div>
                <div class="linha-ocorrencia"><input type="checkbox" name="ocorrencia" value="pagamento"><p>Pagamento</p></div>
                <div class="linha-ocorrencia"><input type="checkbox" name="ocorrencia" value="sugestao"><p>Sugestões/Melhorias</p></div>
                <div class="linha-ocorrencia"><input type="checkbox" name="ocorrencia" value="outros"><p>Outros</p></div>
            </div>

            <div class="form-formulario">
                <h2>Preencha o Formulário abaixo ⬇️ </h2>
                <div class="w100 linha-form">
                    <div class="">
                        <label for="nome">Nome</label>
                        <input type="text" id="nome" name="nome" placeholder="Digite seu nome">
                    </div>
                    <!-- <div class="linha-form">
                        <label  for="sobre">Sobrenome: </label>
                        <input type="text" id="sobre" name="sobre" size="35" maxlength="20" value="" name="" placeholder="Digite seu sobrenome ">
                    </div> -->
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
                    <label for="assunto">Assunto</label>
                    <input type="text" id="assunto" name="assunto" placeholder="Digite o assunto que sera abordado aqui...">
                </div>
                <div class="linha-form textarea">
                    <label for="mensagem">Digite a mensagem</label>
                    <textarea id="mensagem" name="mensagem" rows="10" cols="40" placeholder="Digite sua mensagem aqui..."></textarea>
                </div>
            </div>

            <input type="submit" id="enviar" value="Enviar" size="25" maxlength="25">
        </form>
    </div>
</main>