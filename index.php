<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="css/ajax.css">
</head>

<body class="">
    <header class="topo">
        <div class="centro">
            <img src="./img/logo.png" id="logo">
            <button class="menu-mobile" ><img src="img/menu.svg" alt="" ></button>
            <div class="menu">
                <button class="fechar-menu" ><img src="img/fechar.svg" alt="" ></button>
                <nav>
                    <ul>
                        <li><a href=".topo">Home</a></li>
                        <li><a href=".sobre">Sobre</a></li>
                        <li><a href=".servicos">Serviços</a></li>
                        <li><a href=".contato">Contato</a></li>
                    </ul>
                </nav>
                
            </div>
        </div>

    </header>

    <div>
        <div class="banner wow animate__animated animate__fadeInUp">
            <img src="./img/banner.png" alt="Banner Principal">
        </div>
    </div>

    <section class="site wow animate__animated animate__fadeInUp">
        <div class="sites">
        <h2>Sites Desenvolvidos</h2>
        <div class="projetos ">
            <div>
                <a href="">
                    <p class="projeto-hover">Projeto para empresa</p>
                    <img class="img-hover" src="./img/gmd_projects.png" alt="">
                    
                </a>
                
                <a href="">
                    <p class="projeto-hover">Projeto para empresa</p>
                    <img class="img-hover"  src="./img/gmd_projects.png" alt="">
                    
                </a>
                <a href="">
                    <p class="projeto-hover">Projeto para empresa</p>
                    <img class="img-hover" src="./img/gmd_projects.png" alt="">
                    
                </a>
            </div>

            <div>
                <a href="">
                    <p class="projeto-hover">Projeto para empresa</p>
                    <img class="img-hover" src="./img/gmd_projects.png" alt="">
                    
                </a>
                <a href="">
                    <p class="projeto-hover">Projeto para empresa</p>
                    <img class="img-hover" src="./img/gmd_projects.png" alt="">
                    
                </a>
                <a href="">
                    <p class="projeto-hover">Projeto para empresa</p>
                    <img class="img-hover" src="./img/gmd_projects.png" alt="">
                    
                </a>
            </div>
        </div>
    </div>
    </section>


    <section class="sobre wow animate__animated animate__fadeInUp">

        <div>
            <h2>Sobre</h2>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan
                lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua.
            </p>
        </div>
    </section>

    <section class="equipe wow animate__animated animate__fadeInUp">
        <h2 class="white">Equipe</h2>
        
        <div class="caixa-equipe">
            

            <div class="conteudoEquipe">
                <img src="img/equipe1.jpg" alt="">
                <h3 class="white">Nome</h3>
                <h4>Cargo</h4>
                <p class="white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et
                    dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
            </div>

            <div class="conteudoEquipe"><img src="img/equipe2.jpg" alt="">
                <h3 class="white">Nome</h3>
                <h4>Cargo</h4>
                <p class="white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et
                    dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
            </div>

            <div class="conteudoEquipe">
                <img src="img/equipe3.jpg" alt="">
                <h3 class="white">Nome</h3>
                <h4>Cargo</h4>
                <p class="white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et
                    dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
            </div>

        </div>
    </section>

    <section class="servicos wow animate__animated animate__fadeInUp">
        <h2 class="centro">Serviços</h2>
        <div class="conteudo-servicos">
            <div>
                <img src="img/services1.png" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
            </div>

            <div>
                <img src="img/services2.png" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
            </div>

            <div>
                <img src="img/services3.png" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
            </div>

            <div>
                <img src="img/services4.png" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
            </div>
        </div>

    </section>

    <section class="contato wow animate__animated animate__fadeInUp">
    <div class="formulario">
        <form class="contato-form" id="form" name="contato">
            <div>
                <label for="nome">Nome</label>
                <input type="text" name="name">
            </div>

            <div>
                <label for="email">Email</label>
                <input type="email" name="email" required>
            </div>

            <div>
                <label for="tel">Telefone</label>
                <input type="tel" name="tel">
            </div>
        </form>
        <div class="assunto">
            <label for="assunto">Assunto</label>
            <textarea form="form" name="assunto" rows="15" cols="40" required></textarea>
            <button form="form" type="submit">Enviar</button>
        </div>
    </div>
    <p>Atendimento de seg. a sex. das 8:00 as 18:00</p>
</section>

    <footer>
        <div class="img_footer wow animate__animated animate__fadeInUp">
            <img src="./img/logo.png">
            <p>GMD criação de sites</p>
        </div>
        <div class="menu_rodape">
            <div>
                <a href="#">Pagina Inicial</a>
                <a href="#">Sobre</a>
                <a href="#">Serviços</a>
                <a href="#">Contato</a>
            </div>
        </div>
        <p id="gmd">© 2021 GMD SITES</p>

        <div class="dev">
            <div>
                <h2>Site desenvolvido por</h2>

                <img src="./img/gmd.png">
            </div>

        </div>

    </footer>

    <script src="js/animations.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
        </script>
    <script src="js/jquery-1.11.0.min.js"></script>

</body>

</html>