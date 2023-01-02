<?php
    $projects = require('projects.php');
    $pathIcons = 'media/icons/';
    $dirIcons = glob($pathIcons.'*.png');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,200&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Portfolío</title>
</head>
<body>
    <nav class="cont-nav">
        <a href="#home" class='color-font'><h1>Sabrina</h1></a>
        <section id="bars" class="sec-bars"><i class="fas fa-bars"></i></section>
        <ul id='ul-m' class="ul-menu">
            <li class="li-menu"><a href="#home">Home</a></li>
            <li class="li-menu"><a href="#sobre">Sobre Mim</a></li>
            <li class="li-menu"><a href="#skills">Skills</a></li>
            <li class="li-menu"><a href="#projetos">Projetos</a></li>
            <li class="li-menu"><a href="#contato">Contato</a></li>
            <li class="li-menu"><a href="#">Curriculo</a></li>
            <li class="li-menu"><a class='curriculo' href="media/documento/curriculo.pdf" download>Curriculo</a></li>
        </ul>
    </nav><!-- cont-nav -->
    <div class="container">
        <div id='home' class="cont-div-home">
            <section class="sec-home-text color-font">
                <h1 class="h1" class='color-font'>Seja Bem-vindo(a) ao meu Portfólio.</h1>
                <p class="p">Sou Desenvolvedora Web, e aqui você saberá um pouco sobre mim.</p>
                <section class="sec-btn-home">
                    <a href='https://github.com/sabrina663' target="_blank"><button class="btn-home"><i class="fab fa-github"></i></button></a>
                </section><!-- sec-btn -->
            </section><!-- sec-home-text -->

        </div><!-- home -->
        <div id='scroll' class="cont parent-sobre-skills div-anima">
            <div id='sobre' class="cont-div-sobre border">
                <section class="sec-title border">
                    <h3 class='color-font'>Sobre Mim</h3>
                </section><!-- sec-title -->
                <section class="sec-img">
                    <img title="Essa sou eu" class="img img-sobre" src='media/imagens/perfil.jpg'>
                </section><!-- sec-img -->
                <section class=" sec-sobre-text">
                    <p>Meu nome e Sabrina, conheci área de Programação graças a uma indicação de um curso de Lógica de programação que fiz no Via Rápida, um programa de governo do Estado de São Paulo, após concluir fui em busca de novos conhecimentos sobre área, o primeiro contato que tive com uma linguagem de programação do mercado foi PYTHON, estudei com o Curso em Video com o Professor Guanabara, após terminar o curso não me aprofundei na linguagem, mas comecei a estudar Html e Css, pegando uma base boa de ambas tecnologias, iniciei meus estudos com a linguagem de programação JavaScript e após muito estudo comecei estudar o seu Framework Jquery, depois de estudar essas tecnologias e pega uma base, iniciei o processo de estudo com o PHP, a linguagem que escolhi me especializar atualmente tenho estudado cada dia essa linguagem fazendo projetos e lendo documentação</p>
                    <br>
                    <p>Além de estudar bastante para esta atualizada no mundo de desenvolvimento web, também estou estudando <strong>Csharp</strong> e a engine <strong>Unity</strong> pra desenvolvimento de jogos.</p>
                </section><!-- sec-sobre-text -->
            </div><!-- sobre -->
            <div id='skills' class="cont-div-skills">
                    <section class="sec-title">
                        <h3 class='color-font'>Skills</h3>
                    </section>
                    <section class="parent-skills sec-skills">
                        <?php 
                            foreach ($dirIcons as $icon) {?>
                                <span class="span-skills">
                                    <img title="<?= $icon;?>" src="<?=$icon;?>" class="img img-skills">
                                </span>
                        <?php } ?>
                    </section><!-- parent-skills -->
            </div><!-- skills -->
        </div><!-- parent -->
        <div class='projects cont cont-div-pro div-anima'>
            <section class="sec-title color-font">
                <h3>Meus Projetos Pessoais</h3>
            </section><!-- sec-title -->
            <section class='sec-pro'>
                <?php foreach($projects as $project){?>
                    <div class='div-pro'>
                        <a href="<?= $project['link']; ?>" target='_blank'>
                            <img src="media/projects/<?= $project['image'];?>" class="img-pro">
                        </a>
                        <h6><?= $project['name'];?></h6>
                        <p><?= $project['description']?></p>
                    </div>
                <?php } ?>
            </section>
        </div>
        <div id='contato' class="cont cont-div-contato">
            <section class="sec-title color-font">
                <h3>Contato</h3>
            </section>
            <ul class="ul-contato">
                <li class='li-contato'><a href='https://github.com/sabrina663' target="_blank"><i class="fab fa-github"></i></a></li>
                <li class='li-contato'><a href='https://www.linkedin.com/in/sabrina-oliveira-ba80031b0' target="_blank"><i class="fab fa-linkedin"></i></a></li>
                <li class='li-contato'><a href='https://api.whatsapp.com/send?phone=5512996434704'target='_blank'><i class="fab fa-whatsapp-square"></i></a></li>
            </ul>
            <span class="span-mail">
                <a href="mailto:bina.oliver4@gmail.com">bina.oliver4@gmail.com</a>
            </span>
        </div><!--contato -->
        <div class="div-footer">
            <footer class="footer color-font">
                <p>Feito com &hearts;</p>
            </footer>
        </div><!-- div-footer -->
    </div><!-- conteiner -->
    <script src=js/script.js></script>
</body>
</html>