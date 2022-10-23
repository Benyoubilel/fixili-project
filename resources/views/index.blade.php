<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Service a Home Maintenance category Responsive Web Template | Home : W3layouts</title>
    <link rel="stylesheet" href="{{ asset('css/style-freedom.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.1.0-web/css/all.css') }}">
    <script src='https://www.ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
    <script src="https://www.m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
    <meta name="robots" content="noindex">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <!-- New toolbar-->
    <style>
        * {
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
        }

        #w3lDemoBar.w3l-demo-bar {
            top: 0;
            right: 0;
            bottom: 0;
            z-index: 9999;
            padding: 40px 5px;
            padding-top: 70px;
            margin-bottom: 70px;
            background: #0D1326;
            border-top-left-radius: 9px;
            border-bottom-left-radius: 9px;
        }

        #w3lDemoBar.w3l-demo-bar a {
            display: block;
            color: #e6ebff;
            text-decoration: none;
            line-height: 24px;
            opacity: .6;
            margin-bottom: 20px;
            text-align: center;
        }

        #w3lDemoBar.w3l-demo-bar span.w3l-icon {
            display: block;
        }

        #w3lDemoBar.w3l-demo-bar a:hover {
            opacity: 1;
        }

        #w3lDemoBar.w3l-demo-bar .w3l-icon svg {
            color: #e6ebff;
        }

        #w3lDemoBar.w3l-demo-bar .responsive-icons {
            margin-top: 30px;
            border-top: 1px solid #41414d;
            padding-top: 40px;
        }

        #w3lDemoBar.w3l-demo-bar .demo-btns {
            border-top: 1px solid #41414d;
            padding-top: 30px;
        }

        #w3lDemoBar.w3l-demo-bar .responsive-icons a span.fa {
            font-size: 26px;
        }

        #w3lDemoBar.w3l-demo-bar .no-margin-bottom {
            margin-bottom: 0;
        }

        .toggle-right-sidebar span {
            background: #0D1326;
            width: 50px;
            height: 50px;
            line-height: 50px;
            text-align: center;
            color: #e6ebff;
            border-radius: 50px;
            font-size: 26px;
            cursor: pointer;
            opacity: .5;
        }

        .pull-right {
            float: right;
            position: fixed;
            right: 0px;
            top: 70px;
            width: 90px;
            z-index: 99999;
            text-align: center;
        }

        /* ============================================================
RIGHT SIDEBAR SECTION
============================================================ */

        #right-sidebar {
            width: 90px;
            position: fixed;
            height: 100%;
            z-index: 1000;
            right: 0px;
            top: 0;
            margin-top: 60px;
            -webkit-transition: all .5s ease-in-out;
            -moz-transition: all .5s ease-in-out;
            -o-transition: all .5s ease-in-out;
            transition: all .5s ease-in-out;
            overflow-y: auto;
        }

        /* ============================================================
RIGHT SIDEBAR TOGGLE SECTION
============================================================ */

        .hide-right-bar-notifications {
            margin-right: -300px !important;
            -webkit-transition: all .3s ease-in-out;
            -moz-transition: all .3s ease-in-out;
            -o-transition: all .3s ease-in-out;
            transition: all .3s ease-in-out;
        }

        @media (max-width: 992px) {
            #w3lDemoBar.w3l-demo-bar a.desktop-mode {
                display: none;
            }
        }

        @media (max-width: 767px) {
            #w3lDemoBar.w3l-demo-bar a.tablet-mode {
                display: none;
            }
        }

        @media (max-width: 568px) {
            #w3lDemoBar.w3l-demo-bar a.mobile-mode {
                display: none;
            }

            #w3lDemoBar.w3l-demo-bar .responsive-icons {
                margin-top: 0px;
                border-top: none;
                padding-top: 0px;
            }

            #right-sidebar,
            .pull-right {
                width: 90px;
            }

            #w3lDemoBar.w3l-demo-bar .no-margin-bottom-mobile {
                margin-bottom: 0;
            }
        }

        .img {
            width: 26%;
            height: 100px;
            position: absolute;
            left: 0%;
            top: -4%;
        }
    </style>
</head>

