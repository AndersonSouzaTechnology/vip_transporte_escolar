<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Home. A VIP TRANSPORTE ESCOLARE LTDA é uma empresa baseada na cidade de Belo Horizonte/MG, 
    preparada e qualificada no mercado para a prestação de serviços de transporte escolar e fretamento de vans para deslocamento local. 
    Atua há mais de 27 anos no mercado." />
    <meta name="keywords"
        content="TRANSPORTE ESCOLAR EM BELO HORIZONTE, transporte escolar para o colégio loyola, transporte escolar para o colégio Bernoulli, transporte escolar para o colégio São Paulo, transporte colegio loyola, transporte loyola,   transporte Bernoulli, transporte colégio são paulo" />
    <link rel="shortcut icon" href="assets/img/Título (3) (1).png" type="image/png">
    <!--"favicon" icine da aba do navegador-->
    <title>Vip Transporte Escolar</title>

    <link as="style" href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap"
        onload="this.onload=null;this.rel=apos;stylesheet&apos;" rel="preload" />
    <noscript>
        <link href="link do css" rel="stylesheet">
    </noscript>
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <!--MENSAGEM ENVIO FORMULARIO-->
    <?php
    session_start();
    if (isset($_SESSION['mensagem'])) {
        echo '<div id="mensagem" style="padding: 20px; font-size: 20px; background-color: hsl(0, 0%, 100%); margin-bottom: 15px; margin-top: -3px; text-align: center;">'
            . $_SESSION['mensagem'] .
            '</div>';
        unset($_SESSION['mensagem']);
    }
    ?>

    <!--WHATSAPP-->
    <a class="whatsapp_link" href="https://web.whatsapp.com/send?phone=5531999792529" target="_blank" title="Whatsapp">
        <ion-icon name="logo-whatsapp" class="fa-whatsapp"></ion-icon>
    </a>
    <!--FIM WHATSAPP-->

    <!--HEADER-->
    <header>
        <div class="div-header">
            <a href="https://www.viptransporte.com.br/"><img src="assets/img/Título (3) (1).png" alt=" vip transporte"
                    class="logo-menu"></a>

            <nav class="nav-bar">
                <ul class="ul_menu">
                    <li><a href="https://www.viptransporte.com.br/">Início</a></li>
                    <li><a href="#empresa">Empresa</a></li>
                    <li><a href="#colegios">Colégios e Bairros</a></li>
                    <li><a href="#contato">Contato</a></li>
                </ul>
            </nav>

            <div class="menu-redes-sociais">
                <ul class="social-list">
                    <li>
                        <a href="#" aria-label="instagram da DTR" class="social-link" target="_blank">
                            <ion-icon name="logo-instagram" class="instagram-icone"></ion-icon>
                        </a>
                    </li>
                    <li>
                        <a href="#" aria-label="página home da DTR" class="social-link" target="_blank">
                            <ion-icon name="logo-facebook" class="facebook-icone"></ion-icon>
                        </a>
                    </li>
                </ul>
            </div>

            <a href="#contato" aria-label="Agendar Reunião"><button class="button-menu">Orçamento</button></a>

            <!-- MENU MOBILE -->
            <div id="btn-menu" class="btn-abrir-menu"><!--Icone do menu hambueger-->
                <ion-icon name="menu-outline"></ion-icon>
            </div>

            <div id="menu-mobile" class="menu-mobile"><!--Menu mobile-->

                <div class="btn-fechar">
                    <ion-icon name="close-outline"></ion-icon>
                </div>

                <nav class="nav-mobile">
                    <a href="https://www.viptransporte.com.br/"><img src="assets/img/Título (3) (1).png"
                            alt="logo vip transporte" class="logo-menu-mobile"></a>
                    <ul>
                        <li><a href="https://www.viptransporte.com.br/">Início</a></li>
                        <li><a href="#empresa">Empresa</a></li>
                        <li><a href="#colegios">Colégios e Bairros</a></li>
                        <li><a href="#contato">Contato</a></li>
                    </ul>

                </nav>

            </div>

            <div id="overlay-menu" class="overlay-menu"></div>
            <!-- FIM MENU MOBILE -->

        </div>
    </header>
    <!--FIM HEADER-->

    <!--HERO BANNER-->
    <div class="hero_baner">
    </div>
    <!--FIM HERO BANNER-->

    <!--QUALIDADES-->
    <div class="qualidades">
        <section class="section_diferenciais">
            <h2 class="section_title">Conheça nossos diferenciais</h2>
            <div class="qualidades_cantainer">
                <article class="article_card">
                    <div>
                        <ion-icon class="ion-icon" name="ribbon"></ion-icon>
                        <h3>Excelência no atendimento</h3>
                    </div>
                </article>
                <article class="article_card">
                    <div>
                        <img class="icone_experiencia" src="assets/img/experiencia.png" alt="">
                        <h3>28 anos de mercado</h3>
                    </div>
                </article>
                <article class="article_card">
                    <div>
                        <img class="icone_bhtrans" src="assets/img/Sem nome (Post para Instagram) (4) (1).png" alt="">
                        <h3>Somos cadastrados na BHTrans</h3>
                    </div>
                </article>
                <article class="article_card">
                    <div>
                        <img class="icone_aperto_de_mao" src="assets/img/aperto-de-mao.png" alt="">
                        <h3>Confiança e pontualidade</h3>
                    </div>
                </article>
            </div>
        </section>
    </div>
    <!--FIM QUALIDADES-->

    <!--EMPRESA-->
    <div class="empresa_fundo" id="empresa">
        <section class="container_empresa">
            <img class="imagem_empresa" src="assets/img/ANDERSON11.jpg" alt="vans escolares">
            <div class="empresa_content">
                <h2 class="empresa_title">Nossa empresa</h2>
                <p class="empresa_p">Transporte escolar é a especialidade da Vip Transporte Escolar ltda. Há mais de
                    27 anos no
                    mercado, a
                    Vip Transporte carrega uma bagagem com muita experiência, prestando um serviço de excelência aos
                    nossos clientes.
                    A nossa proposta sempre foi ser referência no transporte de passageiros, prestando nossos
                    serviços
                    com segurança,
                    pontualidade, conforto e respeito. Atuamos também no transporte para festas, casamentos, shows,
                    aeroportos,
                    transporte de funcionários, transporte escolar e eventos em geral. Solicite agora mesmo um
                    orçamento
                    e
                    teremos o maior prazer em atender a sua demanda. </p>
            </div>
        </section>
    </div>
    <!--FIM EMPRESA-->

    <!--COLÉGIO-->
    <div class="div_colegios">
        <section class="container_colegios">
            <div class="colegios_content">
                <!-- <h2 class="colégios_title">Colégios e bairros que atendemos</h2> -->
                <ul class="ul_colegios">
                    <h3 class="h3_colegios">Colégios</h3>
                    <li>Loyola</li>
                    <li>Colégio São Paulo</li>
                    <li>Colégio Savassi</li>
                    <li>Bernoulli Cidade Jardim</li>
                </ul>
                <ul class="ul_colegios" id="colegios">
                    <h3 class="h3_colegios">Bairros</h3>
                    <li>Funcionários</li>
                    <li>Serra</li>
                    <li>Sion</li>
                    <li>Mangabeiras</li>
                    <li>Anchieta</li>
                    <li>Cruzeiro</li>
                    <li>Santo Antônio</li>
                    <li>São Bento</li>
                </ul>
            </div>
            <img class="imagem_colegios" src="assets/img/Design sem nome (52)_11zon (1).jpg"
                alt="colégios loyola e bernoulli">
        </section>
    </div>
    <!--FIM COLÉGIO-->

    <!--BHTRANS-->
    <div class="div_bhtrans">
        <section class="container_bhtrans">
            <img class="imagem_bhtrans" src="assets/img/BHTRANS.png" alt="bhtrans">
            <div class="bhtrans_content">
                <h2 class="bhtrans_title">Somos credenciados na BHTRANS</h2>
                <p class="bhtrans_p">Tanto nossa van quanto o motorista, são credenciados na BHTRANS para executar o
                    serveço de transporte escolar no municipio de Belo Horizonte, os condutores de vans escolares, devem
                    ser aprovados em cursos profissionalizantes, possuir CNH na categoria "D", e não ter antecedentes
                    criminais. Os veículos devem ser aprovados em vistoria veicular a cada seis meses.</p>
            </div>
        </section>
    </div>
    <!--FIM BHTRANS-->

    <!--VAN-->
    <div class="div_van">
        <section class="container_van">
            <div class="van_content">
                <h2 class="van_title">Nosso veículo</h2>
                <p class="van_p">Nosso veículo é uma VAN Peugeot Boxer, veículo com capacidade para até 16 passageiros incluindo o motorista, van com ar condicionado. Veículo com a vistoria e a documentação conforme as exigências dos órgãos responsáveis, BHTRANS e DETRAN MG.</p>
            </div>
            <img class="imagem_van" src="assets/img/20160803_114251_11zon.jpg" alt="van escolar">
        </section>
    </div>
    <!--FIM VAN-->


    <!--MAPA-->
    <div class="div_mapa" id="contatos">
        <address class="contatos_address">
            <div class="content">
                <h2>Entre em Contato, teremos o maior prazer em te atender.</h2>
                Av. Desembargador Drumond, 72<br>
                Tel.: (31) 99979-2529<br>
                E-mail: fretavip@gmail.com
            </div>
            <div id="overlay-menu" class="overlay"></div>
        </address>
        <section class="container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3750.7708630345674!2d-43.926647723983116!3d-19.93405843843651!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa699bffcc69f89%3A0xc863f6f91a518127!2sR.%20Des.%20Drumond%20-%20Serra%2C%20Belo%20Horizonte%20-%20MG%2C%2030220-030!5e0!3m2!1spt-BR!2sbr!4v1724270779692!5m2!1spt-BR!2sbr"
                width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>

    </div>
    <!--FIM MAPA-->

    <!--FORM-->
    <div class="form_container" id="contato">
        <h2 class="form_h2">Entre em Contato</h2>
        <form action="envio.php" method="post" class="contactForm" id="contactForm">
            <div class="form-group">
                <!--<label for="name">Nome:</label> -->
                <input type="text" name="text" id="" required placeholder="Seu nome">
                <span class="error-message" id="nameError"></span>
            </div>
            <div class="form-group">
                <input type="tel" name="tel" id="" placeholder="DDD+Telefone">
                <span class="error-message" id="nameError"></span>
            </div>
            <div class="form-group">
                <!--<label for="email">E-mail:</label> -->
                <input type="email" name="email" id="" required placeholder="Seu melhor e-mail">
                <span class="error-message" id="emailError"></span>
            </div>
            <div class="form-group">
                <!--<label for="message">Mensagem:</label> -->
                <textarea id="message" name="message" rows="4" required placeholder="Deixe uma mensagem."></textarea>
                <span class="error-message" id="messageError"></span>
            </div>
            <button class="button_form" type="submit" name="enviar">Enviar</button>
        </form>
    </div>
    <!--FIM FORM-->


    <!--FOOTER-->
    <div class="div_footer">
        <footer class="footer">Desenvolvido por
            <a href="https://webaqui.com.br" target="_blank">www.webaqui.com.br</a>
            <p>Vip Transporte Escolar © 2024 Todos os Direitos Reservados</p>
        </footer>
    </div>
    <!--FIM FOOTER-->

    <!--BOTÃO RETORNO AO TOPO-->
    <a class="botao_retorno_topo" href="#" title="Retorno ao topo" id="btnTopo">
        <svg xmlns="http://www.w3.org/2000/svg" height="26px" viewBox="0 -960 960 960" width="44px" fill="currentColor">
            <path d="M440-160v-487L216-423l-56-57 320-320 320 320-56 57-224-224v487h-80Z" />
        </svg>
    </a>
    <!--FIM BOTÃO RETORNO AO TOPO-->

    <!--POLÍTICA DE PRIVACIDADE-->
    <div id="lgpd-popup" class="popup-lgpd">
        <div class="popup-content">
            <h2 class="lgpd">Política de Privacidade</h2>
            <p>Utilizamos cookies para melhorar sua experiência em nosso site. Ao continuar navegando, você concorda com
                nossa <a href="https://www.viptransporte.com.br/politica_privacidade">Política de Privacidade</a>.</p>
            <button id="accept-btn" class="accept-btn">Aceitar</button>
            <button id="decline-btn" class="decline-btn">Recusar</button>
        </div>
    </div>
    <!--FIM POLÍTICA DE PRIVACIDADE-->

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="deletemesage.js"></script>

</body>

</html>