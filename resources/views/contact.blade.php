<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
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
        <link href="{{ asset('css/contact.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">

        <!-- JS -->
        <script src="{{ asset('js/site.js') }}"></script>

        <style>
        .fa-facebook {
            height: 30px;
            width: 30px;

            line-height: 30px;
            vertical-align: middle;

            background: #3B5998;
            color: white;

            border-radius: 50%;
            margin: 2% !important;
        }

        .fa-instagram {
            height: 30px;
            width: 30px;

            line-height: 30px;
            vertical-align: middle;

            background: #3B5998;
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
        

        <!-- LAUNCH VIDEO/IMAGE -->
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
                            <a class="nav-link" href="http://chute-help.mybigcommerce.com/">Store</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/retailers">Find A Retailer</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="/contact">Contact</a>
                        </li>
                        <li><a href="https://www.facebook.com/ChuteHelp/" class="fa fa-facebook sm-link" align="center"></a></li>
                        <li><a href="https://www.instagram.com/chutehelpinc/" class="fa fa-instagram sm-link" align="center"></a></li>
                        <li><a href="https://www.youtube.com/user/TheChuteHelp" class="fa fa-youtube sm-link" align="center"></a></li>
                    </ul>
                </div>
            </nav>

            <img src="{{ asset('img/chute-help-logo-white.png') }}" class="img-fluid chute-logo-launch" alt="Responsive image">
        </div>

        <div class="row form-well">
            <div class="col-sm-12 col-lg-12 form-well-header" align="center">
                <h2>{{ $page->data['emailHelper'] }}</h2>
            </div>
            <div class="col-sm-12 col-md-8 col-lg-8 offset-lg-2">
                <form method="post" name="signup" action="https://app.e2ma.net/app2/audience/signup/1787030/1752144/?v=a">
                    <div class="row">
                        <div class="col-sm-12 col-md-8 col-lg-8 offset-lg-1">
                            <div class="form-group email-newsletter">
                                <!-- <label for="form_email">Email *</label> -->
                                <input id="form_email" type="email" name="email" class="form-control email-news-form" placeholder="Email *" required="required" data-error="Valid email is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-3" align="center">
                            <input type="submit" class="btn btn-success btn-send form-well-button" value="Sign Up">
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="row contact-desc-title" align="center">
            <!-- <div class="col-lg-12">
                <h1 align="center">{{ $page->data['sectionHeader'] }}</h1>
            </div> -->
            <div class="col-lg-12">
                <h2 align="center">{{ $page->data['sectionDescription'] }}</h2>
            </div>
            
        </div>
        
        <div class="row about">
            <div class="col-lg-1"></div>
            <div class="col-lg-5">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="{{ $page->data['sectionVideoYouTubeURL'] }}"></iframe>
                </div>
            </div>

            <div class="col-lg-5">
                <p>{{ $page->data['sectionParagraph1'] }}</p>
                <p>{{ $page->data['sectionParagraph2'] }}</p>
            </div>
            <div class="col-lg-1"></div>
        </div>

        
        
        <div class="row contact-form">
            <div class="contact-form-inner">
                <div class="contact-form-title">
                    <h1 align="center">Contact Us</h1>
                </div>

                <div class="row">
                    <div class="col-lg-4 offset-lg-1">
                        <p class="contact-us-info"><p>{{ $page->data['contactCardDescription'] }}</p></p>
                        <p><span class="anton">Phone: </span>{{ $page->data['phoneNumberField'] }}</p>
                        <p><span class="anton">Email: </span><a href="mailto:{{ $page->data['emailAddressField'] }}">{{ $page->data['emailAddressField'] }}</a></p>
                        <p><span class="anton">Address: </span>{{ $page->data['addressField'] }}</p>
                    </div>
                    <div class="col-lg-6 offset-lg-1">
                        <form action="/contact" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="form_name">Firstname *</label>
                                        <input id="form_name" type="text" name="firstname" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="form_lastname">Lastname *</label>
                                        <input id="form_lastname" type="text" name="lastname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_email">Email *</label>
                                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_phone">Phone</label>
                                        <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="form_message">Message *</label>
                                        <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="form_zipcode">Zip Code *</label>
                                        <input id="form_zipcode" type="number" name="zipcode" class="form-control" placeholder="Zip code *" required="required" data-error="Zip code is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" name="becomeRetailer" type="checkbox" id="becomeRetailer">
                                            <label class="form-check-label" for="becomeRetailer">
                                                I want to be a retailer.
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="ropingEquipment" type="checkbox" id="ropingEquipment">
                                            <label class="form-check-label" for="ropingEquipment">
                                                I'm interested in roping equipment.
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="cattleEquipment" type="checkbox" id="cattleEquipment">
                                            <label class="form-check-label" for="cattleEquipment">
                                                I'm interested in cattle equipment.
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="easyNowProducts" type="checkbox" id="easyNowProducts">
                                            <label class="form-check-label" for="easyNowProducts">
                                                I'm interested in easy now products.
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <input type="submit" class="btn btn-success btn-send" value="Send message">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <p class="text-muted"><strong>*</strong> These fields are required.</p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>

        <script>
            var becomeRetailer = $('#becomeRetailer');
            becomeRetailer.on('change', function() {
                if (this.checked) {
                    alert('A storefront is required, and opening order minimums apply!');
                }
            });
        </script>

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
