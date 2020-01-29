<!DOCTYPE html>
<html lang="en">
<!--ligaçâo bd-->
<?php require('db.php');?>
   <head>
        <title>Pasific Multipage Template |  Blog Post Read</title>        
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta charset="utf-8">
        <meta name="author" content="Harry Boo">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        
        <!-- Favicons -->
        <link rel="shortcut icon" href="assets/img/favicon.png">
        <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="assets/img/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="assets/img/apple-touch-icon-114x114.png">
        
        <!-- Load Core CSS 
        =====================================-->
        <link rel="stylesheet" href="assets/css/core/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/core/animate.min.css">
       <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
        
        <!-- Load Main CSS 
        =====================================-->
        <link rel="stylesheet" href="assets/css/main/main.css">
        <link rel="stylesheet" href="assets/css/main/setting.css">
        <link rel="stylesheet" href="assets/css/main/hover.css">
        
        <!-- Load Magnific Popup CSS 
        =====================================-->
        <link rel="stylesheet" href="assets/css/magnific/magic.min.css">        
        <link rel="stylesheet" href="assets/css/magnific/magnific-popup.css">              
        <link rel="stylesheet" href="assets/css/magnific/magnific-popup-zoom-gallery.css">
        
        <!-- Load OWL Carousel CSS 
        =====================================-->
        <link rel="stylesheet" href="assets/css/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="assets/css/owl-carousel/owl.theme.css">
        <link rel="stylesheet" href="assets/css/owl-carousel/owl.transitions.css">
        
        <!-- Load Color CSS - Please uncomment to apply the color.
        =====================================      
        <link rel="stylesheet" href="assets/css/color/blue.css">
        <link rel="stylesheet" href="assets/css/color/brown.css">
        <link rel="stylesheet" href="assets/css/color/cyan.css">
        <link rel="stylesheet" href="assets/css/color/dark.css">
        <link rel="stylesheet" href="assets/css/color/green.css">
        <link rel="stylesheet" href="assets/css/color/orange.css">
        <link rel="stylesheet" href="assets/css/color/purple.css">
        <link rel="stylesheet" href="assets/css/color/pink.css">
        <link rel="stylesheet" href="assets/css/color/red.css">
        <link rel="stylesheet" href="assets/css/color/yellow.css">-->
        <link rel="stylesheet" href="assets/css/color/pasific.css">
        
        <!-- Load Fontbase Icons - Please Uncomment to use linea icons
        =====================================       
        <link rel="stylesheet" href="assets/css/icon/linea-arrows-10.css">
        <link rel="stylesheet" href="assets/css/icon/linea-basic-10.css">
        <link rel="stylesheet" href="assets/css/icon/linea-basic-elaboration-10.css">
        <link rel="stylesheet" href="assets/css/icon/linea-ecommerce-10.css">
        <link rel="stylesheet" href="assets/css/icon/linea-music-10.css">
        <link rel="stylesheet" href="assets/css/icon/linea-software-10.css">
        <link rel="stylesheet" href="assets/css/icon/linea-weather-10.css">--> 
        <link rel="stylesheet" href="assets/css/icon/font-awesome.css">
        <link rel="stylesheet" href="assets/css/icon/et-line-font.css">


        <!-- Load JS
        HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
        WARNING: Respond.js doesn't work if you view the page via file://
        =====================================-->

        <!--[if lt IE 9]>
       <script src="assets/js/jquery.fancybox.min.js"></script>

          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

        <![endif]-->
    </head>
    <body  id="topPage" data-spy="scroll" data-target=".navbar" data-offset="100">
        
        <!-- Page Loader
        ===================================== -->
		<div id="pageloader">
			<div class="loader-item">
                <img src="assets/img/other/puff.svg" alt="page loader">
            </div>
		</div>
        
        <a href="#page-top" class="go-to-top">
            <i class="fa fa-long-arrow-up"></i>
        </a>
        
        
        <!-- Navigation Area
        ===================================== -->
        <nav class="navbar navbar-pasific navbar-mp navbar-standart megamenu navbar-fixed-top" style="border-bottom:1px solid #fff;">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand page-scroll" href="https://www.ismat.pt/pt/" target="_blank">
                        <img src="assets/img/logo/logo-ismat.png" alt="logo">
                        ISMAT
                    </a>
                </div>
        
                <div class="navbar-collapse collapse navbar-main-collapse">
                    <ul class="nav navbar-nav">
                        <li class="dropdown megamenu-fw has-dropdown-menu"><a href="#" data-toggle="dropdown" class="dropdown-toggle color-light">Horários </a>
                            <ul class="dropdown-menu fullwidth">
                                <li class="megamenu-content withoutdesc">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h3 class="title text-uppercase font-montserrat color-dark">Eng.Informática</h3>
                                            <ul>
                                                <li><a href="assets/img/horarios/E.I-3ºano%201ºSemestre.png">3ºano -1ºSemestre</a></li>
                                                <li><a href="assets/img/horarios/nc.jpg">3ºano - 2ºSemestre</a></li>
                                                <li><a href="assets/img/horarios/nc.jpg">2ºano - 1ºSemestre</a></li>
                                                <li><a href="assets/img/horarios/nc.jpg">2ºano - 2ºSemestre</a></li>
                                                <li><a href="assets/img/horarios/nc.jpg">1ºano - 1ºSemestre</a></li>
                                                <li><a href="assets/img/horarios/nc.jpg">1ºano - 2ºSemestre</a></li>

                                            </ul>
                                        </div>
                                        <div class="col-sm-2">
                                            <h3 class="title text-uppercase font-montserrat color-dark">Direito</h3>
                                            <ul>
                                                <li><a href="assets/img/horarios/nc.jpg">3ºano -1ºSemestre</a></li>
                                                <li><a href="assets/img/horarios/nc.jpg">3ºano - 2ºSemestre</a></li>
                                                <li><a href="assets/img/horarios/nc.jpg">2ºano - 1ºSemestre</a></li>
                                                <li><a href="assets/img/horarios/nc.jpg">2ºano - 2ºSemestre</a></li>
                                                <li><a href="assets/img/horarios/nc.jpg">1ºano - 1ºSemestre</a></li>
                                                <li><a href="assets/img/horarios/nc.jpg">1ºano - 2ºSemestre</a></li>

                                            </ul>
                                        </div>
                                        <div class="col-sm-2">
                                            <h3 class="title text-uppercase font-montserrat color-dark">Psicologia</h3>
                                            <ul>
                                                <li><a href="assets/img/horarios/nc.jpg">3ºano -1ºSemestre</a></li>
                                                <li><a href="assets/img/horarios/nc.jpg">3ºano - 2ºSemestre</a></li>
                                                <li><a href="assets/img/horarios/nc.jpg">2ºano - 1ºSemestre</a></li>
                                                <li><a href="assets/img/horarios/nc.jpg">2ºano - 2ºSemestre</a></li>
                                                <li><a href="assets/img/horarios/nc.jpg">1ºano - 1ºSemestre</a></li>
                                                <li><a href="assets/img/horarios/nc.jpg">1ºano - 2ºSemestre</a></li>

                                            </ul>
                                        </div>
                                        <div class="col-sm-2">
                                            <h3 class="title text-uppercase font-montserrat color-dark">Gestão de Turismo</h3>
                                            <ul>
                                                <li><a href="assets/img/horarios/nc.jpg"">3ºano -1ºSemestre</a></li>
                                                <li><a href="assets/img/horarios/nc.jpg">3ºano - 2ºSemestre</a></li>
                                                <li><a href="assets/img/horarios/nc.jpg">2ºano - 1ºSemestre</a></li>
                                                <li><a href="assets/img/horarios/nc.jpg">2ºano - 2ºSemestre</a></li>
                                                <li><a href="assets/img/horarios/nc.jpg">1ºano - 1ºSemestre</a></li>
                                                <li><a href="assets/img/horarios/nc.jpg">1ºano - 2ºSemestre</a></li>

                                            </ul>
                                        </div>
                                        <div class="col-sm-2">
                                            <h3 class="title text-uppercase font-montserrat color-dark">Design</h3>
                                            <ul>
                                                <li><a href="assets/img/horarios/nc.jpg"">3ºano -1ºSemestre</a></li>
                                                <li><a href="assets/img/horarios/nc.jpg">3ºano - 2ºSemestre</a></li>
                                                <li><a href="assets/img/horarios/nc.jpg">2ºano - 1ºSemestre</a></li>
                                                <li><a href="assets/img/horarios/nc.jpg">2ºano - 2ºSemestre</a></li>
                                                <li><a href="assets/img/horarios/nc.jpg">1ºano - 1ºSemestre</a></li>
                                                <li><a href="assets/img/horarios/nc.jpg">1ºano - 2ºSemestre</a></li>

                                            </ul>
                                        </div>

                                </li>
                            </ul>
                        </li>
                        
                        <li class="dropdown megamenu-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle color-light">Cursos </a>
                            <ul class="dropdown-menu fullwidth">
                                <li class="megamenu-content withoutdesc">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <h3 class="title text-uppercase font-montserrat color-dark">Licenciaturas</h3>
                                            <ul>
                                                <li><a href="https://www.ismat.pt/pt/ensino/licenciaturas/licenciatura-em-design-de-comunicacao.html" target="_blank">DESIGN DE COMUNICAÇÃO</a></li>
                                                <li><a href="https://www.ismat.pt/pt/ensino/licenciaturas/licenciatura-em-direito.html"target="_blank">DIREITO</a></li>
                                                <li><a href="https://www.ismat.pt/pt/ensino/licenciaturas/licenciatura-em-educacao-fisica-e-desporto.html"target="_blank">EDUCAÇÃO FÍSICA E DESPORTO</a></li>
                                                <li><a href="https://www.ismat.pt/pt/ensino/licenciaturas/licenciatura-em-engenharia-informatica.html"target="_blank">ENGENHARIA INFORMÁTICA</a></li>
                                                <li><a href="https://www.ismat.pt/pt/ensino/licenciaturas/licenciatura-em-gestao-de-empresas.html"target="_blank">GESTÃO DE EMPRESAS</a></li>
                                                <li><a href="https://www.ismat.pt/pt/ensino/licenciaturas/licenciatura-em-gestao-de-recursos-humanos.html"target="_blank">GESTÃO DE RECURSOS HUMANOS</a></li>
                                                <li><a href="https://www.ismat.pt/pt/ensino/licenciaturas/licenciatura-em-gestao-do-turismo.html"target="_blank">GESTÃO DO TURISMO</a></li>
                                                <li><a href="https://www.ismat.pt/pt/ensino/licenciaturas/licenciatura-em-psicologia.html"target="_blank">PSICOLOGIA</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-2">
                                            <h3 class="title text-uppercase font-montserrat color-dark">Mestrados</h3>
                                            <ul>
                                                <li><a href="https://www.ismat.pt/pt/ensino/licenciaturas/arquitetura-mestrado-integrado.html">
                                                    ARQUITETURA MESTRADO INTEGRADO</a></li>
                                                <li><a href="https://www.ismat.pt/pt/ensino/mestrados/mestrado-em-psicologia-do-trabalho-e-da-saude-ocupacional.html">
                                                    PSICOLOGIA DO TRABALHO E DA SAÚDE OCUPACIONAL</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-2">
                                            <h3 class="title text-uppercase font-montserrat color-dark">Mestrados Integrados</h3>
                                            <ul>
                                                <li><a href="https://www.ismat.pt/pt/ensino/mestrados-integrados/mestrado-integrado-em-arquitetura-1-2-ciclo.html"target="_blank">
                                                    MESTRADO INTEGRADO EM ARQUITETURA (1º + 2º CICLO)</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-2">
                                            <h3 class="title text-uppercase font-montserrat color-dark">Pós Graduações</h3>
                                            <ul>
                                                <li><a href="https://www.ismat.pt/pt/ensino/pos-graduacoes/89-cross-training.html"target="_blank">CROSS TRAINING</a></li>
                                                <li><a href="https://www.ismat.pt/pt/ensino/pos-graduacoes/88-direito-do-trabalho.html"target="_blank">DIREITO DO TRABALHO</a></li>
                                                <li><a href="https://www.ismat.pt/pt/ensino/pos-graduacoes/87-diretor-a-de-clube.html"target="_blank">DIRETOR/A DE CLUBE</a></li>
                                                <li><a href="https://www.ismat.pt/pt/ensino/pos-graduacoes/86-executive-master-em-gestao-do-turismo-e-da-hospitalidade.html"target="_blank">EXECUTIVE MASTER EM GESTÃO DO TURISMO E DA HOSPITALIDADE</a></li>
                                                <li><a href="https://www.ismat.pt/pt/ensino/pos-graduacoes/85-integrative-training.html"target="_blank">INTEGRATIVE TRAINING</a></li>
                                                <li><a href="https://www.ismat.pt/pt/ensino/pos-graduacoes/84-marketing-digital.html"target="_blank">MARKETING DIGITAL</a></li>
                                                <li><a href="https://www.ismat.pt/pt/ensino/pos-graduacoes/83-personal-training-avancado.html"target="_blank">PERSONAL TRAINING AVANÇADO</a></li>
                                                <li><a href="https://www.ismat.pt/pt/ensino/pos-graduacoes/82-reabilitacao-urbana-edificios-e-sitios.html"target="_blank">REABILITAÇÃO URBANA – EDIFÍCIOS E SÍTIOS</a></li>
                                                <li><a href="https://www.ismat.pt/pt/ensino/pos-graduacoes/80-treino-terapeutico.html"target="_blank">TREINO TERAPÊUTICO</a></li>

                                            </ul>
                                        </div>
                                        <div class="col-sm-4">
                                            <img src="assets/img/cursos/ismatcursos.png" alt="pasific page" class="img-responsive mt25">



                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        
                        <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle color-light">Infraestruturas  </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="https://www.ismat.pt/pt/recursos/biblioteca.html"><i class="fa fa-spinner"></i>BIBLIOTECA</a></li>
                                <li><a href="https://secure.grupolusofona.pt/ismat/secretaria_virtual/page"><i class="fa fa-plus-square"></i>TESOURARIA</a></li>
                                <li><a href="shortcode-blockquotes.html"><i class="fa fa-quote-right"></i>REPROGRAFIA</a></li>

                            </ul>
                        </li>

                        <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle color-light">MEDIA  </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="https://www.ismat.pt/pt/nos-media/comunicados-de-imprensa.html"><i class="fa fa-spinner"></i>COMUNICADOS DE IMPRENSA</a></li>
                                <li><a href="https://www.ismat.pt/pt/nos-media/noticias.html"><i class="fa fa-plus-square"></i>NOTÍCIAS</a></li>
                                <li><a href="https://www.ismat.pt/pt/nos-media/ismat-nos-media.html"><i class="fa fa-quote-right"></i>ISMAT NOS MEDIA</a></li>
                                <li><a href="https://www.ismat.pt/pt/nos-media/agenda-de-eventos.html"><i class="fa fa-quote-right"></i>AGENDA DE EVENTOS</a></li>

                            </ul>
                        </li>