<body>


    <!-- header -->
    <div class="w3l-headers-9">
        <header>
            <div class="wrapper">
                <div class="header">

                    <div>
                        <h1>

                            <a href="/" class="logo">fixili</a>

                            <!-- if logo is image enable this
          <a class="logo" href="index.html">
            <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
          </a> -->
                        </h1>
                    </div>
                    <div class="bottom-menu-content">
                        <input type="checkbox" id="nav" />
                        <label for="nav" class="menu-bar"></label>
                        <nav>
                            <ul class="menu">
                                <li><a href="/" class="link-nav">Accueil</a></li>
                                <li><a href="/apropos" class="link-nav">A Propos</a></li>
                                <li>
                                    <!-- First Tier Drop Down -->
                                    <label for="drop-2" class="toggle toogle-2">Services <span
                                            class="fa fa-caret-down" aria-hidden="true"></span></label>
                                    <a href="/services" class="link-nav dropdown-toggle">Services <span
                                            class="fa fa-caret-down" aria-hidden="true"></span></a>
                                    <input type="checkbox" id="drop-2" />
                                    <ul class="first-dropdwon">
                                        <li><a href="/services/plombier">Plomberie</a></li>
                                        <li><a href="/services/electricien">Electricité</a></li>
                                        <li><a href="/services/jardinier">Jardinage</a></li>
                                        <li><a href="/services/netoyagemaison">Nettoyage</a></li>
                                        <li><a href="/services/gardiennage-et-surveillance">Surveillance</a></li>
                                        <li><a href="/services/peinture">Peinture</a></li>
                                    </ul>
                                </li>

                                <li><a href="/contact" class="link-nav">Contact</a></li>

                                <li>
                                    <label for="drop-4" class="toggle toogle-2">Profile <span class="fa fa-caret-down"
                                            aria-hidden="true"></span></label>
                                    <a href="#shop" class="link-nav dropdown-toggle">Profile <span
                                            class="fa fa-caret-down" aria-hidden="true"></span></a>
                                    <input type="checkbox" id="drop-4" />
                                    <ul>
                                        <li><a href="/Registration-Form">sign up</a></li>
                                        <li><a href="/login">Login</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- //header -->
    </div>

    <!-- covers -->
    <section class="w3l-covers-9-main">
        <div class="covers-9">
            <div class="csslider infinity" id="slider1">
                <input type="radio" name="slides" checked="checked" id="slides_1" />
                <ul class="banner_slide_bg">
                    <li>
                        <div class="wrapper">
                            <div class="cover-top-center-9">
                                <div class="w3ls_cover_txt-9">
                                    <h6 class="tag-cover-9">NOUS OFFRONS UN SERVICE DE QUALITÉ
                                    </h6>
                                    <h3 class="title-cover-9" style="letter-spacing: 1px;"><span
                                            class="auto-input"></span></h3>
                                    <p class="para-cover-9"></p>
                                    <a href="/apropos" class="actionbg button-cover-9">Lire plus</a>
                                    <a href="/contact" class="actionbg-border button-cover-9">Nous Services
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- //covers -->

    <div class="display-ad" style="margin: 8px auto;display: block;text-align: center;">
        <!---728x90--->

    </div>
    <!-- features -->
    <section class="w3l-feature-9">
        <div class="main-w3">
            <div class="wrapper">
                <div class="d-flex main-cont-wthree-fea">
                    <div class="grids-feature">
                        <span class="fa fa-bath"></span>
                        <h4><a href="#feature" class="title-head">Meilleure Qualité</a></h4>
                        <p>Nous insistons a donner les meilleurs services et expérience à tous nos clients .</p>
                    </div>
                    <div class="grids-feature">
                        <span class="fa fa-cogs"></span>
                        <h4><a href="#feature" class="title-head">Conseil d'Expert</a></h4>
                        <p>Nos experts peuvent vous conseiller et vous aider avec vos problèmes et remarques.</p>
                    </div>
                    <div class="grids-feature">
                        <span class="fa fa-users"></span>
                        <h4><a href="#feature" class="title-head">Grande Communauté</a></h4>
                        <p>Plus de 3000 client et 200 employee qui utilisent respectivement notre platformes.</p>
                    </div>
                    <div class="grids-feature">
                        <span class="fa fa-clock-o"></span>
                        <h4><a href="#feature" class="title-head">Service Ponctuel</a></h4>
                        <p>Nos employees sont trés ponctuels et respectent les horaires des rendez-vous fixé.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //features -->

    <div class="display-ad" style="margin: 8px auto;display: block;text-align: center;">
        <!---728x90--->

    </div>
    <!-- grids block 4 -->
    <section class="w3l-grids-4">
        <div id="grids4-block">
            <div class="wrapper">
                <h5 class="heading">Services</h5>
                <h3 class="heading">Nous Offrons</h3>
                <div class="owl-carousel owl-theme text-center">
                    <div class="item">
                        <div class="grids4-info">
                            <a href="#URL"><img src="{{ asset('images/plumbing.jpg') }}" class="img-responsive"
                                    alt="" /></a>
                            <div class="info">
                                <h5><a href="/services/plombier">Plomberie</a></h5>
                                <p>Nous nous intervenons dans tout local ou habitation neuve pour toute la plomberie de
                                    l’installation à la maintenance.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="grids4-info">
                            <a href="#URL"><img src="{{ asset('images/electrician.jpg') }}" class="img-responsive"
                                    alt="" /></a>
                            <div class="info">
                                <h5><a href="/services/electricien">Électricité</a></h5>
                                <p>Les travaux d’installation électrique dans les logements, les bureaux ou les
                                    bâtiments industriels.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="grids4-info">
                            <a href="#URL"><img src="{{ asset('images/carpenter.jpg') }}" class="img-responsive"
                                    alt="" /></a>
                            <div class="info">
                                <h5><a href="/services/jardinier">Jardinage</a></h5>
                                <p>Aménage et entretient parcs, jardins et terrains de sport. La préparation des sols,
                                    les plantations de fleurs et l’entretien des allées.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="grids4-info">
                            <a href="#URL"><img src="{{ asset('images/cleaning.jpg') }}" class="img-responsive"
                                    alt="" /></a>
                            <div class="info">
                                <h5><a href="/services/netoyagemaison">Nettoyage</a></h5>
                                <p> maintenir en état de propreté et de fonctionnement des differents locaux, nettoie,
                                    dépoussière, lave, désinfecte les maisons .
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="grids4-info">
                            <a href="#URL"> <img src="{{ asset('images/housekeeping.jpg') }}"
                                    class="img-responsive" alt="" /></a>
                            <div class="info">
                                <h5><a href="/services/netoyagemaison">Entretien Ménager</a></h5>
                                <p>nettoient les halls, les corridors, les bureaux et les chambres dans des hôtels, des
                                    centres hospitaliers, des écoles, des immeubles de bureaux ainsi que des résidences
                                    privées.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="grids4-info">
                            <a href="#URL"><img src="{{ asset('images/wallpainting.jpg') }}"
                                    class="img-responsive" alt="" /></a>
                            <div class="info">
                                <h5><a href="/services/peintureL">Peinture</a></h5>
                                <p>recouvrement d’un revêtement, en extérieur et à l'intérieur, murs et plafonds des
                                    maisons, des appartements, des magasins ou des bureaux.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
        </div>
    </section>
    <!-- grids block 4 -->

    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 0,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 2,
                        nav: false,
                        margin: 20
                    },
                    1000: {
                        items: 3,
                        nav: true,
                        loop: true,
                        margin: 20
                    }
                }
            })
        })
    </script>
    <section class="w3l-form-16">
        <!-- /form-16-section -->
        <div class="form-16-mian">
            <div class="wrapper">
                <div class="forms-16-top">
                    <div class="forms-16-info">
                        <h5>RÉSERVER UN SERVICE</h5>
                        <h3>Tous types de Service Maintenance à votre domicile</h3>
                        <p>Nous fournissons des services différents dont vous avez besoin dans votre maison dans un seul
                            endroit et en un simple clic . <br>Alors qu'est-ce que vous attendez ? <br>
                            Réservez un service maintenant !</p>
                        <a href="/contact" class="read1">A Propos</a>
                        <a href="/services" class="read2">Nos Services</a>
                    </div>
                    <div class="form-right-inf">
                        <div class="form-inner-cont">
                            <h6>Comment réserver un service ? <span class="line"></span></h6>
                            <a href="" class="btn"><i class="fa-solid fa-1"></i> - Créer un compte</a>
                            <a href="" class="btn"><i class="fa-solid fa-2"></i> - Choisir un service </a>
                            <a href="" class="btn"><i class="fa-solid fa-3"></i> - Sélectionner un
                                employee</a>
                            <a href="" class="btn"><i class="fa-solid fa-4"></i> - Prendre un
                                rendez-vous</a>
                            <p>Nous ne partagerons jamais vos coordonnées.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //form-16-section -->

    <div class="display-ad" style="margin: 8px auto;display: block;text-align: center;">
        <!---728x90--->

    </div>

    <section class="w3l-customers-8">
        <div class="customers-main">
            <div class="wrapper">
                <h5 class="heading">Témoignage</h5>
                <h3 class="heading">Avis Des Clients</h3>
                <div class="customer">
                    <div class="card">
                        <img class="card-img-top img-responsive" src="{{ asset('images/testi1.jpg') }}"
                            alt="">
                        <div class="card-body">
                            <p class="card-text">Once aute irure dolor in reprehenderit in voluptate velit esse cillum
                                dolore eu fugiat nulla pariatur elit. Fusce rutrum quam a rhoncus. Nulla eu ipsum et.
                            </p>
                            <a href="#link" class="customer-link">
                                <h3 class="card-title">Johnson Smith</h3>
                            </a>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top img-responsive" src="{{ asset('images/testi2.jpg') }}"
                            alt="">
                        <div class="card-body">
                            <p class="card-text">Once aute irure dolor in reprehenderit in voluptate velit esse cillum
                                dolore eu fugiat nulla pariatur elit. Fusce rutrum quam a rhoncus. Nulla eu ipsum et.
                            </p>
                            <a href="#link" class="customer-link">
                                <h3 class="card-title">Elizabeth Ker</h3>
                            </a>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top img-responsive" src="{{ asset('images/testi3.jpg') }}"
                            alt="">
                        <div class="card-body">
                            <p class="card-text">Once aute irure dolor in reprehenderit in voluptate velit esse cillum
                                dolore eu fugiat nulla pariatur elit. Fusce rutrum quam a rhoncus. Nulla eu ipsum et.
                            </p>
                            <a href="#link" class="customer-link">
                                <h3 class="card-title">Laura Sten</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="w3l-grids-block-5">
        <!-- grids block 5 -->
        <section id="grids5-block">
            <div class="wrapper">
                <h5 class="heading">Our blog</h5>
                <h3 class="heading">Latest news</h3>
                <div class="d-grid">
                    <div class="grids5-info">
                        <a href="#URL"><img src="{{ asset('images/homemaintenance.jpg') }}" alt="" /></a>
                        <div class="blog-info">
                            <h4><a href="#URL">Replacement, Repairs.</a></h4>
                            <p>Fusce rutrum quam a ultrices rhoncus. Nulla eu ipsum tempus est et vitae nulla empus est
                                suscipit et dolor amet.</p>
                            <ul class="blog-list">
                                <li>
                                    <p><span class="fa fa-clock-o"></span> Sep 2019</p>
                                </li>
                                <li>
                                    <p><span class="fa fa-heart-o"></span> <strong>20</strong> likes</p>
                                </li>
                                <li>
                                    <p><span class="fa fa-comments-o"></span> <strong>2</strong> comments</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="grids5-info">
                        <a href="#URL"><img src="{{ asset('images/sinkcleaning.jpg') }}" alt="" /></a>
                        <div class="blog-info">
                            <h4><a href="#URL">Sump and tank cleaning</a></h4>
                            <p>Fusce rutrum quam a ultrices rhoncus. Nulla eu ipsum tempus est et vitae nulla empus est
                                suscipit et dolor amet.</p>
                            <ul class="blog-list">
                                <li>
                                    <p><span class="fa fa-clock-o"></span> Sep 2019</p>
                                </li>
                                <li>
                                    <p><span class="fa fa-heart-o"></span> <strong>20</strong> likes</p>
                                </li>
                                <li>
                                    <p><span class="fa fa-comments-o"></span> <strong>2</strong> comments</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="grids5-info">
                        <a href="#URL"><img src="{{ asset('images/housekeeping.jpg') }}" alt="" /></a>
                        <div class="blog-info">
                            <h4><a href="#URL">House keeping, cleaning</a></h4>
                            <p>Fusce rutrum quam a ultrices rhoncus. Nulla eu ipsum tempus est et vitae nulla empus est
                                suscipit et dolor amet.</p>
                            <ul class="blog-list">
                                <li>
                                    <p><span class="fa fa-clock-o"></span> Sep 2019</p>
                                </li>
                                <li>
                                    <p><span class="fa fa-heart-o"></span> <strong>20</strong> likes</p>
                                </li>
                                <li>
                                    <p><span class="fa fa-comments-o"></span> <strong>2</strong> comments</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- // grids block 5 -->



    <!-- form 28 block -->
    <section class="w3l-forms-28">
        <div class="form-28">
            <div class="wrapper">
                <div class="form-main-cont-28">
                    <div class="content-28-form text-center">
                        <span class="fa fa-pencil"></span>
                        <span class="fa fa-envelope-open-o"></span>
                        <span class="fa fa-paper-plane-o"></span>
                        <h4 class="title-cont-foem28">Abonnez-vous pour rester informé sur les Services et les Offres.
                        </h4>
                        <form action="#" method="post" class="d-grid forms-28-form">
                            <input type="email" name="email" placeholder="Enter email address">
                            <button type="submit" class="actionbg">Abonner</button>
                        </form>
                        <p class="small-para-28form">Nous ne partagerons jamais votre e-mail avec quelqu'un d'autre</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //form 28 block -->
    <!-- footer-28 block -->
    <section class="w3l-footer-28-main">
        <div class="footer-28">
            <div class="wrapper">
                <div class="d-grid grid-col-4 footer-top-28">
                    <div class="footer-list-28">
                        <h6 class="footer-title-28">Address Info<span class="line"></span></h6>
                        <ul>
                            <li>
                                <p><span class="fa fa-map-marker"></span> Cyber Parc Djerba 4180 Houmet Essouk,
                                    Tunisie.
                                </p>
                            </li>
                            <li><a href="tel:+7-800-999-800"><span class="fa fa-phone"></span> +(21)-255-999-8888</a>
                            </li>
                            <li><a href="mailto:mail@company.com" class="mail"><span
                                        class="fa fa-envelope-open-o"></span> Contact@fixili.com</a></li>
                            <li><a href="mailto:mail@company.com" class="mail"><span
                                        class="fa fa-envelope-open-o"></span> info@fixili.com</a></li>
                        </ul>
                    </div>
                    <div class="footer-list-28">
                        <h6 class="footer-title-28">Liens rapides<span class="line"></span></h6>
                        <ul>
                            <li><a href="/apropos">À propos de la société</a></li>
                            <li><a href="/services">Nos Services</a></li>
                            <li><a href="/portfolio">Liste des projets récents</a></li>
                            <li><a href="/blog">Blog des dernières nouvelles</a></li>
                        </ul>
                    </div>
                    <div class="footer-list-28">
                        <h6 class="footer-title-28">liste des Services<span class="line"></span></h6>
                        <ul class="d-grid footer-column-2">
                            <li><a href="/services/plombier">Plomberie</a></li>
                            <li><a href="/services/electricien">Electricité</a></li>
                            <li><a href="/services/jardinier">Jardinage</a></li>
                            <li><a href="/services/netoyagemaison">Nettoyage</a></li>
                            <li><a href="/services/gardiennage-et-surveillance">Surveillance</a></li>
                            <li><a href="/services/peinture">Peinture</a></li>
                        </ul>
                    </div>
                    <div class="footer-list-28">
                        <h6 class="footer-title-28">Support<span class="line"></span></h6>
                        <ul>
                            <li><a href="#link">Politique de confidentialité</a></li>
                            <li><a href="#link">Conditions d'utilisation</a></li>
                            <li><a href="#link">24/7 support</a></li>
                        </ul>
                    </div>
                </div>
                <div class="midd-footer-28 align-center">
                    <div class="main-social-footer-28">
                        <a href="#facebook"><span class="fab fa-facebook"></a>
                        <a href="#twitter"><span class="fab fa-twitter"></a>
                        <a href="#google"><span class="fab fa-google-plus"></a>
                        <a href="#linkedin"><span class="fab fa-linkedin"></a>
                        <a href="#instagram"><span class="fab fa-instagram"></a>
                    </div>
                    <p class="copy-footer-28">©
                        <script>
                            document.write(new Date().getFullYear());
                        </script> FixiLi All rights reserved | Designed by <a href="#">Alaa &
                            Bilel</a>
                    </p>
                </div>
            </div>
        </div>
        <!-- //footer-28 block -->
    </section>

    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fa fa-angle-up"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- /move top -->



    <div id="v-w3layouts"></div>
    <script>
        (function(v, d, o, ai) {
            ai = d.createElement('script');
            ai.defer = true;
            ai.async = true;
            ai.src = v.location.protocol + o;
            d.head.appendChild(ai);
        })(window, document, '../../../../../../../a.vdo.ai/core/v-w3layouts/vdo.ai.js');
    </script>
    <!--  typed js library  -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
        var options = {
            strings: ["LA MEILLEURE PLATFORME POUR FOURNIR DES SERVICES A DOMICILE",
                'NOTRE EQUIPE FOURNIT LES MEILLEURS SERVICES', 'ENTRTIEN ET SERVICES A DOMICILE POUR VOUS'
            ],
            typeSpeed: 150,
            backSpeed: 140,
            loop: true

        };

        var typed = new Typed('.auto-input', options);
    </script>

</body>


<!-- Mirrored from demo.w3layouts.com/demosWTR/Freedom/30-03-2020/home-service-freedom-demo_Free/1435018137/web/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Apr 2022 14:47:54 GMT -->

</html>
