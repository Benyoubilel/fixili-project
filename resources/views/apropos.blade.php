@extends('template')

@section('scripthead')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Service a Home Maintenance category Responsive Web Template | About : W3layouts</title>
    <link rel="stylesheet" href="{{ asset('css/style-freedom.css') }}">
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
            width: 26%;
            height: 100px;
            position: absolute;
            left: 0%;
            top: -4%;
        }
    </style>
@endsection


@section('titre')
    A propos
@endsection


@section('contenu')
    <!-- content-with-photo4 block -->
    <section class="w3l-content-with-photo-4">
        <div id="content-with-photo4-block">
            <div class="wrapper">
                <h5 class="heading">Our company</h5>
                <h3 class="heading">Few words about us</h3>
                <div class="cwp4-two">
                    <div class="cwp4-text">
                        <h4>15 years of experience in home service business</h4>
                        <p>Fusce rutrum quam a ultrices rhoncus. Nulla eu ipsum tempus est suscipit et vitae nulla. Once
                            aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur elit ipsum tempus est. </p>
                        <ul>
                            <li><span class="fa fa-headphones"></span> 24/7 online Services available</li>
                            <li><span class="fa fa-money"></span> Affordable Price - No hidden cost</li>
                            <li><span class="fa fa-headphones"></span> Professional HandyMan</li>
                        </ul>
                    </div>
                    <div class="cwp4-image">
                        <img src="{{ asset('images/aboutpage.jpg') }}" class="img-responsive" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- content-with-photo4 block -->

    <div class="display-ad" style="margin: 8px auto;display: block;text-align: center;">
        <!---728x90--->

    </div>
    <!-- features-17 -->
    <section class="w3l-features-17">
        <div class="features-17_sur">
            <div class="wrapper">
                <h5 class="heading">Some features</h5>
                <h3 class="heading">Why choose us</h3>
                <div class="features-17-top_sur">
                    <div class="features-17-left_sur">
                        <h3>We take great pride in all the services we offer, but what makes our company special?</h3>
                        <p>Fusce rutrum quam a ultrices rhoncus. Nulla eu ipsum tempus est suscipit et vitae nulla. Once
                            aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur elit. </p>
                        <p>Fusce rutrum quam a ultrices rhoncus. Nulla eu ipsum tempus est suscipit et vitae nulla. Once
                            aute irure dolor. </p>
                    </div>
                    <div class="features-17-right_sur">
                        <div class="features-17-right_sur_inner">
                            <a href="#link"><span class="fa fa-check"></span> Well trained technician.</a>
                            <a href="#link"><span class="fa fa-check"></span> A hassle free Service</a>
                            <a href="#link"><span class="fa fa-check"></span> Using Best Quality tools.</a>
                            <a href="#link"><span class="fa fa-check"></span> Money is on safe Hand</a>
                            <a href="#link"><span class="fa fa-check"></span> 100% satisfactory work.</a>
                            <a href="#link"><span class="fa fa-check"></span> Work completion in Time.</a>
                            <a href="#link"><span class="fa fa-check"></span> Reasonable Cost</a>
                            <a href="#link"><span class="fa fa-check"></span> Expert consultant Team</a>
                            <a href="#link"><span class="fa fa-check"></span> On time response</a>
                            <a href="#link"><span class="fa fa-check"></span> Get Expert Technician</a>
                            <a href="#link"><span class="fa fa-check"></span> Well trained technician.</a>
                            <a href="#link"><span class="fa fa-check"></span> A hassle free Service</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /features-17 -->

    <div class="display-ad" style="margin: 8px auto;display: block;text-align: center;">
        <!---728x90--->

    </div>
    <section class="w3l-cover-3">
        <div class="cover top-bottom">
            <div class="wrapper">
                <div class="middle-section text-center">
                    <div class="section-width">
                        <h2>We provide professional services with an amazing team</h2>
                        <p>Nulla eu ipsum tempus est suscipit et vitae nulla. Once aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur elit, fusce quam a rhoncus.</p>
                        <a href="#quote" class="btn">Get a quote</a>
                        <a href="#quote" class="contact">Contact us</a>
                    </div>
                </div>
    </section>
    <div class="w3l-specifications-5">
        <!-- Specifications5 block -->
        <section id="specifications5-block">
            <div class="wrapper">
                <div class="d-grid align-specifications5-cols">
                    <div class="specifications5-left">
                        <h5 class="heading">Our Stats</h5>
                        <h3 class="heading">Some Company facts</h3>
                        <p>Nulla eu ipsum tempus est suscipit et vitae nulla. Once aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur elit.Nulla eu ipsum tempus est
                            suscipit et vitae nulla. Once aute irure
                            dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.
                        </p>
                        <p>Nulla eu ipsum tempus est suscipit et vitae nulla. Once aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat elit. </p>
                    </div>
                    <div class="specifications5-right">
                        <div class="d-grid grid-col-2">
                            <div class="specification">
                                <span class="fa fa-smile-o"></span>
                                <h4>2000+</h4>
                                <p>Happy customers</p>
                            </div>
                            <div class="specification">
                                <span class="fa fa-legal"></span>
                                <h4>160</h4>
                                <p>Services done</p>
                            </div>
                            <div class="specification spec-gap">
                                <span class="fa fa-home"></span>
                                <h4>150</h4>
                                <p>Projects completed</p>
                            </div>
                            <div class="specification spec-gap">
                                <span class="fa fa-users"></span>
                                <h4>100+</h4>
                                <p>Technician experts</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Specifications5 block -->

    <div class="display-ad" style="margin: 8px auto;display: block;text-align: center;">
        <!---728x90--->

    </div>
@endsection

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
@section('scriptbody')
@endsection