<!--     -->
                        <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle color-light">Sobre  </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="https://www.ismat.pt/pt/instituto/contactos.html"><i class="fa fa-spinner"></i>CONTACTOS</a></li>
                                <li><a href="https://www.instagram.com/ismat_institutosuperior/"><i class="fa fa-plus-square"></i>INSTAGRAM</a></li>
                                <li><a href="https://www.linkedin.com/school/ismat-instituto-superior-manuel-teixeira-gomes/"><i class="fa fa-quote-right"></i>LINKEDIN</a></li>
                                <li><a href="https://www.facebook.com/institutosuperiormat/"><i class="fa fa-quote-right"></i>FACEBOOK</a></li>

                            </ul>
                        </li>
                        
                    </ul>
                
                </div>
            </div>
        </nav>
        
        
        <!-- Search Modal Dialog Box
        ===================================== -->
        <div id="searchModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header bg-gray">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h5 class="modal-title text-center"><i class="fa fa-search fa-fw"></i> Search here</h5>
                    </div>
                    <div class="modal-body">                        
                        <form action="#" class="inline-form">
                            <input type="text" class="modal-search-input" autofocus>
                        </form>
                    </div>
                    <div class="modal-footer bg-gray">
                        <span class="text-center"><a href="#" class="color-dark">Advanced Search</a></span>
                    </div>
                </div>

            </div>
        </div>
        
        
        <!-- Subheader Area
        ===================================== -->
