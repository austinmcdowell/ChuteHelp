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



        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">

        <!-- JS -->
        <!-- <script src="{{ asset('js/app.js') }}"></script> -->

    </head>
    <body>
        <div class="background-image" style="background-image: url('{{ asset('img/bck-dark.jpg') }}')">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark chute-nav">
                <a href="#" class="navbar-brand">CHUTEHELP</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Store</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Retailers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <img src="{{ asset('img/chute-help-logo.png') }}" class="img-fluid chute-logo-launch" alt="Responsive image">
        </div>

        <div class="container-fluid">
            <div class="row launch-description">
                <p align="center">description paragraph asdf;oancvad aoija edavf adfoi a;dfnas;doi asifa ofs asdo fiasdfa;xvcknso ifn nc;as dkn;og nern</p>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row main-product">
                <div class="col-sm-12 col-lg-6 product-video">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe src="https://www.youtube.com/embed/sfCExBGB8RY" frameborder="0"></iframe>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <p class="product-category">Product</p>
                    <h1>Chute Help Fully Automatic Roping Chute</h1>
                    <div class="product-paragraph">
                        <p>description paragraph asdf;oancvad aoija edavf adfoi a;dfnas;doi asifa ofs asdo fiasdfa;xvcknso ifn nc;as dkn;og nern</p>
                    </div>
                    <h5 class="find-out-more">find out more</h5>
                </div>
            </div>

            <div class="row main-product">
                <div class="col-sm-12 col-lg-6 right">
                    <p class="product-category">Product</p>
                    <h1>Title</h1>
                    <div class="product-paragraph">
                        <p>description paragraph asdf;oancvad aoija edavf adfoi a;dfnas;doi asifa ofs asdo fiasdfa;xvcknso ifn nc;as dkn;og nern</p>
                    </div>
                    <h5 class="find-out-more">find out more</h5>
                </div>

                <div class="col-sm-12 col-lg-6 product-video left">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe src="https://www.youtube.com/embed/sfCExBGB8RY" frameborder="0"></iframe>
                    </div>
                </div>
            </div>

            <div class="row main-product">
                <div class="col-sm-12 col-lg-6 product-video">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe src="https://www.youtube.com/embed/sfCExBGB8RY" frameborder="0"></iframe>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <p class="product-category">Product</p>
                    <h1>Title</h1>
                    <div class="product-paragraph">
                        <p>description paragraph asdf;oancvad aoija edavf adfoi a;dfnas;doi asifa ofs asdo fiasdfa;xvcknso ifn nc;as dkn;og nern</p>
                    </div>
                    <h5 class="find-out-more">find out more</h5>
                </div>
            </div>
        </div>

        <div class="container-fluid secondary" align="center">
            <div class="row secondary-products">
                <div class="col-lg-4 col-sm-12">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('img/adjust.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary visit-store-button">Visit Store</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-12">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('img/adjust.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary visit-store-button">Visit Store</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-12">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('img/adjust.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary visit-store-button">Visit Store</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

        <div class="container-fluid information" align="center">
            <div class="row">
                <div class="col-sm-12 col-lg-4">
                    <img src="" alt="" class="chute-icon">
                    <div class="info-links">
                        <h2>Learn About Us</h2>
                        <p>Made in Texas, Chute Help asdf;oadfvaodjfv</p>
                    </div>
                    <button>Contact</button>
                </div>
                
                <div class="col-sm-12 col-lg-4">
                    <img src="" alt="" class="chute-icon">
                    <div class="info-links">
                        <h2>Our Products</h2>
                        <p>Made in Texas, Chute Help asdf;oadfvaodjfv</p>
                    </div>
                    <button>Store</button>
                </div>

                <div class="col-sm-12 col-lg-4">
                    <img src="" alt="" class="chute-icon">
                    <div class="info-links">
                        <h2>Find A Retailer</h2>
                        <p>Made in Texas, Chute Help asdf;oadfvaodjfv</p>
                    </div>
                    <button>Retailers</button>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row footer"></div>
        </div>
    </body>
</html>
