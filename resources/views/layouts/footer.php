    <footer>
        <div class="elementor-background-footer-overlay"></div>
        <div class="footer-container">
            <div class="footer-content-sobre">
                <h2>Sobre nos</h2>
                <hr>
                <p class="short-text" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec facilisis erat eget fringilla rhoncus. Aenean scelerisque est sed orci cursus finibus. Sed tristique erat urna, cursus lobortis lacus aliquam at. Sed aliquet magna vitae volutpat ullamcorper. Etiam vulputate blandit libero, in sodales nunc condimentum in. Nulla volutpat tortor sit amet aliquet congue. Quisque congue porta ullamcorper. Cras lacus turpis, mollis et sodales vestibulum, porta dictum sapien. Cras imperdiet mauris est, vitae blandit lorem maximus non. Phasellus tellus massa, tristique ... <a class="read-more">ler mais</a></p>
                <p class="full-text" style="display: none" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec facilisis erat eget fringilla rhoncus. Aenean scelerisque est sed orci cursus finibus. Sed tristique erat urna, cursus lobortis lacus aliquam at. Sed aliquet magna vitae volutpat ullamcorper. Etiam vulputate blandit libero, in sodales nunc condimentum in. Nulla volutpat tortor sit amet aliquet congue. Quisque congue porta ullamcorper. Cras lacus turpis, mollis et sodales vestibulum, porta dictum sapien. Cras imperdiet mauris est, vitae blandit lorem maximus non. Phasellus tellus massa, tristique malesuada pellentesque nec, ornare a velit. Pellentesque consequat sem nec lorem pharetra, nec tincidunt eros ultrices. Phasellus eget sodales leo. Aenean luctus turpis semper rutrum tincidunt. Nullam feugiat nec risus nec pretium. Mauris porttitor libero quis ultricies pharetra. Nulla faucibus, magna sit amet commodo efficitur, felis mauris elementum tellus, sit amet pellentesque erat augue eget purus. In hendrerit, erat ornare suscipit posuere, odio enim aliquam diam, sed condimentum libero velit vel lectus. Pellentesque hendrerit sit amet nisl vitae pharetra. Sed in orci pharetra, feugiat libero et, tristique sapien. Phasellus iaculis libero eget ligula congue feugiat. Suspendisse vel tincidunt eros. Suspendisse eros enim, pulvinar vel lectus sed, tincidunt iaculis felis. Fusce ex urna, sodales eget vulputate quis, tempus non eros. Integer vel faucibus turpis. Vivamus vel tristique diam. <a class="read-less">ler menos</a></p>
                <!-- <?php foreach ($feed['posts'] as $data) { ?>
                    <div class="box-body">
                        <div class="feed-item-body mt-10 m-width-20 post-body">
                                <?php echo nl2br(mb_strimwidth($data->post['body'], 0, 1000, ' ...')); ?>
                                <button class="ler-mais">Ler mais</button>
                        </div>
            
                        <div class="feed-item-body mt-10 m-width-20 post-body-2">
                                <?php echo nl2br($data->post['body']); ?>
                                <button class="ler-menos">Ler menos</button>
                        </div>
                    </div>
                <?php } ?> -->
            </div>
            <div class="footer-content-links">
                <h2>Outros links</h2>
                <hr>
                <div class="content-group-links">
                    <a href="#"><p>Sobre</p></a>
                    <a href="#"><p>FAQ</p></a>
                    <a href="#"><p>Help</p></a>
                    <a href="#"><p>Contato</p></a>
                </div>
            </div>
            <div class="footer-content-contato">
                <h2>Contato-nos</h2>
                <hr>
            </div>
        </div>
        <div class="copyright">
            <hr>
            <p>© Copyright 2022. Todos os direitos reservados.</p>
        </div>
    </footer>
    <script>
        document.querySelectorAll('.footer-container').forEach(function (el) {
   
            var fullText = el.querySelector('.full-text');
            var shortText =  el.querySelector('.short-text');
            
            if (! shortText) return;
            
            el.querySelector('.read-more').addEventListener('click', function () {
                fullText.style.display = '';
                shortText.style.display = 'none';
            })
            
            el.querySelector('.read-less').addEventListener('click', function () {
                fullText.style.display = 'none';
                shortText.style.display = '';
            })
        })
        // //Código do botão leia mais
        // document.querySelectorAll('.ler-mais').forEach(function (el) {
        
        //     el.addEventListener('click', function () {
        //         let divBoxBody = el.closest('.box-body'); 
        //         let divPostBody = divBoxBody.querySelector('.post-body').style.display = "none";   
        //         let divPostBody2 = divBoxBody.querySelector('.post-body-2').style.display = "block"; 
        //     })   
        
        // })

        // //Código do botão leia menos
        // document.querySelectorAll('.ler-menos').forEach(function (el) {
        
        //     el.addEventListener('click', function () {
        //         let divBoxBody = el.closest('.box-body'); 
        //         let divPostBody = divBoxBody.querySelector('.post-body').style.display = "block";   
        //         let divPostBody2 = divBoxBody.querySelector('.post-body-2').style.display = "none"; 
        //     })   
        
        // })
    </script>
</body>
</html>