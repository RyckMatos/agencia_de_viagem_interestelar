<?php

?>

<main>
    <div class="main-container">
        <div class="container-title">
            <h1>ESPAÇO</h1>
            <hr>
        </div>
        <div class="card">
            <div class="fakeimg"><img id="home1" src="<?php echo SITE_IMG ?>/deuteranopia/home1_deuteranotopia.jpg"
                    alt="imagem-da-galaxia">
                <script>

                    document.addEventListener("DOMContentLoaded", function () {
                        var selectElement = document.getElementById("daltonismo");
                        if (selectElement) {
                            selectElement.addEventListener("change", function () {
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
                        var imagem = document.getElementById("home1");
                        var srcBase = "<?php echo SITE_IMG ?>";
                        if (opcao === "protanopia") {
                            imagem.src = srcBase + "/protanopia/home1_protanopia.jpg";
                        } else if (opcao === "deuteranopia") {
                            imagem.src = srcBase + "/deuteranopia/home1_deuteranopia.jpg";
                        } else if (opcao === "tritanopia") {
                            imagem.src = srcBase + "/tritanopia/home1_tritanopia.png";
                        } else {
                            imagem.src = srcBase + "/normal/home1_normal.jpg";
                        }
                    }
                </script>
            </div>
            <h2>Galáxia</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec facilisis erat eget fringilla rhoncus.
                Aenean scelerisque est sed orci cursus finibus. Sed tristique erat urna, cursus lobortis lacus aliquam
                at. Sed aliquet magna vitae volutpat ullamcorper. Etiam vulputate blandit libero, in sodales nunc
                condimentum in..</p>
            <a href="#" class="button-learn-more">SAIBA MAIS</a>
        </div>
        <div class="card">
            <div class="fakeimg"><img id="home2" src="<?php echo SITE_IMG ?>/normal/home2_normal.jpeg"
                    alt="imagem-via-láctea">
                <script>

                    document.addEventListener("DOMContentLoaded", function () {
                        var selectElement = document.getElementById("daltonismo");
                        if (selectElement) {
                            selectElement.addEventListener("change", function () {
                                var selectedOption = this.value;
                                localStorage.setItem("opcaoDaltonismo", selectedOption);
                                alterarImagemVia(selectedOption);
                            });

                            var selectedOption = localStorage.getItem("opcaoDaltonismo");
                            if (selectedOption) {
                                selectElement.value = selectedOption;
                                alterarImagemVia(selectedOption);
                            }
                        } else {
                            console.error("Elemento com ID 'daltonismo' não encontrado.");
                        }
                    });

                    function alterarImagemVia(opcao) {
                        var imagem = document.getElementById("home2");
                        var srcBase = "<?php echo SITE_IMG ?>";
                        if (opcao === "protanopia") {
                            imagem.src = srcBase + "/protanopia/home2_protanopia.jpg";
                        } else if (opcao === "deuteranopia") {
                            imagem.src = srcBase + "/deuteranopia/home2_deuteranopia.jpg";
                        } else if (opcao === "tritanopia") {
                            imagem.src = srcBase + "/tritanopia/home2_tritanopia.png";
                        } else {
                            imagem.src = srcBase + "/normal/home2_normal.jpeg";
                        }
                    }
                </script>
            </div>
            <h2>Via Láctea</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec facilisis erat eget fringilla rhoncus.
                Aenean scelerisque est sed orci cursus finibus. Sed tristique erat urna, cursus lobortis lacus aliquam
                at. Sed aliquet magna vitae volutpat ullamcorper. Etiam vulputate blandit libero, in sodales nunc
                condimentum in..</p>
            <a href="#" class="button-learn-more">SAIBA MAIS</a>
        </div>
        <div id='spaceAstronaut' class="elementor-background-saiba-mais-overlay-normal">
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    var selectElement = document.getElementById("daltonismo");
                    if (selectElement) {
                        selectElement.addEventListener("change", function () {
                            var selectedOption = this.value;
                            localStorage.setItem("opcaoDaltonismo", selectedOption);
                            alterarImagemSpaceAstronaut(selectedOption);
                        });

                        var selectedOption = localStorage.getItem("opcaoDaltonismo");
                        if (selectedOption) {
                            selectElement.value = selectedOption;
                            alterarImagemSpaceAstronaut(selectedOption);
                        }
                    } else {
                        console.error("Elemento com ID 'daltonismo' não encontrado.");
                    }
                });

                function alterarImagemSpaceAstronaut(opcao) {
                    var imagem = document.getElementById('spaceAstronaut');

                    if (opcao === "protanopia") {
                        imagem.className = "elementor-background-saiba-mais-overlay-protanopia";
                    } else if (opcao === "deuteranopia") {
                        imagem.className = "elementor-background-saiba-mais-overlay-deuteranopia";
                    } else if (opcao === "tritanopia") {
                        imagem.className = "elementor-background-saiba-mais-overlay-tritanopia";
                    } else {
                        imagem.className = "elementor-background-saiba-mais-overlay-normal";
                    }
                }
            </script>

            <div class="container-saiba-mais">
                <div class="card-saiba-mais">
                    <h1>CONHEÇA O ESPAÇO</h1>
                    <hr>
                    <p>A agencia de viagem interestelar é especialista no assunto</p>
                    <a href="<?php echo SITE . '/curiosidade' ?>" class="button-learn-more">SAIBA MAIS</a>
                </div>
                <div class="card-saiba-mais"></div>
            </div>
        </div>
        <div style="width: 100%; height: 100%;">
            <div class="card-pagamento">
                <div class="content-card-pagamento">
                    <h2>EM ATÉ 12X</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec facilisis erat eget fringilla
                        rhoncus. Aenean scelerisque est sed orci cursus finibus.</p>
                    <a href="#" class="button-learn-more">SAIBA MAIS</a>
                </div>
                <div class="card-double-img">
                    <img id="home3" src="<?php echo SITE_IMG ?>/normal/home3_normal.jpg" alt="imagem-da-base-espacial">
                    <script>

                        document.addEventListener("DOMContentLoaded", function () {
                            var selectElement = document.getElementById("daltonismo");
                            if (selectElement) {
                                selectElement.addEventListener("change", function () {
                                    var selectedOption = this.value;
                                    localStorage.setItem("opcaoDaltonismo", selectedOption);
                                    alterarImagemBase(selectedOption);
                                });

                                var selectedOption = localStorage.getItem("opcaoDaltonismo");
                                if (selectedOption) {
                                    selectElement.value = selectedOption;
                                    alterarImagemBase(selectedOption);
                                }
                            } else {
                                console.error("Elemento com ID 'daltonismo' não encontrado.");
                            }
                        });

                        function alterarImagemBase(opcao) {
                            var imagem = document.getElementById("home3");
                            var srcBase = "<?php echo SITE_IMG ?>";
                            if (opcao === "protanopia") {
                                imagem.src = srcBase + "/protanopia/home3_protanopia.jpg";
                            } else if (opcao === "deuteranopia") {
                                imagem.src = srcBase + "/deuteranopia/home3_deuteranopia.jpg";
                            } else if (opcao === "tritanopia") {
                                imagem.src = srcBase + "/tritanopia/home3_tritanopia.png";
                            } else {
                                imagem.src = srcBase + "/normal/home3_normal.jpg";
                            }
                        }
                    </script>

                    <img id="home4" src="<?php echo SITE_IMG ?>/normal/home4_normal.jpg"
                        alt="imagem-da-base-espacial-visa-de-cima">
                    <script>

                        document.addEventListener("DOMContentLoaded", function () {
                            var selectElement = document.getElementById("daltonismo");
                            if (selectElement) {
                                selectElement.addEventListener("change", function () {
                                    var selectedOption = this.value;
                                    localStorage.setItem("opcaoDaltonismo", selectedOption);
                                    alterarImagemBaseUp(selectedOption);
                                });

                                var selectedOption = localStorage.getItem("opcaoDaltonismo");
                                if (selectedOption) {
                                    selectElement.value = selectedOption;
                                    alterarImagemBaseUp(selectedOption);
                                }
                            } else {
                                console.error("Elemento com ID 'daltonismo' não encontrado.");
                            }
                        });

                        function alterarImagemBaseUp(opcao) {
                            var imagem = document.getElementById("home4");
                            var srcBase = "<?php echo SITE_IMG ?>";
                            if (opcao === "protanopia") {
                                imagem.src = srcBase + "/protanopia/home4_protanopia.jpg";
                            } else if (opcao === "deuteranopia") {
                                imagem.src = srcBase + "/deuteranopia/home4_deuteranopia.jpg";
                            } else if (opcao === "tritanopia") {
                                imagem.src = srcBase + "/tritanopia/home4_tritanopia.png";
                            } else {
                                imagem.src = srcBase + "/normal/home4_normal.jpg";
                            }
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
</main>