@extends('template')

@section('scripthead')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style-freedom.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.1.0-web/css/all.css') }}">

    <script src='https://www.ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
    <script src="https://www.m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>

    <!-- Demo bar start -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <!-- New toolbar-->
    <style>
        * {
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
        }

        #testimonials {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 100%;
        }

        .testimonial-heading {
            letter-spacing: 1px;
            margin: 30px 0px;
            padding: 10px 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .testimonial-heading h1 {
            font-size: 2.2rem;
            font-weight: 500;
            background-color: #202020;
            color: #ffffff;
            padding: 10px 20px;
        }

        .testimonial-heading span {
            font-size: 1.3rem;
            color: #252525;
            margin-bottom: 10px;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .testimonial-box-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            width: 100%;
            margin-bottom: 100px;
        }

        .testimonial-box {
            width: 500px;
            box-shadow: 2px 2px 30px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
            padding: 20px;
            margin: 15px;
            cursor: pointer;
        }

        .profile-img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 10px;
        }

        .profile-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        .profile {
            display: flex;
            align-items: center;
        }

        .name-user {
            display: flex;
            flex-direction: column;
        }

        .name-user strong {
            color: #3d3d3d;
            font-size: 1.1rem;
            letter-spacing: 0.5px;
        }

        .name-user span {
            color: #979797;
            font-size: 0.8rem;
        }

        .reviews {
            color: var(--theme-color);
        }

        .reviews p {
            display: inline-block;
            font-size: 16px;
            line-height: 25px;
            color: var(--para-color);
            margin-left: 10px;

        }

        .box-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .client-comment p {
            font-size: 0.9rem;
            color: #4b4b4b;
        }

        .testimonial-box:hover {
            transform: translateY(-10px);
            transition: all ease 0.3s;
        }

        @media(max-width:1060px) {
            .testimonial-box {
                width: 45%;
                padding: 10px;
            }
        }

        @media(max-width:790px) {
            .testimonial-box {
                width: 100%;
            }

            .testimonial-heading h1 {
                font-size: 1.4rem;
            }
        }

        @media(max-width:340px) {
            .box-top {
                flex-wrap: wrap;
                margin-bottom: 10px;
            }

            .reviews {
                margin-top: 10px;
            }
        }

        ::selection {
            color: #ffffff;
            background-color: #252525;
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

        .w3l-headers-9 header {
            background: rgb(3 3 3 / 80%);
            position: absolute;
            width: 100%;
            z-index: 999;
        }

        @media all and (max-width: 991px) {
            .w3l-headers-9 header {
                padding: 28px 0;
            }
        }
    </style>
@endsection

@section('titre')
    profile
@endsection

@section('contenu')
    <!-- teams 15 -->
    <section class="w3l-teams-15">
        <div class="teams15">
            <div class="wrapper">
                <div class="grid grid-column-2 ">
                    <div class="column2">
                        <h3 class="team-head">Salut, je suis Johnson</h3>
                        <div class="reviews">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <!--Empty star-->
                            <p>(4 sur 5) - 20 avis clients</p>
                        </div>
                        <br>
                        <p class="text">J'ai 40 ans. PLombier depuis 1996 avec 20 ans d'experience, j'ai travaillé dans
                            plusieurs societé
                            et je suis ouvert pour tous vos problemes et question.</p>
                        <p class="team-para">Nom & Prenom <span>Johnson smith</span></p>
                        <p class="team-para">Ma profession <span>expert en plomberie</span> </p>
                        <p class="team-para">specialité <span>fuite installation etc.</span></p>
                        <p class="team-para">Appelle moi sur <span><a
                                    href="tel:+(261)25-147-895">+(216)25-147-895</a></span></p>
                        <p class="team-para">Mail me at <span><a href="mailto:mail@company.com">mail@company.com</a></span>
                        </p>
                        <p class="team-para">Address <span>#32841 block, home repairs, USA.</span></p>

                    </div>
                    <div class="column1">
                        <a href="#team"><img class="img-responsive" src="{{ asset('images/team1.jpg') }}" /></a>
                        <div class="buttons-teams">
                            <a href="#team" class="facebook"><i class="fab fa-facebook"></i></a>
                            <a href="#team" class="twitter"><span class="fab fa-twitter"></span></a>
                            <a href="#team" class="linkedin"><span class="fab fa-linkedin"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- teams 15 -->
    <section class="w3l-form-16">
        <!-- /form-16-section -->
        <div class="form-16-mian">
            <div class="wrapper">
                <div class="forms-16-top">
                    <div class="forms-16-info">
                        <h5>Prendre un rendez-vous </h5>
                        <h3>Tous Types De Services De Plomberie à Votre Domicile</h3>
                        <p>Tous Types De Services De Plomberie installation, chaud et froid, fuite d'eau.
                            <br> suffit de m'appeler ou bien prendre un rendez-vous.
                        </p>
                        <a href="tel:+(261)25-147-895" class="read1"><i class="fa-solid fa-phone"></i> Appelez-moi:
                            25-147-895</a>

                    </div>
                    <div class="form-right-inf">
                        <div class="form-inner-cont">
                            <h6>Réservez un rendez-vous maintenant<span class="line"></span></h6>
                            <form action="#" method="post" class="signin-form">
                                <div class="d-grid book-form">
                                    <div class="form-input">
                                        <input type="text" name="" placeholder="Nom et Prenom" required />
                                    </div>
                                    <div class="form-input">
                                        <input type="email" name="" placeholder=" Addresse" required />
                                    </div>
                                    <div class="form-input">
                                        <input type="number" name="" placeholder="Num Tel" required />
                                    </div>
                                    <div class="form-input">
                                        <select>
                                            <option value="Select service">votre probléme</option>
                                            <option value="Carpentry">fuite</option>
                                            <option value="Cleaning">Cleaning</option>
                                            <option value="Electrical wiring">Electrical wiring</option>
                                            <option value="Plumbing">Autre..</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="form-input">
                                    <textarea>Saisir Votre Message ici ...</textarea>
                                </div>
                                <button class="btn">Réservez</button>
                                <p>Nous ne partagerons jamais vos coordonnées.</p>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="display-ad" style="margin: 8px auto;display: block;text-align: center;">
        <!---728x90--->

    </div>

    <!--Testimonials------------------->
    <section id="testimonials">
        <!--heading--->
        <div class="testimonial-heading">
            <span>commentaires</span>
            <h1>Les clients disent</h1>
        </div>
        <!--testimonials-box-container------>
        <div class="testimonial-box-container">
            <!--BOX-1-------------->
            <div class="testimonial-box">
                <!--top------------------------->
                <div class="box-top">
                    <!--profile----->
                    <div class="profile">
                        <!--img---->
                        <div class="profile-img">
                            <img src="{{ asset('images/team8.jpg') }}" />
                        </div>
                        <!--name-and-username-->
                        <div class="name-user">
                            <strong>Touseeq Ijaz</strong>
                            <span>@touseeqijazweb</span>
                        </div>
                    </div>
                    <!--reviews------>
                    <div class="reviews">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <!--Empty star-->
                    </div>
                </div>
                <!--Comments---------------------------------------->
                <div class="client-comment">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat quis? Provident
                        temporibus architecto asperiores nobis maiores nisi a. Quae doloribus ipsum aliquam tenetur
                        voluptates incidunt blanditiis sed atque cumque.</p>
                </div>
            </div>
            <!--BOX-2-------------->
            <div class="testimonial-box">
                <!--top------------------------->
                <div class="box-top">
                    <!--profile----->
                    <div class="profile">
                        <!--img---->
                        <div class="profile-img">
                            <img src="{{ asset('images/testi3.jpg') }}" />
                        </div>
                        <!--name-and-username-->
                        <div class="name-user">
                            <strong>J.K Rowling</strong>
                            <span>@jkrowling</span>
                        </div>
                    </div>
                    <!--reviews------>
                    <div class="reviews">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <!--Empty star-->
                    </div>
                </div>
                <!--Comments---------------------------------------->
                <div class="client-comment">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat quis? Provident
                        temporibus architecto asperiores nobis maiores nisi a. Quae doloribus ipsum aliquam tenetur
                        voluptates incidunt blanditiis sed atque cumque.</p>
                </div>
            </div>
            <!--BOX-3-------------->
            <div class="testimonial-box">
                <!--top------------------------->
                <div class="box-top">
                    <!--profile----->
                    <div class="profile">
                        <!--img---->
                        <div class="profile-img">
                            <img src="{{ asset('images/testi1.jpg') }}" />
                        </div>
                        <!--name-and-username-->
                        <div class="name-user">
                            <strong>Harry Potter</strong>
                            <span>@DanielRedclief</span>
                        </div>
                    </div>
                    <!--reviews------>
                    <div class="reviews">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <!--Empty star-->
                    </div>
                </div>
                <!--Comments---------------------------------------->
                <div class="client-comment">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat quis? Provident
                        temporibus architecto asperiores nobis maiores nisi a. Quae doloribus ipsum aliquam tenetur
                        voluptates incidunt blanditiis sed atque cumque.</p>
                </div>
            </div>

            <!--BOX-4-------------->
            <div class="testimonial-box">
                <!--top------------------------->
                <div class="box-top">
                    <!--profile----->
                    <div class="profile">
                        <!--img---->
                        <div class="profile-img">
                            <img src="{{ asset('images/testi2.jpg') }}" />
                        </div>
                        <!--name-and-username-->
                        <div class="name-user">
                            <strong>Oliva</strong>
                            <span>@Olivaadward</span>
                        </div>
                    </div>
                    <!--reviews------>
                    <div class="reviews">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <!--Empty star-->
                    </div>
                </div>
                <!--Comments---------------------------------------->
                <div class="client-comment">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat quis? Provident
                        temporibus architecto asperiores nobis maiores nisi a. Quae doloribus ipsum aliquam tenetur
                        voluptates incidunt blanditiis sed atque cumque.</p>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scriptbody')
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
@endsection
