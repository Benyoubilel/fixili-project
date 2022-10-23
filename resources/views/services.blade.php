@extends('template')

@section('scripthead')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Services</title>
    <link rel="stylesheet" href="{{ asset('css/style-freedom.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.1.0-web/css/all.css') }}">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap"
        rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src='https://www.ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
    <script src="https://www.m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>


    <meta name="robots" content="noindex">
    <!-- Demo bar start -->
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
            width: 22%;
            height: 170px;
            position: absolute;
            left: 0%;
            top: -11%;
        }

        .w3l-footer-28-main {
            position: relative;
            top: 100px;
        }

        .a {
            font-size: 140%;
            color: rgb(77, 175, 80);
        }
    </style>
@endsection

@section('titre')
    Services
@endsection


@section('contenu')
    <!-- features-7 -->

    <!-- //features-7 -->

    <div class="display-ad " style="margin: 8px auto;display: block;text-align: center; ">
        <!---728x90--->

    </div>
    <section class="w3l-text-25-main ">
        <div class="text-25 ">
            <div class="wrapper ">
                <h5 class="heading ">Ce que nous servons</h5>
                <h3 class="heading ">Nos services</h3>
                <div class="text-25-content ">
                    <div class="d-grid grid-columns ">
                        <div class="d-grid inner-grid-columns ">
                            <div class="column1 ">
                            </div>
                            <div class="column-two ">
                                <div class="box13 ">
                                    <h3><a href="/services/plombier">Plomberie</a></h3>
                                    <p>Auncticrs dolor set amet usce rutrum quam a ultrices rhoncus. eutr ipsum tempus
                                        est suscipit et vitae nulla sed. Once aute irure dolor init et repreh enderit in
                                        voluptate velit esse.</p>
                                    <a href="/services/plombier" class="action btn ">Voir plus </a>
                                </div>
                            </div>
                        </div>
                        <div class="d-grid inner-grid-columns ">
                            <div class="column2 ">
                            </div>
                            <div class="column-two ">
                                <div class="box13 ">
                                    <h3><a href="/services/electricien">Électricien</a></h3>
                                    <p>Auncticrs dolor set amet usce rutrum quam a ultrices rhoncus. eutr ipsum tempus
                                        est suscipit et vitae nulla sed. Once aute irure dolor init et repreh enderit in
                                        voluptate velit esse.</p>
                                    <a href="/services/electricien" class="action btn ">Voir Plus </a>
                                </div>
                            </div>
                        </div>
                        <div class="d-grid inner-grid-columns ">
                            <div class="column3 ">
                            </div>
                            <div class="column-two ">
                                <div class="box13 ">
                                    <h3><a href="/services/peinture ">Peinture Murale</a></h3>
                                    <p>Bienvenu dans la zone de peinture. Ici vous trouvez plusieur employés de
                                        peintur,si vous etes besoin
                                    </p>
                                    <a href="/services/peinture" class="action btn ">Voir Plus </a>
                                </div>
                            </div>
                        </div>
                        <div class="d-grid inner-grid-columns ">
                            <div class="column4 ">
                            </div>
                            <div class="column-two ">
                                <div class="box13 ">
                                    <h3><a href="/services/netoyagemaison">Nettoyage de la maison</a></h3>
                                    <p>Nous fournissons des services de nettoyage de qualité professionnelle, que nous
                                        réalisons depuis de nombreuses années dans le secteur du nettoyage.</p>
                                    <a href="/service/netoyagemaison" class="action btn ">Voir Plus </a>
                                </div>
                            </div>
                        </div>
                        <div class="d-grid inner-grid-columns ">
                            <div class="column5 ">
                            </div>
                            <div class="column-two ">
                                <div class="box13 ">
                                    <h3><a href="/services/jardinier">Jardinier</a></h3>
                                    <p>Auncticrs dolor set amet usce rutrum quam a ultrices rhoncus. eutr ipsum tempus
                                        est suscipit et vitae nulla sed. Once aute irure dolor init et repreh enderit in
                                        voluptate velit esse.</p>
                                    <a href="/services/jardinier" class="action btn ">Voir Plus </a>
                                </div>
                            </div>
                        </div>
                        <div class="d-grid inner-grid-columns ">
                            <div class="column6">
                            </div>
                            <div class="column-two ">
                                <div class="box13 ">
                                    <h3><a href="/services/gardiennage-et-surveillance">Gardiennage et surveillance</a></h3>
                                    <p>Auncticrs dolor set amet usce rutrum quam a ultrices rhoncus. eutr ipsum tempus
                                        est suscipit et vitae nulla sed. Once aute irure dolor init et repreh enderit in
                                        voluptate velit esse.</p>
                                    <a href="/services/gardiennage-et-surveillance" class="action btn ">Voir Plus </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--// text-25 -->


    <div class="display-ad " style="margin: 8px auto;display: block;text-align: center; ">
        <!---728x90--->

    </div>
@endsection



@section('scriptbody')
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop ").style.display = "block ";
            } else {
                document.getElementById("movetop ").style.display = "none ";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- /move top -->
@endsection