<!--        <header class="bg-grad-stellar mt70">-->

<!--            <div class="container">-->
<!--                <div class="row mt20 mb30">-->
<!--                    <div class="col-md-6 text-left">-->
<!--                        <h3 class="color-light text-uppercase animated" data-animation="fadeInUp" data-animation-delay="100">Blog Post Read<small class="color-light alpha7">some notes.</small></h3>-->
<!--                    </div>-->
<!--                    <div class="col-md-6 text-right pt35">-->
<!--                        <ul class="breadcrumb">-->
<!--                            <li><a href="#">Home</a></li>-->
<!--                            <li><a href="#">Blog Page</a></li>-->
<!--                            <li><a href="#">Blog Posts</a></li>-->
<!--                            <li>Blog Post Read</li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->

<!--        </header>-->
<!--        -->
        
        <!-- Blog Area
        ===================================== -->

        <div id="blog" class="pt75 pb50">
            <div class="container">
                <div class="row">

                    <!--Blog Post NOTICIA1 -->
                    <div class="col-md-6 col-sm-6 col-xs-12 mb50">
                        <div class="blog-three">
                            <h4 class="blog-title"><a href="#">DESIGN & DESENVOLVIMENTO: 40 ANOS DEPOIS</a></h4>
                            <img src="assets/img/noticias/noticia1.jpeg" class="img-responsive" alt="image blog">
                            <p class="mt25">
                            <h5>AS OBRAS FORAM CO-EDITADAS PELO PROFESSOR DR. GABRIEL PATROCÍNIO, DO DESIGN.ISMAT</h5>
                            Decorreu no dia 15 de janeiro, na Livraria da Travessa em Lisboa, o lançamento dos livros "Design & Desenvolvimento: 40 anos depois" e "Design & Development - Leveraging Social and Economic Growth through Design Policies." Os livros foram co-editados pelo Professor Dr. Gabriel Patrocínio, do DESIGN.ISMAT, que na ocasião debateu sobre o tema com Frederico Duarte, curador, crítico de design e professor da Faculdade de Belas-Artes.

                            </p>
