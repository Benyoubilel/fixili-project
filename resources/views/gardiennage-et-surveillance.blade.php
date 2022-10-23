@extends('template')

@section('scripthead')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style-freedom.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap"
        rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="{{ asset('owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/stylegardienage.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.1.0-web/css/all.css') }}">

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
            width: auto;
            height: auto;
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
    gardiennage-et-surveillance
@endsection

@section('contenu')
    <br>
    <br>
    <section class="w3l-feature-9 ">
        <div class="container-fluid py-5 ">
            <div class="container py-5 ">
                <div class="text-center mx-auto mb-5 " style="max-width: 500px; ">
                    <h1 class="display-5 ">Les Employés</h1>
                    <hr class="w-25 mx-auto text-primary " style="opacity: 1; ">
                </div>
                <div class="row g-3 ">
                    <div class="col-lg-4 col-md-6 ">
                        <div class="team-item ">
                            <img class="img-fluid w-100 " src="{{ asset('images/sec1.png') }} " alt=" ">
                            <div class="team-text ">
                                <div class="team-social ">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <div class="mt-auto mb-3 ">
                                    <h4 class="mb-1 ">Majdi bakalti</h4>
                                    <a href="/services/profile"> <span
                                            class="text-uppercase btn btn-outline-success mb-1">Voir Profile</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 ">
                        <div class="team-item ">
                            <img class="img-fluid w-100 " src="{{ asset('images/sec2.jpeg') }} " alt=" ">
                            <div class="team-text ">
                                <div class="team-social ">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <div class="mt-auto mb-3 ">
                                    <h4 class="mb-1 ">Taher ben ammar</h4>
                                    <a href="/services/profile"> <span
                                            class="text-uppercase btn btn-outline-success mb-1">Voir Profile</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 ">
                        <div class="team-item ">
                            <img class="img-fluid w-100 " src="{{ asset('images/sec3.jpeg') }} " alt=" ">
                            <div class="team-text ">
                                <div class="team-social ">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-half"></i>
                                </div>
                                <div class="mt-auto mb-3 ">
                                    <h4 class="mb-1 ">Raouf ben ali</h4>
                                    <a href="/services/profile"> <span
                                            class="text-uppercase btn btn-outline-success mb-1">Voir Profile</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 ">
                        <div class="team-item ">
                            <img class="img-fluid w-100 " src="{{ asset('images/sec4.jpeg') }} " alt=" ">
                            <div class="team-text ">
                                <div class="team-social ">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-half"></i>
                                </div>
                                <div class="mt-auto mb-3 ">
                                    <h4 class="mb-1 ">Mahrez Ben ali</h4>
                                    <a href="/services/profile"> <span
                                            class="text-uppercase btn btn-outline-success mb-1">Voir Profile</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 ">
                        <div class="team-item ">
                            <img class="img-fluid w-100 " src="{{ asset('images/sec5.jpeg') }} " alt=" ">

                            <div class="team-text ">
                                <div class="team-social ">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-half"></i>
                                </div>
                                <div class="mt-auto mb-3 ">
                                    <h4 class="mb-1 ">Yessine ben mimoun</h4>
                                    <a href="/services/profile"> <span
                                            class="text-uppercase btn btn-outline-success mb-1">Voir Profile</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 ">
                        <div class="team-item ">
                            <img class="img-fluid w-100 " src="{{ asset('images/sec6.jpeg') }} " alt=" ">
                            <div class="team-text ">
                                <div class="team-social ">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <div class="mt-auto mb-3 ">
                                    <h4 class="mb-1 ">Aymen ben ghali</h4>
                                    <a href="/services/profile"> <span
                                            class="text-uppercase btn btn-outline-success mb-1">Voir Profile</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team End -->
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

    <script src="https://code.jquery.com/jquery-3.4.1.min.js "></script>

    <script src="lib/easing/easing.min.js "></script>
    <script src="lib/waypoints/waypoints.min.js "></script>
    <script src="lib/owlcarousel/owl.carousel.min.js "></script>
@endsection
