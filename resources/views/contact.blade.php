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



        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/contact.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">

        <!-- JS -->
        <!-- <script src="{{ asset('js/app.js') }}"></script> -->

    </head>
    <body>
        

        <!-- LAUNCH VIDEO/IMAGE -->
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

        <div class="row newsletter">
            <div class="col-sm-12 col-lg-3 newsletter-signup-title" align="center">
                <p>{{ $page->data['emailHelper'] }}</p>
            </div>
            <div class="col-sm-8 col-md-8 col-lg-6">
                <div class="form-group email-newsletter">
                    <!-- <label for="form_email">Email *</label> -->
                    <input id="form_email" type="email" name="email" class="form-control email-news-form" placeholder="Email *" required="required" data-error="Valid email is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-sm-3 col-lg-3" align="center">
                <input type="submit" class="btn btn-success btn-send newsletter-button" value="Sign Up">
            </div>
        </div>

        <div class="row contact-desc-title" align="center">
            <div class="col-lg-12">
                <h1 align="center">{{ $page->data['sectionHeader'] }}</h1>
            </div>
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
                        <p><span class="anton">Phone:</span>{{ $page->data['phoneNumberField'] }}</p>
                        <p><span class="anton">Email:</span>{{ $page->data['emailAddressField'] }}</p>
                        <p><span class="anton">Address:</span>{{ $page->data['addressField'] }}</p>
                    </div>
                    <div class="col-lg-6 offset-lg-1">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="form_name">Firstname *</label>
                                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="form_lastname">Lastname *</label>
                                    <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
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
                            <div class="col-md-12">
                                <input type="submit" class="btn btn-success btn-send" value="Send message">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p class="text-muted"><strong>*</strong> These fields are required.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        
    </body>
</html>