<!--                            botão para dar redirect ao website do ISMAT<a href="#" class="button button-gray button-xs">Read More <i class="fa fa-long-arrow-right"></i></a>-->
                        </div>
                    </div>
<!--                    -->
                    <?php
                    $query = "SELECT title, subtitle, news_text FROM news";

                    if (($stmt = $db->prepare($query)) === false) {
                        trigger_error($db->error, E_USER_ERROR);
                    }
                    if ($stmt->execute() === false) {
                        trigger_error($stmt->error, E_USER_ERROR);
                    }
                    if (($result = $stmt->get_result()) === false) {
                        trigger_error($stmt->error, E_USER_ERROR);
                    }

                    if ($stmt = mysqli_prepare($db, $query)) {

                        /* execute statement */
                        mysqli_stmt_execute($stmt);

                        /* bind result variables */
                        mysqli_stmt_bind_result($stmt, $title,$subtitle, $news_text);
                        /* fetch values */
                        while (mysqli_stmt_fetch($stmt)) {
                            echo '<div class="col-md-6 col-sm-6 col-xs-12 mb50"">
                                        <div class="blog-three">
                                            <h4 class="blog-title">'.$title.'</h4>
                                            <h5>'.$subtitle.'</h5>
                                            <p>'.$news_text.'</p>
                                         </div>
                                       </div>';
                        }
                        /* close statement */
                        mysqli_stmt_close($stmt);
                    }
                    /* close connection */
                    mysqli_close($db);
                    ?>

                    <!--Blog Post NOTICIA 2 -->
                    <div class="col-md-6 col-sm-6 col-xs-12 mb50">
                        <div class="blog-three">
                            <h4 class="blog-title"><a href="#">POLICY DESIGN: FROM CITIES TO EUROPE, AND BACK!</a></h4>
                            <img src="assets/img/noticias/noticia3.jpeg" class="img-responsive" alt="image blog">
                            <p class="mt25">
                            <h5>DR. GABRIEL PATROCÍNIO, PROFESSOR DO DESIGN.ISMAT, ESTEVE PRESENTE NA CONFERÊNCIA DE PUBLIC POLICY DESIGN EM BRUXELAS</h5>
                                Public Policy Design: from cities to Europe, and back! - foi o tema da conferência que aconteceu no dia 25 de novembro em Bruxelas, e que contou com a presença e participação do Dr. Gabriel Patrocínio, professor do Design.Ismat. Durante o evento, promovido pela municipalidade de Lille, Capital Mundial do Design em 2020, foram debatidos e avaliados pelos presentes quatro projetos de renovação social e urbana nas cidades de Bruxelas, Helsínquia, Kolding e Valencia. Os contactos realizados deverão resultar em futuras colaborações com o ISMAT.                            </p>
                            </p>
                            <!--<a href="#" class="button button-gray button-xs">Read More <i class="fa fa-long-arrow-right"></i></a>-->
                        </div>
                    </div>
                </div>
