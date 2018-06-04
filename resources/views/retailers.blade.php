<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
    <meta charset="utf-8">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ChuteHelp</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
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
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Store</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="/retailers">Find A Retailer</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Contact</a>
                        </li>
                        <li><a href="#" class="fa fa-facebook sm-link" align="center"></a></li>
                        <li><a href="#" class="fa fa-instagram sm-link" align="center"></a></li>
                        <li><a href="#" class="fa fa-youtube sm-link" align="center"></a></li>
                    </ul>
                </div>
            </nav>

            <img src="{{ asset('img/chute-help-logo-white.png') }}" class="img-fluid chute-logo-launch" alt="Responsive image">
        </div>

        <div class="row form-well">
            <div class="col-sm-12 col-lg-12 form-well-header" align="center">
                <h2>Find a Retailer</h2>
            </div>
            <div class="col-sm-12 col-md-8 col-lg-8 offset-md-2">
                <form method="GET" action="/retailers/search">
                    <div class="row">
                        <div class="col-sm-12 col-lg-4 offset-lg-1">
                            <div class="form-group">
                                <input class="form-control" type="number" name="zipCode" placeholder="Zip Code">
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-4">
                            <div class="form-group email-newsletter">
                            <div class="form-group">
                                <select class="form-control" name="distance">
                                    <option value="5" selected>5 Miles</option>
                                    <option value="10">10 Miles</option>
                                    <option value="25">25 Miles</option>
                                    <option value="50">50 Miles</option>
                                    <option value="100">100 Miles</option>
                                    <option value="250">250 Miles</option>
                                </select>
                            </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-3" align="center">
                            <input style="margin: 0" type="submit" class="btn btn-success btn-send form-well-button" value="Search">
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="container locations">
            @if(isset($form_message))
            <p>{{ $form_message }}</p>
            @endif
            @if(isset($error))
            <p>Something went wrong. You can contact us <a href="/contact">here</a> and we'll help you out as soon as possible!</p>
            @endif

            @if(isset($no_results))
            <p>There were no locations found.</p>
            @endif

            @if(isset($locations))
                <div class="col-sm-12 text-center">
                    <h1 class="retailer-header">Results</h1>
                </div>
                @foreach($locations as $location)
                <div class="row location" style="border-bottom: 1px solid #ccc">
                    <div class="col-sm-12 col-md-4 text-center">
                        <img class="logo" src="{{ $location->retailer->logo_url }}" alt="{{ $location->retailer->name }}" />
                    </div>
                    <div class="col-sm-12 col-md-8">
                        <h2>{{ $location->name }}</h2>
                        <p>{{ $location->address }}, {{ $location->city }}, {{ $location->state }} {{ $location->zip_code }}</p>
                        <p>Phone number: {{ $location->phone }}</p>
                        <p>Website: <a href="{{ $location->retailer->website }}">{{ $location->retailer->website }}</a></p>
                    </div>
                </div>
                @endforeach
            @endif
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h1 class="retailer-header">Retailers</h1>
                </div>
            </div>
            <div class="row retailers">
                @foreach($retailers as $retailer)
                <div class="col-sm-12 col-md-4 text-center retailer">
                    <img src="{{ $retailer->logo_url }}" />
                    <p><a href="{{ $retailer->website }}">{{ $retailer->name }}</a></p>
                </div>
                @endforeach
            </div>
        </div>

        <div class="container-fluid">
            <div class="row footer"></div>
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
