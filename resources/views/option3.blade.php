<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ChuteHelp Site Options</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">



        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/option-one.css') }}" rel="stylesheet" type="text/css">

        <!-- JS -->
        <script src="{{ asset('js/app.js') }}"></script>

    </head>
    <body>
        

        <!-- LAUNCH VIDEO/IMAGE -->
        <div class="launch text-center">
            <img src="{{ asset('img/cow-dark-large.jpg') }}" alt="Responsive image" class="image-fluid" style="max-width: 100%">
            
            <div class="caption-three">
                <!-- NAVIGATION -->
                <nav class="navbar navbar-expand-md navbar-dark sticky-top see-through">
                    <div class="container-fluid">
                        <a href="/option1" class="navbar-brand">ChuteHelpLogo</a>
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
                                    <a href="#" class="nav-link link-font">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <div class="row third-header">
                    <div class="col-lg-5 offset-lg-1" align="left">
                        <h1>Chute Help</h1>
                        <p>Chute Help, Inc. has manufactured innovative roping chutes, arena accessories, and horse training products for the past six years, and continues to be committed to improving and designing high-quality roping chutes and accessories, and bettering the Western industry.</p>

                        <a href="" class="btn btn-primary third-store">Find out more</a>
                    </div>
                    <div class="col-lg-5">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item third-video" src="https://www.youtube.com/embed/wJJzWpmH7QA"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
