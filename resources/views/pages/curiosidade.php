<main>
    <article>
        <h2>Curiosidades sobre o espaço 🚀🪐</h2>
        <section>
            <h3>Há mais estrelas no universo do que grãos de areia em todas as praias da Terra</h3>
            <p>
                Não se sabe o número exato de nenhuma dessas duas coisas, 
                mas astrônomos fazem o seguinte cálculo: nossa galáxia, 
                a Via Láctea, tem entre 200 a 400 bilhões de estrelas.
            </p>

            <p>
                Já o número de galáxias existentes pode chegar a bilhões. 
                Assim, a quantidade de estrelas que pode existir é quase infinita!
            </p>

            <p>
                Então, que tal sair com seu pequeno em um dia, à noite, 
                e tentar contá-las? Essa é uma experiência que pode ser muito educativa e 
                encantadora. A partir desse momento de observação, você também pode tentar,
                com a sua criança, identificar algumas constelações. Essa é uma experiência 
                muito divertida que, além de tudo, pode ampliar o conhecimento da família 
                toda sobre o espaço.
            </p>

            <p>
                Outra coisa incrível que pode acontecer nessa observação é identificar 
                a Estação Internacional Espacial sobrevoando a Terra. É uma experiência 
                impressionante, que pode levá-los a uma grande incursão pelos conhecimentos 
                do Universo!
            </p>
        </section>
        <section>
            <h3>O maior vulcão do Sistema Solar fica em Marte</h3>
            <p>
                Marte pode ser um dos menores planetas do nosso Sistema Solar, 
                mas possui um vulcão de impressionantes <i>21 km de altura</i>. 
                Chamado <i>Monte Olimpo</i>, esse vulcão por muito pouco não é também 
                a maior montanha do Sistema Solar. Esse recorde é de 22 km e 
                pertence à montanha central da cratera Rheasilvia, no asteróide Vesta.
            </p>

            <p>
                O Monte Olimpo pode ser visto por meio de telescópios e 
                é uma experiência formidável para seu pequeno ou pequena, 
                caso você disponha desse equipamento em sua casa.
            </p>
            
            <p>
                Caso não disponha, que vocês navegarem juntos na Internet, 
                buscando por imagens dessa grande preciosidade do nosso sistema solar?
            </p>
        </section>
        <section>
            <h3>Não dá para pisar em Júpiter, Saturno, Urano e Netuno</h3>
            <p>
                <i>Esses quatro planetas são gasosos</i>, ou seja, não possuem uma 
                superfície sólida. Dessa maneira, nossos astronautas precisariam 
                desenvolver formas diferentes de explorar esses mundos.
            </p>

            <p>
                No entanto, é possível explorar imagens desses planetas sim! 
                No site <a href="https://apod.nasa.gov/apod/astropix.html" target="_blank">Astronomy Picture of the Day</a>, a NASA disponibiliza 
                lindas imagens do universo, planetas e constelações. Como o conteúdo 
                é totalmente gratuito e como o site dispõe de um calendário com as fotos 
                lançadas dia após dia, que tal consultar a foto que a NASA disponibilizou 
                no dia do nascimento do seu pequeno ou sua pequena?
            </p>

            <p>
                Essa é uma forma encantadora de despertar a curiosidade da criança e 
                pode até mesmo motivar uma grande e imersiva busca por mais e mais 
                conhecimento sobre o espaço...
            </p>
        </section>
        <section>
            <h3>Não existe som no espaço</h3>
            <p>
                No espaço, não existe ar. Ou seja, é um grande vácuo. Como o som 
                é composto por ondas que se espalham justamente pelo ar, elas não 
                têm como se locomover entre as estrelas e planetas.
            </p>

            <p>
                Sabe aquelas explosões espaciais nos filmes? Na verdade, as únicas 
                que estão cientificamente corretas são aquelas que não têm som algum! 
                Ainda que os filmes grandes aliados da imaginação e 
                do despertar para a curiosidade (bem como para os estudos e, sobretudo, 
                para o interesse na Ciência), vale sempre conversar com as crianças sobre 
                o que vemos nessas grandes aventuras espaciais.
            </p>

            <p>
                Assim, transformamos a incrível experiência de um filme de ação 
                intergaláctico em algo ainda mais significativo! Você e sua criança 
                terão ainda mais assuntos para conversarem entre si, ao mesmo tempo 
                em que você ensina Curiosidades relevantes a ela.
            </p>
        </section>
        <section class="right-image">
            <div>
                <h3>Uma estrada de leite no céu</h3>
                <img id="curiosidade1" src="<?php echo SITE_IMG?>/normal/curiosidade1_normal.jpg" alt="" >

                <script>

                    document.addEventListener("DOMContentLoaded", function() {
                        var selectElement = document.getElementById("daltonismo");
                        if (selectElement) {
                            selectElement.addEventListener("change", function() {
                                var selectedOption = this.value;
                                localStorage.setItem("opcaoDaltonismo", selectedOption);
                                alterarImagemSpace(selectedOption);
                            });

                            var selectedOption = localStorage.getItem("opcaoDaltonismo");
                            if (selectedOption) {
                                selectElement.value = selectedOption;
                                alterarImagemSpace(selectedOption);
                            }
                        } else {
                            console.error("Elemento com ID 'daltonismo' não encontrado.");
                        }
                    });

                    function alterarImagemSpace(opcao) {
                        var imagem = document.getElementById("curiosidade1");
                        var srcBase = "<?php echo SITE_IMG ?>";
                        if (opcao === "protanopia") {
                            imagem.src = srcBase + "/protanopia/curiosidade1_protanopia.jpg";
                        } else if (opcao === "deuteranopia") {
                            imagem.src = srcBase + "/deuteranopia/curiosidade1_deuteranopia.jpg";
                        } else if (opcao === "tritanopia") {
                            imagem.src = srcBase + "/tritanopia/curiosidade1_tritanopia.jpg";
                        } else {
                            imagem.src = srcBase + "/normal/curiosidade1_normal.jpg";
                        }
                    }
                    </script>
                <p>
                    A nossa galáxia foi batizada de Via Láctea por causa do seu
                    <b>aspecto esbranquiçado</b>. Os gregos antigos a chamaram assim porque
                    viam um <b>"caminho de leite"</b> ao observar o céu. Essa aparência leitosa
                    fica mais visível ao olho nu em noites de inverno e em locais com pouca
                    poluição luminosa.
                </p>
            </div>

            <div>
                <h3>Galáxia anciã</h3>
                <img id="curiosidade2" src="<?php echo SITE_IMG?>/normal/curiosidade2_normal.jpg" alt="" >

                <script>

                    document.addEventListener("DOMContentLoaded", function() {
                        var selectElement = document.getElementById("daltonismo");
                        if (selectElement) {
                            selectElement.addEventListener("change", function() {
                                var selectedOption = this.value;
                                localStorage.setItem("opcaoDaltonismo", selectedOption);
                                alterarImagemGalaxy(selectedOption);
                            });

                            var selectedOption = localStorage.getItem("opcaoDaltonismo");
                            if (selectedOption) {
                                selectElement.value = selectedOption;
                                alterarImagemGalaxy(selectedOption);
                            }
                        } else {
                            console.error("Elemento com ID 'daltonismo' não encontrado.");
                        }
                    });

                    function alterarImagemGalaxy(opcao) {
                        var imagem = document.getElementById("curiosidade2");
                        var srcBase = "<?php echo SITE_IMG ?>";
                        if (opcao === "protanopia") {
                            imagem.src = srcBase + "/protanopia/curiosidade2_protanopia.jpg";
                        } else if (opcao === "deuteranopia") {
                            imagem.src = srcBase + "/deuteranopia/curiosidade2_deuteranopia.jpg";
                        } else if (opcao === "tritanopia") {
                            imagem.src = srcBase + "/tritanopia/curiosidade2_tritanopia.jpg";
                        } else {
                            imagem.src = srcBase + "/normal/curiosidade2_normal.jpg";
                        }
                    }
                    </script>
                <p>
                    O universo se formou há aproximadamente 13,8 bilhões de anos.
                    Os astrônomos calculam que nossa galáxia nasceu um pouco depois e que
                    deve estar na idade de <b>13,6 bilhões de anos</b>.
                </p>
            </div>
        </section>
    </article>
</main>