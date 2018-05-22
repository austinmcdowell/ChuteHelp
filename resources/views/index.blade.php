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
        <script src="{{ asset('js/app.js') }}"></script>

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
                    <h3 class="title">Chute Help, Inc. has manufactured innovative roping chutes, arena accessories, and horse training products for the past six years, and continues to be committed to improving and designing high-quality roping chutes and accessories, and bettering the Western industry.</h3>
                </div>

                <div class="row video-title">
                    <div class="col-lg-6">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/86kig1AOvTQ"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h2>Product</h2>
                        <h1>Chute Help Fully Automatic Roping Chute</h1>
                        <p>The Chute Help Farm Gate is the perfect way to stay stylish, while being functional. The Chute Help Farm Gate is the perfect way to stay stylish. The Chute Help Farm Gate is the perfect way to stay stylish, while being functional. The Chute Help Farm Gate is the perfect way to stay stylish.</p>
                        <a href="#">Find out more</a>
                    </div>
                </div>

                <div class="row video-title">
                    <div class="col-lg-6">
                        <h2>Product</h2>
                        <h1>Chute Help Full Arena Setup</h1>
                        <p>Chute Help's lead ups are all equipped with dual alley stops, making sorting and loading simple.  The dual alley stops make the steer's transition from one section to the next smooth and steady.
Chute Help's lead ups are all equipped with dual alley stops, making sorting and loading simple.  The dual alley stops make the steer's transition from one section to the next smooth and steady.
</p>
                        <a href="#">Find out more</a>
                    </div>
                    <div class="col-lg-6">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/B-RLktuDj-o"></iframe>
                        </div>
                    </div>
                </div>

                <div class="row video-title">
                    <div class="col-lg-6">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/XDRyqYBK4aA"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h2>Story</h2>
                        <h1>Chute Help Easy Exit Stripping Chute</h1>
                        <p>The Chute Help Farm Gate is the perfect way to stay stylish, while being functional. The Chute Help Farm Gate is the perfect way to stay stylish. The Chute Help Farm Gate is the perfect way to stay stylish, while being functional. The Chute Help Farm Gate is the perfect way to stay stylish.</p>
                        <a href="#">Find out more</a>
                    </div>
                </div>
            
                <!-- <h1 align="center">Other Products</h1> -->

                <div class="row secondary-products">
                    <div class="col-lg-4 product-wrapper" align="center">
                        <div class="card secondary-product" style="width: 22rem;">
                            <img class="card-img-top" src="{{ asset('img/adjust.jpg') }}" alt="Card image cap">
                            <div class="card-body">
                                <div class="card-desc">
                                    <h5 class="card-title" align="left">Chute Help Pivoting Adjustable Roping Boxes</h5>
                                    <p class="card-text" align="left">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                                <a href="#" class="btn btn-primary green-store-button" align="center">Visit Store</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 product-wrapper" align="center">
                        <div class="card secondary-product" style="width: 22rem;">
                            <img class="card-img-top" src="{{ asset('img/lead.jpg') }}" alt="Card image cap">
                            <div class="card-body">
                                <div class="card-desc">
                                    <h5 class="card-title" align="left"><b>Chute Help Lead Ups</b></h5>
                                    <p class="card-text" align="left">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                                <a href="#" class="btn btn-primary green-store-button" align="center">Visit Store</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 product-wrapper" align="center">
                        <div class="card secondary-product" style="width: 22rem;">
                            <img class="card-img-top" src="{{ asset('img/sweep.jpg') }}" alt="Card image cap">
                            <div class="card-body">
                                <div class="card-desc">
                                    <h5 class="card-title" align="left"><b>Chute Help Open Sweep</b></h5>
                                    <p class="card-text" align="left">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                                <a href="#" class="btn btn-primary green-store-button" align="center">Visit Store</a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="icons">
                <div class="row icon-sections">
                    <div class="col-lg-4 chute-desc-col">
                        <img src="{{ asset('icon/icons/book-8x-green.png') }}" alt="" class="chute-icon">
                        <h3 class="chute-desc-title">Learn About Us</h3>
                        <p class="chute-desc">Made in Texas, Chute Help continues to improve and design new roping arena accessories that will improve facility efficiency and operation.</p>
                    </div>
                    <div class="col-lg-4 chute-desc-col">
                        <img src="{{ asset('icon/icons/grid-three-up-8x-orange.png') }}" alt="" class="chute-icon">
                        <h3 class="chute-desc-title">Our Products</h3>    
                        <p class="chute-desc">Chute Help’s automatic roping chute products are easily installed and do not require electricity or an air compression system in the roping arena.</p>
                    </div>
                    <div class="col-lg-4 chute-desc-col">
                        <img src="{{ asset('icon/icons/globe-8x-green.png') }}" alt="" class="chute-icon">
                        <h3 class="chute-desc-title">Find A Retailer</h3>
                        <p class="chute-desc">Can’t find an authorized Chute Help retailer near you? Search for retailers with our location tool.
</p>         
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
