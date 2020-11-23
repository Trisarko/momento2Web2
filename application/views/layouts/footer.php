<!-- footer -->
<section id="footer" class="bg-secondary">
        <div class="container">
            <div class="row mt-2">                
                <div class="col-md-12">
                    <h4 class="text-light">SEGUNDO MOMENTO</h4>
                    <p class="text-light">Privacy Policy. <br> ©2020 Alejandra Restrepo.<br>Colombia.
                    </p>
                </div>                
                
            </div>
        </div>
    </section>      
    
    
    <!-- Bootstrap JavaScript -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- Scripts Scroll y scroll suave https://stackoverflow.com/questions/7717527/smooth-scrolling-when-clicking-an-anchor-link -->
    
    <!-- Script Home -->
    <script>
        window.sr = ScrollReveal();
        sr.reveal('.navbar', {
            duration: 2000,
            origin: 'bottom'
        });       
             
        sr.reveal('#sectionone', {
            duration: 2000,
            origin: 'left',
            distance: '300px',
            viewFactor: 0.2
        });
        sr.reveal('#interest', {
            duration: 2000,
            delay:300,
            origin: 'rigth',
            distance: '300px',
            viewFactor: 0.2            
        });
        window.sr = ScrollReveal();
        sr.reveal('#footer', {
            duration: 2000,
            origin: 'bottom'
        });    
             
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
      
    </script>

    <!-- ScriptAffiliates -->
    <script>
         window.sr = ScrollReveal();
         sr.reveal('.navbar', {
             duration: 2000,
             origin: 'bottom'
         });        
         window.sr = ScrollReveal();
        sr.reveal('#footer', {
            duration: 2000,
            origin: 'bottom'
        });    
        sr.reveal('#register,#appoint', {
            duration: 2000,
            origin: 'bottom',
            distance: '300px'
        }); 
         
         document.querySelectorAll('a[href^="#"]').forEach(anchor => {
             anchor.addEventListener('click', function (e) {
                 e.preventDefault();
 
                     document.querySelector(this.getAttribute('href')).scrollIntoView({
                     behavior: 'smooth'
                 });
             });
         });
 
       
        (function() {
        'use strict';
        window.addEventListener('load', function() {
            var forms = document.getElementsByClassName('needs-validation');
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();

    </script>

    <!-- ScriptContact -->
    <script>
         window.sr = ScrollReveal();
         sr.reveal('.navbar', {
             duration: 2000,
             origin: 'bottom'
         });
         sr.reveal('.info-right', {
            duration: 2000,
            origin: 'bottom',
            distance: '300px'
        });        
        sr.reveal('.info-left', {
            duration: 2000,
            origin: 'left',
            distance: '300px',
            delay:500
        });
         window.sr = ScrollReveal();
        sr.reveal('#footer', {
            duration: 2000,
            origin: 'bottom'
        });        
                  
         document.querySelectorAll('a[href^="#"]').forEach(anchor => {
             anchor.addEventListener('click', function (e) {
                 e.preventDefault();
 
                     document.querySelector(this.getAttribute('href')).scrollIntoView({
                     behavior: 'smooth'
                 });
             });
         }); 
       
    </script>


</body>
</html>