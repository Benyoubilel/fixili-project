<!DOCTYPE html>
<html lang="en">

<head>
    @yield('scripthead')
    <title>@yield('titre')</title>
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.1.0-web/css/all.css') }}">
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
                                    <a href="/services" class="link-nav dropdown-toggle">Services </a>
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
                                    <a href="#shop" class="link-nav dropdown-toggle">Profile </a>
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
    <section class=" w3l-inner-banner ">
        <div class="wrapper ">
        </div>
    </section>


    @yield('contenu')




    <section class="w3l-footer-28-main">
        <div class="footer-28">
            <div class="wrapper">
                <div class="d-grid grid-col-4 footer-top-28">
                    <div class="footer-list-28">
                        <h6 class="footer-title-28">Address Info<span class="line"></span></h6>
                        <ul>
                            <li>
                                <p><span class="fa fa-map-marker"></span> Cyber Parc Djerba 4180 Houmet Essouk, Tunisie.
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
                        </script> FixiLi All rights reserved | Designed
                        by <a href="#">Alaa & Bilel</a>
                    </p>
                </div>
            </div>
        </div>
        <!-- //footer-28 block -->
    </section>
    <button onclick="topFunction() " id="movetop" title="Go to top ">
        <span class="fa fa-angle-up "></span>
    </button>
    @yield('scriptbody')
</body>

</html>
