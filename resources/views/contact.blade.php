<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
    <meta charset="utf-8">
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

        <!-- JS -->
        <script src="{{ asset('js/app.js') }}"></script>

    </head>
    <body>
        

        <!-- LAUNCH VIDEO/IMAGE -->
        <div class="launch text-center">
            <img src="{{ asset('img/bck-short.jpg') }}" alt="Responsive image" class="image-fluid site-background" style="max-width: 100%">
            <!-- <video src="{{ asset('video/chute-help.mov') }}" alt="Responsive image" class="image-fluid" style="max-width: 100%"> -->
            
            <div class="contact-header">
                <!-- NAVIGATION -->
                <nav class="navbar navbar-expand-md navbar-dark sticky-top see-through">
                    <div class="container-fluid">
                        <a href="/" class="navbar-brand chute-logo"><b><i>CHUTE HELP</i></b></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarResponsive">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a href="/" class="nav-link active link-font">Home</a>
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

                <h1 align="center" class="contact-header-title">We'd love to hear from you</h1>
            </div>
        </div>

        <div class="row newsletter">
            <div class="col-lg-1"></div>
            <div class="col-lg-4 newsletter-signup-title">
                <p>Get notified when we add new products</p>
            </div>
            <div class="col-lg-4">
                <div class="form-group email-newsletter">
                    <!-- <label for="form_email">Email *</label> -->
                    <input id="form_email" type="email" name="email" class="form-control email-news-form" placeholder="Email *" required="required" data-error="Valid email is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-lg-3">
                <input type="submit" class="btn btn-success btn-send newsletter-button" value="Sign Up">
            </div>
        </div>

        <div class="row contact-desc-title" align="center">
            <h1>CHUTE HELP, INC. HAS MANUFACTURED INNOVATIVE ROPING CHUTES, ARENA ACCESSORIES AND HORSE TRAINING PRODUCTS FOR THE PAST SIX YEARS, AND CONTINUES TO BE COMMITTED TO IMPROVING AND DESIGNING HIGH-QUALITY ROPING CHUTES AND ACCESSORIES, AND BETTERING THE WESTERN INDUSTRY.</h1>
            <h2>Originating in Northern Colorado, Chute Help, Inc. continues to be a family owned and operated company, that currently operates and manufactures in Carbon, Texas.</h2>
        </div>
        
        <div class="row about">
            <div class="col-lg-1"></div>
            <div class="col-lg-5">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/XgebBDI3oGQ"></iframe>
                </div>
            </div>

            <div class="col-lg-5">
                <p>Chute Help's roping arena products are easily installed, and allow everyone to have a fully automatic roping chute without having to install electricity or an air compression system in their roping arena.</p>
                <p>The Chute Help Fully Automatic Roping Chute's (US Patent 7,918,191; Canadian Patent ...) front gate remote-release portion is not what makes it innovative. However, when the front gate closes after the steer exits the roping chute, the rear gate opens automatically. The rear gate of the roping chute then closes behind the steer after it enters. The back gate latch mechanism keeps the steer from backing up in the roping chute. The energy to operate this simple mechanism is created by the animal entering the roping chute and depressing a platform, in the floor, down four inches. Our roping chute is very easy on livestock and requires less manual labor. The Chute Help Fully Automatic Roping Chute can be placed virtually anywhere and still maintain the convenience of a remote release roping chute. This product has been tested for six years and has had thousands of cycles.</p>
            </div>
            <div class="col-lg-1"></div>
        </div>

        
        
        <div class="row contact-form">
            <div class="contact-form-inner">
                <div class="contact-form-title">
                    <h1 align="center">Contact Us</h1>
                </div>

                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-5">
                        <p class="contact-us-info">From ordering a Chute Help automatic roping chute, to support, or just saying hello to check on new products, we want to hear from you. Feel free to call or email us and we’ll get back to you as soon as possible!</p>
                        <p><span class="anton">Phone:</span> 1-855-CHUTEHELP (248-8343)</p>
                        <p><span class="anton">Email:</span> info@chutehelp.com</p>
                        <p><span class="anton">Address:</span> 500 S. Main St., Carbon, TX 76435</p>
                    </div>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-4">
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
                    <div class="col-lg-1"></div>
                </div>
            </div>
            
        </div>
        
    </body>
</html>
