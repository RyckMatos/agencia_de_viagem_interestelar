    <footer>
        <div class="elementor-background-footer-overlay"></div>
        <div class="footer-container">
          
           
          
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