<!--                tentativa de implementação de video-->
                    <div class="col-md-6 col-sm-6 col-xs-12 mb50">
                        <div class="blog-three">
                            <h4 class="blog-title"><a href="#">Grupo Lusófona</a></h4>

                            <iframe width="420" height="315"
                                src="https://www.youtube.com/embed/2A-HDKW2pn0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                            </iframe>
                            <p class="mt25">
                            <h5>Titulo bue interessante</h5>
                        Escrever um discurso extremamente motivacional
                            </p>
<!--                        <a href="#" class="button button-gray button-xs">Read More <i class="fa fa-long-arrow-right"></i></a>-->
                    </div>
<!--                </div>-->
<!--                <div class="card col-lg-4 col-sm-6">-->
<!--                    <a data-fancybox data-width="1280" data-height="720" href="https://www.youtube.com/embed/2A-HDKW2pn0">-->
<!--                        <img class="card-img-top img-fluid" src="http://img.youtube.com/vi/2A-HDKW2pn0/mqdefault.jpg" />-->
<!--                    </a>-->
<!--                    <div class="card-body">-->
<!--                        <p class="gallery_text">squeaking when being petted</p>-->
<!--                    </div>-->
<!--                </div>-->
                </div>
            </div>
        </div>
        <!-- Footer Area
        <footer class="page-footer font-small blue pt-4">

     Footer Links -->
        <div class="container-fluid text-center text-md-left">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-lg-12">

                    <!-- Content -->
                    <h5 class="text-uppercase">Made By: Vidas</h5>
                    <p>Sistemas de Informação Multimédia </p>

                </div>
            </div>
        </div>
                <!-- Grid column -->

