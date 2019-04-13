<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <title>FATEC BARUERI</title>
    <link rel="icon" href="#">

    <link href="/css/font-face.css" rel="stylesheet" media="all">
    <link href="/assets/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="/assets/font-0-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="/assets/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <link href="/assets/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <link href="/assets/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="/assets/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="/assets/wow/animate.css" rel="stylesheet" media="all">
    <link href="/assets/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="/assets/slick/slick.css" rel="stylesheet" media="all">
    <link href="/assets/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="/assets/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <link href="/css/theme.css" rel="stylesheet" media="all">

</head>

<body>
    <div class="page-wrapper">
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="#">
                            <img src="#" alt="FATEC" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li>
                            <a href="{{ action('HomeController@index') }}">
                                <i class="fas fa-tachometer-alt"></i>Home</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-search"></i>Alunos</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="/alunos">Consultar Alunos</a>
                                </li>
                                <li>
                                    <a href="#">Feedback</a>
                                </li>
                                <li>
                                    <a href="#">Avaliação dos Alunos</a>
                                </li>

                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-chart-bar"></i>Metricas</a>
                        </li>

                        <li>
                            <a href="/formulario">
                                <i class="fas fa-user"></i>Cadastrar</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="zmdi zmdi-email-open"></i>Contato</a>
                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="#">

                                <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                    <li>
                                        <a href="#">QrCode</a>
                                    </li>
                                    <li>
                                        <a href="#">Fazer Backup</a>
                                    </li>
                                    <li>
                                        <a href="#">Exportar para CSV</a>
                                    </li>
                                    <li>
                                        <a href="#">Novo Curso</a>
                                    </li>
                                </ul>
                            </a>
                        </li>

                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="#" alt="FATEC" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a href="#">
                                <i class="fas fa-tachometer-alt"></i>Home</a>
                        </li>
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-search"></i> Alunos</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="/alunos">Consultar Alunos</a>
                                </li>
                                <li>
                                    <a href="#">Feedback</a>
                                </li>
                                <li>
                                    <a href="#">Avaliação dos Alunos</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-chart-bar"></i>Metricas</a>
                        </li>
                        <li>
                            <a href="/formulario">
                                <i class="fas fa-user"></i>Cadastrar</a>
                        </li>
                        <li>
                            <a href="contatar-aluno.php">
                                <i class="zmdi zmdi-email-open"></i>Contato</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fa fa-save"></i>Opções</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="#">QrCode</a>
                                </li>
                                <li>
                                    <a href="#">Efetuar Backup</a>
                                </li>

                                <li>
                                    <a href="#">Exportar para CSV</a>
                                </li>
                                <li>
                                    <a href="#">Novo Curso</a>
                                </li>
                            </ul>
                        </li>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <div class="mess-dropdown js-dropdown">

                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <button class="btn btn-secondory"></button>
                                        <i class="fa  fa-hand-o-right"></i>
                                        <div class="email-dropdown js-dropdown">

                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">

                                        <div class="notifi-dropdown js-dropdown">

                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="#" alt="FATEC BARUERI" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">FATEC BARUERI</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="#" alt="FATEC BARUERI" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">FATEC BARUERI</a>
                                                    </h5>

                                                    <span class="email">adm@fatec.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">

                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="#">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{ strftime('%d-%m-%y-%A') }}
                            <br>
                            {{ strftime('%T') }}
                        </div>
                    </div>
                </div>
            </header>
						@yield('conteudo')
<!-- Footer da página -->
<div class="row">
    <div class="col-md-12">
        <div class="copyright">
            <p>GTI © 2018 - FATEC BARUERI. INOVATECH
                <a href="#"></a>!</p>
        </div>
    </div>
</div>


<!-- Jquery JS-->
<script src="/assets/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="/assets/bootstrap-4.1/popper.min.js"></script>
<script src="/assets/bootstrap-4.1/bootstrap.min.js"></script>
<!-- /assets JS       -->
<script src="/assets/slick/slick.min.js">
</script>
<script src="/assets/wow/wow.min.js"></script>
<script src="/assets/animsition/animsition.min.js"></script>
<script src="/assets/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>
<script src="/assets/counter-up/jquery.waypoints.min.js"></script>
<script src="/assets/counter-up/jquery.counterup.min.js">
</script>
<script src="/assets/circle-progress/circle-progress.min.js"></script>
<script src="/assets/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="/assets/chartjs/Chart.bundle.min.js"></script>
<script src="/assets/select2/select2.min.js">
</script>

<!-- Main JS -->
    <script src="/js/main.js"></script>

</body>
</html>
