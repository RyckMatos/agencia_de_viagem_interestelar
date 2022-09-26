<?php 
    $titulo_site = 'Home Page';
    $link_css_base = 'style2-0.css';
    $link_css = 'home2-0.css';
    include('layouts/headerhome2-0.php');
?>

<main> 
    <div class="main-container">
        <div class="container-title">
            <h1>ESPAÇO</h1>
            <hr>
        </div>
        <div class="card">
            <div class="fakeimg"><img src="https://images2.alphacoders.com/549/thumb-1920-549920.jpg" alt="imagem-da-galaxia"></div>
            <h2>Galáxia</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec facilisis erat eget fringilla rhoncus. Aenean scelerisque est sed orci cursus finibus. Sed tristique erat urna, cursus lobortis lacus aliquam at. Sed aliquet magna vitae volutpat ullamcorper. Etiam vulputate blandit libero, in sodales nunc condimentum in..</p>
            <a href="#" class="button-learn-more">SAIBA MAIS</a>
        </div>
        <div class="card">
            <div class="fakeimg"><img src="https://th.bing.com/th/id/R.04658acef998484691ca09e340b8db45?rik=kRzvQ6dm92Ot%2bQ&riu=http%3a%2f%2fnoticiasncc.com%2fwp-content%2fuploads%2f2018%2f07%2fvia-lactea.jpg&ehk=ZQTP5s9Opr4P0fpRUKiLF5%2fPot47c48lKA%2bZ9gAp0VA%3d&risl=&pid=ImgRaw&r=0" alt="imagem-via-láctea"></div>
            <h2>Via Láctea</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec facilisis erat eget fringilla rhoncus. Aenean scelerisque est sed orci cursus finibus. Sed tristique erat urna, cursus lobortis lacus aliquam at. Sed aliquet magna vitae volutpat ullamcorper. Etiam vulputate blandit libero, in sodales nunc condimentum in..</p>
            <a href="#" class="button-learn-more">SAIBA MAIS</a>
        </div>
        <div class="elementor-background-saiba-mais-overlay">
            <div class="container-saiba-mais">
                <div class="card-saiba-mais">
                    <h1>CONHEÇA O ESPAÇO</h1>
                    <hr>
                    <p>A agencia de viagem interestelar é especialista no assunto</p>
                    <a href="#" class="button-learn-more">SAIBA MAIS</a>
                </div>
                <div class="card-saiba-mais"></div>
            </div>
        </div>
        <div style="width: 100%; height: 100%;">
            <div class="card-pagamento">
                <div class="content-card-pagamento">
                    <h2>EM ATÉ 12X</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec facilisis erat eget fringilla rhoncus. Aenean scelerisque est sed orci cursus finibus.</p>
                    <a href="#" class="button-learn-more">SAIBA MAIS</a>
                </div>
                <div class="card-double-img">
                    <img src="https://brasiltravelnews.com.br/wp-content/uploads/2021/06/image-7.jpg" alt="imagem-da-base-espacial">
                    <img src="https://techbreak.ig.com.br/wp-content/uploads/2021/06/CapsuleFloridaAbove_110521-e1624478218269.jpg" alt="imagem-da-base-espacial-visa-de-cima">
                </div>
                <div class="card-single-img">
                    <img src="https://th.bing.com/th/id/OIP.PdJzFrCJ_kCqBWPKgkgpUgHaNB?pid=ImgDet&rs=1" alt="imagem-do-ponto-turístico">
                </div>
            </div>
        </div>
    </div>
</main>

<?php include('layouts/footer.php'); ?>