<!--                <hr class="clearfix w-100 d-md-none pb-3">-->

<!--                &lt;!&ndash; Grid column &ndash;&gt;-->
<!--                <div class="col-md-3 mb-md-0 mb-3">-->

<!--                    &lt;!&ndash; Links &ndash;&gt;-->
<!--                    <h5 class="text-uppercase">Links</h5>-->

<!--                    <ul class="list-unstyled">-->
<!--                        <li>-->
<!--                            <a href="#!">Link 1</a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="#!">Link 2</a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="#!">Link 3</a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="#!">Link 4</a>-->
<!--                        </li>-->
<!--                    </ul>-->

<!--                </div>-->
<!--                &lt;!&ndash; Grid column &ndash;&gt;-->

<!--                &lt;!&ndash; Grid column &ndash;&gt;-->
<!--                <div class="col-md-3 mb-md-0 mb-3">-->

<!--                    &lt;!&ndash; Links &ndash;&gt;-->
<!--                    <h5 class="text-uppercase">Links</h5>-->

<!--                    <ul class="list-unstyled">-->
<!--                        <li>-->
<!--                            <a href="#!">Link 1</a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="#!">Link 2</a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="#!">Link 3</a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="#!">Link 4</a>-->
<!--                        </li>-->
<!--                    </ul>-->

<!--                </div>-->
<!--                &lt;!&ndash; Grid column &ndash;&gt;-->

<!--            </div>-->
<!--            &lt;!&ndash; Grid row &ndash;&gt;-->

<!--        </div>-->
<!--        &lt;!&ndash; Footer Links &ndash;&gt;-->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
        </div>
        <!-- Copyright -->

        </footer>


        <!-- JQuery Core
        =====================================-->
        <script src="assets/js/core/jquery.min.js"></script>
<!--        <script src="assets/js/jquery-3.4.1.min.js"></script>-->
        <script src="assets/js/core/bootstrap.min.js"></script>
        
        <!-- Magnific Popup
        =====================================-->
        <script src="assets/js/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/magnific-popup/magnific-popup-zoom-gallery.js"></script>
        
        <!-- JQuery Main
        =====================================-->
        <script src="assets/js/main/jquery.appear.js"></script>
        <script src="assets/js/main/isotope.pkgd.min.js"></script>
        <script src="assets/js/main/parallax.min.js"></script>
        <script src="assets/js/main/jquery.countTo.js"></script>
        <script src="assets/js/main/owl.carousel.min.js"></script>
        <script src="assets/js/main/jquery.sticky.js"></script>
        <script src="assets/js/main/ion.rangeSlider.min.js"></script>
        <script src="assets/js/main/imagesloaded.pkgd.min.js"></script>
        <script src="assets/js/main/main.js"></script>
        
    </body>
</html>