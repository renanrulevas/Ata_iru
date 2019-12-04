<?php include_once("header.php"); ?>
        
    <main>
        <h1 class="text-center">FAQ</h1>
       
        <div class="container-faq">
            <div class="accordion">
                <div class="accordion-item">
                    <a>O que é Ataîru?</a>
                    <div class="content-faq">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <a>Cadê meu pedido?</a>
                    <div class="content-faq">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <a>Quais são as opções de frete?</a>
                    <div class="content-faq">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <a>Quais são as opções de pagamento?</a>
                    <div class="content-faq">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <a>Quantas vezes posso parcelar?</a>
                    <div class="content-faq">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <a>Por que o céu é azul?</a>
                    <div class="content-faq">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <a>Por que sabonete colorido faz espuma branca?</a>
                    <div class="content-faq">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <a>Será que consigo meu certificado nesse curso?</a>
                    <div class="content-faq">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>        
       
    <script>
        const items = document.querySelectorAll(".accordion a");
    
        function toggleAccordion(){
        this.classList.toggle('active');
        this.nextElementSibling.classList.toggle('active');
        }
    
        items.forEach(item => item.addEventListener('click', toggleAccordion));
    </script>
    
<?php include_once("footer.php"); ?>