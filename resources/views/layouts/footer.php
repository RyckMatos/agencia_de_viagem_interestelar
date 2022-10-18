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
                    <a href="<?php echo SITE.'/suporte' ?>"><p>Contato</p></a>
                </div>
            </div>
            <div class="footer-content-contato">
                <h2>Contato-nos</h2>
                <hr>
                <div class="content-group-contato">
                    <p>📞Contato: (11) 4707-7090,</p> 
                    <p>📧email: agenciaespacial@hotmail.com.br</p>
                    <p>🗣️Av. da Liberdade, 899 - Liberdade, São Paulo - SP - CEP:01503-001</p>
                </div>
            </div>
        </div>
        <div class="copyright">
            <hr>
            <p>© Copyright 2022. Todos os direitos reservados.</p>
        </div>
    </footer>
    
    <script src="//unpkg.com/vanilla-masker@1.1.1/build/vanilla-masker.min.js"></script>
    <script>
        function inputHandler(masks, max, event) {
            var c = event.target;
            var v = c.value.replace(/\D/g, '');
            var m = c.value.length > max ? 1 : 0;
            VMasker(c).unMask();
            VMasker(c).maskPattern(masks[m]);
            c.value = VMasker.toPattern(v, masks[m]);
        }
        var telMask = ['(99) 9999-9999','(99) 99999-9999'];

		function maskPhone() {
			let inputPhone = document.getElementById('cadastro__tell');
			console.log(inputPhone);
			if(inputPhone.value.length == 14) {
				VMasker(inputPhone).maskPattern(telMask[0]);
			}else if(inputPhone.value.length == 15) {
				VMasker(inputPhone).maskPattern(telMask[1]);
			}
			inputPhone.addEventListener('input', inputHandler.bind(undefined, telMask, 14), false);
			inputPhone.addEventListener('change', inputHandler.bind(undefined, telMask, 14), false);
		}

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