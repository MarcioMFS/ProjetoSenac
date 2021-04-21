
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

<body>
    <!--Topo -->
    <?php require_once("content/topo.php") ?>

    <!--Banner -->
    <?php require_once("content/banner.php") ?>


    <section id="sobre" class="sobre wow animate__animated animate__fadeInUp">

        <div>
            <h2>Sobre</h2>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan
                lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua.
            </p>
        </div>
    </section>

    <?php require_once("content/projetos.php") ?>


    <!-- serviços -->
    <?php require_once("content/servicos.php") ?>


    <section id="equipe" class="equipe wow animate__animated animate__fadeIn">
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

    <!-- Contato -->
    <?php require_once("content/contato.php") ?>

    <!-- rodapé -->
    <?php require_once("content/rodape.php") ?>

    

    <script src="js/animations.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
        </script>
    <script src="js/jquery-1.11.0.min.js"></script>

</body>

</html>