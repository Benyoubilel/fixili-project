@extends('template')

@section('scripthead')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style-freedom.css') }}">
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
            width: 24%;
            height: 190px;
            position: absolute;
            left: 0%;
            top: -9%;
        }
    </style>
@endsection


@section('titre')
    Contacter
@endsection


@section('contenu')
    <section class="w3l-contacts-12">
        <div class="wrapper">
            <h5 class="heading">Écrivez-nous</h5>
            <h3 class="heading">Entrer en contact </h3>
            <div class="contacts12-main">
                <form action="#" method="post">
                    <div class="main-input">
                        <input type="text" name="w3lName" placeholder="Your full name" class="contact-input1" required />
                        <input type="email" name="w3lSender" placeholder="Your email address" class="contact-input1"
                            required />
                        <input type="number" name="w3lPhone" placeholder="Your phone number" class="contact-input1"
                            required />
                        <input type="subject" name="w3lSubject" placeholder="Your subject" class="contact-input1"
                            required />
                    </div>
                    <textarea class="contact-textarea" name="w3lMessage" placeholder="Your message here" required></textarea>
                    <button class="actionbg btn">Envoyer</button>
                </form>
            </div>
        </div>
    </section>

    <div class="display-ad" style="margin: 8px auto;display: block;text-align: center;">
        <!---728x90--->

    </div>
    <!-- contacts4 block -->
    <section class="w3l-contacts-4">
        <div id="contacts4-block">
            <div class="contact">
                <iframe src="https://maps.google.com/maps?q=djerba%20houmt%20souk&t=&z=11&ie=UTF8&iwloc=&output=embed "
                    frameborder="0 " scrolling="no " marginheight="0 " marginwidth="0 "></iframe>
                <div class="cont-details ">
                    <h5>Emplacement</h5>
                    <p>Once aute irure dolor in reprehenderit in velit esse cillum dolore eu fugiat nulla pariatur elit.
                    </p>
                    <address>
                        <p><span class="fa fa-map-marker "></span> Home maintenance</p>
                        <p>#32841 block, home repairs,</p>
                        <p> Djerba. 4160.</p>
                    </address>
                    <p><span class="fa fa-envelope-open-o "></span> Email: <a
                            href="mailto:mail@company.com ">mail@company.com</a></p>
                    <p><span class="fa fa-phone "></span> Tel: <a href="tel:+(21)-255-999-8888 ">+(216)xx xxx xxx</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- contacts4 block -->

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
