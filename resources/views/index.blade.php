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
        

        <!-- LAUNCH VIDEO/IMAGE -->
        <div class="launch text-center">
        <img src="{{ asset('img/bck-dark.jpg') }}" alt="Responsive image" class="image-fluid site-background" style="max-width: 100%">
            <!-- <video src="{{ asset('video/chute-help.mov') }}" alt="Responsive image" class="image-fluid" style="max-width: 100%"> -->
            
            <div class="caption-two">
                <!-- NAVIGATION -->
                <nav class="navbar navbar-expand-md navbar-dark sticky-top">
                    <div class="container-fluid">
                        <a href="/" class="navbar-brand chute-logo"><b><i>CHUTE HELP</i></b></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarResponsive">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a href="#" class="nav-link active link-font">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link link-font">Store</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link link-font">Retailers</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/contact" class="nav-link link-font">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <img src="{{ asset('img/chute-help-logo.png') }}" class="chute-logo-large" align="center"/>
                <div class="row watch-video" align="center">
                    <button class="btn btn-primary chute-video-two">Watch Video</button>
                </div>
            </div>
        </div>
        <div class="container-fluid">
        <div class="row">
            <div class="opener">
                <div class="col-lg-12 green-header">
                    <!-- <h1 align="center"><b>Chute Help Arenas</b></h1> -->
                    <h3 class="title">{{ $page->data['siteDescription'] }}</h3>
                </div>

                <div class="row video-title">
                    <div class="col-lg-6">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="{{ $page->data['highlight1youtube'] }}"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h2>Product</h2>
                        <h1>{{ $page->data['highlight1title'] }}</h1>
                        <p>{{ $page->data['highlight1description'] }}</p>
                        <a href="{{ $page->data['highlight1learnMore'] }}">Find out more</a>
                    </div>
                </div>

                <div class="row video-title">
                    <div class="col-lg-6">
                        <h2>Product</h2>
                        <h1>{{ $page->data['highlight2title'] }}</h1>
                        <p>{{ $page->data['highlight2description'] }}</p>
                        <a href="{{ $page->data['highlight2learnMore'] }}">Find out more</a>
                    </div>
                    <div class="col-lg-6">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="{{ $page->data['highlight2youtube'] }}"></iframe>
                        </div>
                    </div>
                </div>

                <div class="row video-title">
                    <div class="col-lg-6">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="{{ $page->data['highlight3youtube'] }}"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h2>Story</h2>
                        <h1>{{ $page->data['highlight3title'] }}</h1>
                        <p>{{ $page->data['highlight3description'] }}</p>
                        <a href="{{ $page->data['highlight3learnMore'] }}">Find out more</a>
                    </div>
                </div>
            
                <!-- <h1 align="center">Other Products</h1> -->

                <div class="row secondary-products">
                    <div class="col-lg-4 product-wrapper" align="center">
                        <div class="card secondary-product" style="width: 22rem;">
                            <img class="card-img-top" src="{{ $page->assets['productFeatureImage1'] }}" alt="Card image cap">
                            <div class="card-body">
                                <div class="card-desc">
                                    <h5 class="card-title" align="left">{{ $page->data['productFeature1title'] }}</h5>
                                    <p class="card-text" align="left">{{ $page->data['productFeature1description'] }}</p>
                                </div>
                                <a href="{{ $page->data['productFeature1storePageUrl'] }}" class="btn btn-primary green-store-button" align="center">Visit Store</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 product-wrapper" align="center">
                        <div class="card secondary-product" style="width: 22rem;">
                            <img class="card-img-top" src="{{ $page->assets['productFeatureImage2'] }}" alt="Card image cap">
                            <div class="card-body">
                                <div class="card-desc">
                                    <h5 class="card-title" align="left"><b>{{ $page->data['productFeature2title'] }}</b></h5>
                                    <p class="card-text" align="left">{{ $page->data['productFeature2description'] }}</p>
                                </div>
                                <a href="{{ $page->data['productFeature2storePageUrl'] }}" class="btn btn-primary green-store-button" align="center">Visit Store</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 product-wrapper" align="center">
                        <div class="card secondary-product" style="width: 22rem;">
                            <img class="card-img-top" src="{{ $page->assets['productFeatureImage3'] }}" alt="Card image cap">
                            <div class="card-body">
                                <div class="card-desc">
                                    <h5 class="card-title" align="left"><b>{{ $page->data['productFeature3title'] }}</b></h5>
                                    <p class="card-text" align="left">{{ $page->data['productFeature3description'] }}</p>
                                </div>
                                <a href="{{ $page->data['productFeature3storePageUrl'] }}" class="btn btn-primary green-store-button" align="center">Visit Store</a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="icons">
                <div class="row icon-sections">
                    <div class="col-lg-4 chute-desc-col">
                        <img src="{{ asset('icon/icons/book-8x-green.png') }}" alt="" class="chute-icon">
                        <h3 class="chute-desc-title">Learn About Us</h3>
                        <p class="chute-desc">{{ $page->data['learnAboutUs'] }}</p>
                    </div>
                    <div class="col-lg-4 chute-desc-col">
                        <img src="{{ asset('icon/icons/grid-three-up-8x-orange.png') }}" alt="" class="chute-icon">
                        <h3 class="chute-desc-title">Our Products</h3>    
                        <p class="chute-desc">{{ $page->data['ourProducts'] }}</p>
                    </div>
                    <div class="col-lg-4 chute-desc-col">
                        <img src="{{ asset('icon/icons/globe-8x-green.png') }}" alt="" class="chute-icon">
                        <h3 class="chute-desc-title">Find A Retailer</h3>
                        <p class="chute-desc">{{ $page->data['findARetailer'] }}</p>         
                    </div>
                </div>
                <div class="row icon-sections">
                    <div class="col-lg-4 chute-desc-col">
                        <a href="/contact" class="btn btn-primary page-button">Contact</a>
                    </div>
                    <div class="col-lg-4 chute-desc-col">
                        <a href="#" class="btn btn-primary page-button">Store</a>
                    </div>
                    <div class="col-lg-4 chute-desc-col">
                        <a href="#" class="btn btn-primary page-button">Retailers</a>
                    </div>
                </div>
                </div>
            </div>
        </div>

        <!-- <div class="row">
            <div class="col-lg-12 footer">
                <p>Chute Help</p>
            </div>
        </div> -->
        </div>
        
    </body>
</html>
