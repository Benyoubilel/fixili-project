<!DOCTYPE html>
<html lang="fr">

<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <link rel="stylesheet" href="{{ asset('css/style-freedom.css') }}">
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
    </style>
</head>

<body>
    <section class="w3l-forms-17">
        <div id="forms-17_sur">
            <div class="wrapper">

                <div class="display-ad" style="margin: 8px auto;display: block;text-align: center;">
                    <!---728x90--->

                </div>
                <div class="forms-17-top">
                    <div class="forms-17-text">
                        <div class="top">
                            <span class="fa fa-user"></span>
                            <h4>Hey, welcome back</h4>
                            <p>Login to your account now</p>
                        </div>
                        <ul class="bottom-list">
                            <li><span class="fa fa-check"></span> Fusce rutrum quam a ultrices rhoncus. Nulla eu ipsum
                                tempus est suscipit et vitae nulla. Once
                                aute irure dolor.</li>
                            <li><span class="fa fa-check"></span> Nulla eu ipsum tempus est suscipit et vitae nulla.
                                Once
                                autet</li>
                            <li><span class="fa fa-check"></span> Fusce rutrum quam a ultrices rhoncus.</li>
                        </ul>
                    </div>
                    <div class="forms-17-form">
                        <div class="form-17-tp">
                            <h6>Login</h6>
                            <form action="#" method="post" class="signin-form">
                                <div class="form-input">
                                    <input type="email" name="" placeholder="Your email address" required />
                                </div>
                                <div class="form-input">
                                    <input type="password" name="" placeholder="Your password" required />
                                </div>
                                <div class="forget">
                                    <a href="#url" class="forget-pas">Forgot password?</a>
                                </div>
                                <div class="align-left-right">
                                    <button class="btn">login</button>
                                    <ul class="login-social">
                                        <li><a href="#" class="facebook"><span
                                                    class="fa fa-facebook-square"></span></a>
                                        </li>
                                        <li><a href="#" class="twitter"><span
                                                    class="fa fa-twitter-square"></span></a>
                                        </li>
                                        <li><a href="#" class="instagram"><span
                                                    class="fa fa-instagram"></span></a></li>
                                    </ul>
                                </div>
                                <div class="bottom-login">
                                    <p>Not a customer? <a href="/Registration-Form">Sign Up</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
