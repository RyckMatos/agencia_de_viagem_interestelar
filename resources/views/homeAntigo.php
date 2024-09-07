<?php
$titulo_site = 'Home Page';
$link_css = 'home.css';
include('layouts/header.php');
?>

<main>

    <div class="leftcolumn">
        <div class="card">
            <h2>TÍTULO</h2>
            <h5>descrição do titulo, 7 Dez 2022</h5>
            <div class="fakeimg" style="height:200px;">Imagem</div>
            <p>Algum texto..</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec facilisis erat eget fringilla rhoncus.
                Aenean scelerisque est sed orci cursus finibus. Sed tristique erat urna, cursus lobortis lacus aliquam
                at. Sed aliquet magna vitae volutpat ullamcorper. Etiam vulputate blandit libero, in sodales nunc
                condimentum in..</p>
        </div>
        <div class="card">
            <h2>TÍTULO</h2>
            <h5>descrição do titulo, 2 Set 2022</h5>
            <div class="fakeimg" style="height:200px;">Imagem</div>
            <p>Algum texto..</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec facilisis erat eget fringilla rhoncus.
                Aenean scelerisque est sed orci cursus finibus. Sed tristique erat urna, cursus lobortis lacus aliquam
                at. Sed aliquet magna vitae volutpat ullamcorper. Etiam vulputate blandit libero, in sodales nunc
                condimentum in..</p>
        </div>
    </div>
    <div class="rightcolumn">
        <div class="card">
            <h2>Sobre mim</h2>
            <div class="fakeimg" style="height:100px;">Imagem</div>
            <p>Algum texto sobre mim lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
        </div>
        <div class="card">
            <h3>Popular Post</h3>
            <div class="fakeimg">
                <p>Imagem</p>
            </div>
            <div class="fakeimg">
                <p>Imagem</p>
            </div>
            <div class="fakeimg">
                <p>Imagem</p>
            </div>
        </div>
        <div class="card">
            <h3>Siga-me</h3>
            <p>Algum texto..</p>
        </div>
    </div>

</main>

<?php include('layouts/footer.php'); ?>