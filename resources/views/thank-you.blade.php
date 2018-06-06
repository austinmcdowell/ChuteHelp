<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
    <meta charset="utf-8">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="noindex">
        
        <title>ChuteHelp - Home</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">


        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">

        <!-- JS -->
        <!-- <script src="{{ asset('js/app.js') }}"></script> -->

        <style>
        .fa-facebook {
            height: 30px;
            width: 30px;

            line-height: 30px;
            vertical-align: middle;

            color: white;

            border-radius: 50%;
            margin: 2% !important;
        }

        .fa-instagram {
            height: 30px;
            width: 30px;

            line-height: 30px;
            vertical-align: middle;

            color: white;

            border-radius: 50%;
            margin: 2% !important;
        }

        .fa-youtube {
            height: 30px;
            width: 30px;

            line-height: 30px;
            vertical-align: middle;

            color: white;

            border-radius: 50%;
            margin: 2% !important;
        }

        .sm-link {
            margin: 5px 7px !important;
            background: rgb(100, 220, 140);
        }

        .sm-link:hover {
            color: white !important;
            text-decoration: none;
        }
</style>

    </head>
    <body>
        <div class="background-image" style="background-image: url('{{ asset('img/bck-dark.jpg') }}')">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark chute-nav">
                <a href="/" class="navbar-brand"><i>CHUTE HELP</i></a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://store.chutehelp.com/">Store</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/retailers">Find A Retailer</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Contact</a>
                        </li>
                        <li><a href="https://www.facebook.com/ChuteHelp/" class="fa fa-facebook sm-link" align="center"></a></li>
                        <li><a href="https://www.instagram.com/chutehelpinc/" class="fa fa-instagram sm-link" align="center"></a></li>
                        <li><a href="https://www.youtube.com/user/TheChuteHelp" class="fa fa-youtube sm-link" align="center"></a></li>
                    </ul>
                </div>
            </nav>
            
            <img src="{{ asset('img/chute-help-logo-white.png') }}" class="img-fluid chute-logo-launch" alt="Responsive image"> -->
        </div>
        
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-12"><h1 class="mt-3">Thank you for contacting us! We'll be in touch shortly.</h1></div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row footer">
                <p>CHUTEHELP All Rights Reserved 2018</p>
            </div>
        </div>
        <script type="text/javascript">
            adroll_adv_id = "NRRMMNGCSBCYVPPUA5AWLU";
            adroll_pix_id = "W5RZYIEWAVASNDVETP7O2J";
            /* OPTIONAL: provide email to improve user identification */
            /* adroll_email = "username@example.com"; */
            (function () {
                var _onload = function(){
                    if (document.readyState && !/loaded|complete/.test(document.readyState)){setTimeout(_onload, 10);return}
                    if (!window.__adroll_loaded){__adroll_loaded=true;setTimeout(_onload, 50);return}
                    var scr = document.createElement("script");
                    var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
                    scr.setAttribute('async', 'true');
                    scr.type = "text/javascript";
                    scr.src = host + "/j/roundtrip.js";
                    ((document.getElementsByTagName('head') || [null])[0] ||
                        document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
                };
                if (window.addEventListener) {window.addEventListener('load', _onload, false);}
                else {window.attachEvent('onload', _onload)}
            }());
        </script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-41915592-2"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-41915592-2');
        </script>
    </body>
</html>
