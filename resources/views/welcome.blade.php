<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Creative - Start Bootstrap Theme</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Roboto&family=Crimson+Text:ital,wght@0,400;1,600&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Tangerine:wght@400;700&display=swap" rel="stylesheet">
    <!-- Third party plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css"
        rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('assets/web/css/styles.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/web/css/custom.css') }}" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">Matrimony</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#!">Login</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#!">Register</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead" style="">
        <div class=" h-100">
            <div class="row h-100 align-items-center justify-content-center" style="width: 100%;">
                <div class="col-lg-3">
                    <div id="home-search-form">
                        <form>
                            <div class="form-group">
                                <label class="col-form-label col-form-label-sm" for="exampleFormControlSelect1">Looking
                                    For</label>
                                <select class="form-control form-control-sm" id="exampleFormControlSelect1">
                                    <option>Bride</option>
                                    <option>Groom</option>
                                </select>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label class="col-form-label col-form-label-sm" for="exampleFormControlSelect1">Age
                                        Range</label>
                                    <select class="form-control form-control-sm" id="exampleFormControlSelect1">
                                        <option value="" selected>21</option>
                                        <option value="">22</option>
                                        <option value="">23</option>
                                        <option value="">24</option>
                                        <option value="">25</option>
                                        <option value="">26</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="col-form-label col-form-label-sm"
                                        for="exampleFormControlSelect1">&nbsp;</label>
                                    <select class="form-control form-control-sm" id="exampleFormControlSelect1">
                                        <option value="">21</option>
                                        <option value="">22</option>
                                        <option value="">23</option>
                                        <option value="">24</option>
                                        <option value="">25</option>
                                        <option value="" selected>26</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label col-form-label-sm" for="religion">Religion</label>
                                <select class="form-control form-control-sm" id="religion" name="religion">
                                    <option value="">Select</option>
                                    <option value="1">Anglican</option>
                                    <option value="2">Atheist</option>
                                    <option value="3">Baptist</option>
                                    <option value="4">Buddhist/Taoist</option>
                                    <option value="5">Christian(Catholic)</option>
                                    <option value="6">Christian(Other)</option>
                                    <option value="7">Christian(Protestant)</option>
                                    <option value="8">Evengelical</option>
                                    <option value="9">Hindu</option>
                                    <option value="10">Jain</option>
                                    <option value="11">Jewish</option>
                                    <option value="13">Mormon/Lds</option>
                                    <option value="14">Muslim</option>
                                    <option value="19">Sikh</option>
                                    <option value="20">Spiritual But Not Religious</option>
                                    <option value="15">Not Religious</option>
                                    <option value="21">Other</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label col-form-label-sm" for="profile_id">Profile ID</label>
                                <input type="text" class="form-control form-control-sm" id="profile_id"
                                    name="profile_id" />
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Search Profile</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h1 class="text-center text-white mt-0 cool-font">Your love story begins from here <i>!</i> </h1>
                    <hr class="divider my-4" />
                    <p class="text-center text-white mt-0">
                        <button class="btn btn-sm btn-primary">Create Profile</button> Or
                        <button class="btn btn-sm btn-dark">Send Us</button> your info to let us create.
                    </p>
                </div>
                {{-- <div class="col-lg-10 align-self-end">
                    <h1 class="text-uppercase text-white font-weight-bold">Your Favorite Source of Free Bootstrap Themes
                    </h1>
                    <hr class="divider my-4" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 font-weight-light mb-5">Start Bootstrap can help you build better websites
                        using the Bootstrap framework! Just download a theme and start customizing, no strings attached!
                    </p>
                    <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>
                </div> --}}
            </div>
        </div>
    </header>
    <!-- About-->
    <section class="page-section bg-primary" id="about">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white cool-font">How does it work?</h2>
                    <hr class="divider light my-4" />
                    <p class="text-white mb-4">Start Bootstrap has everything you need to get your new website up and
                        running in no time! Choose one of our open source, free to download, and easy to use themes! No
                        strings attached!</p>
                    <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container">
            <h2 class="text-center mt-0 cool-font">At Your Service</h2>
            <hr class="divider my-4" />
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <i class="fas fa-4x fa-gem text-primary mb-4"></i>
                        <h3 class="h4 mb-2">Sturdy Themes</h3>
                        <p class=" mb-0">Our themes are updated regularly to keep them bug free!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <i class="fas fa-4x fa-laptop-code text-primary mb-4"></i>
                        <h3 class="h4 mb-2">Up to Date</h3>
                        <p class=" mb-0">All dependencies are kept current to keep things fresh.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <i class="fas fa-4x fa-globe text-primary mb-4"></i>
                        <h3 class="h4 mb-2">Ready to Publish</h3>
                        <p class=" mb-0">You can use this design as is, or you can make changes!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <i class="fas fa-4x fa-heart text-primary mb-4"></i>
                        <h3 class="h4 mb-2">Made with Love</h3>
                        <p class=" mb-0">Is it really open source if it's not made with love?</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About-->
    <section class="page-section bg-dark" id="review">
        <div class="container">
            <h2 class="text-center text-white cool-font">Happy Matches!</h2>
            <hr class="divider light" />
            <div class="row">
                <div class="col-lg-2 col-md-6 text-center">
                    <img class="rounded-full" width="80%"
                        src="https://images.pexels.com/photos/1417255/pexels-photo-1417255.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                        alt="">
                </div>
                <div class="col-lg-2 col-md-6 text-center">
                    <img class="rounded-full" width="80%"
                        src="https://images.pexels.com/photos/1131575/pexels-photo-1131575.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                        alt="">
                </div>
                <div class="col-lg-2 col-md-6 text-center">
                    <img class="rounded-full" width="80%"
                        src="https://images.pexels.com/photos/1587646/pexels-photo-1587646.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                        alt="">
                </div>
                <div class="col-lg-2 col-md-6 text-center">
                    <img class="rounded-full" width="80%"
                        src="https://images.pexels.com/photos/1464565/pexels-photo-1464565.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                        alt="">
                </div>
                <div class="col-lg-2 col-md-6 text-center">
                    <img class="rounded-full" width="80%"
                        src="https://images.pexels.com/photos/2781104/pexels-photo-2781104.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                        alt="">
                </div>
                <div class="col-lg-2 col-md-6 text-center">
                    <img class="rounded-full" width="80%"
                        src="https://images.pexels.com/photos/3732012/pexels-photo-3732012.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                        alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio-->
    <div id="portfolio">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box"
                        href="https://images.unsplash.com/photo-1583878545126-2f1ca0142714?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60">
                        <img class="img-fluid"
                            src="https://images.unsplash.com/photo-1583878545126-2f1ca0142714?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                            alt="" />
                        <div class="portfolio-box-caption">
                            {{-- <div class="project-category text-white-50">Category</div>
                            <div class="project-name">Project Name</div> --}}
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box"
                        href="https://images.unsplash.com/photo-1587271407850-8d438ca9fdf2?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60">
                        <img class="img-fluid"
                            src="https://images.unsplash.com/photo-1587271407850-8d438ca9fdf2?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                            alt="" />
                        <div class="portfolio-box-caption">
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box"
                        href="https://images.unsplash.com/photo-1583878543723-dcd6ad8bcb3f?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60">
                        <img class="img-fluid"
                            src="https://images.unsplash.com/photo-1583878543723-dcd6ad8bcb3f?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                            alt="" />
                        <div class="portfolio-box-caption">
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box"
                        href="https://images.unsplash.com/photo-1587271636175-90d58cdad458?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60">
                        <img class="img-fluid"
                            src="https://images.unsplash.com/photo-1587271636175-90d58cdad458?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                            alt="" />
                        <div class="portfolio-box-caption">
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box"
                        href="https://images.unsplash.com/photo-1583878544826-8f8c418033ed?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60">
                        <img class="img-fluid"
                            src="https://images.unsplash.com/photo-1583878544826-8f8c418033ed?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                            alt="" />
                        <div class="portfolio-box-caption">
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box"
                        href="https://images.unsplash.com/flagged/photo-1572534779127-b64758946728?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60">
                        <img class="img-fluid"
                            src="https://images.unsplash.com/flagged/photo-1572534779127-b64758946728?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                            alt="" />
                        <div class="portfolio-box-caption p-3">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="cool-font">Let's Get In Touch!</h2>
                    <hr class="divider my-4" />
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 ml-auto text-right mb-5 mb-lg-0">
                    <div>+1 (555) 123-4567 <i class="fas fa-phone text-muted"></i></div>
                    <div>
                        <a class="d-block" href="mailto:contact@yourwebsite.com">
                            contact@yourwebsite.com
                            <i class="fas fa-envelope text-muted"></i>
                        </a>
                    </div>
                    <div>
                        21B Baker Street, Gotham, Uganda &nbsp;<i class="fas fa-map-marker-alt text-muted"></i>
                    </div>
                </div>
                <div class="col-lg-4 mr-auto text-left">
                    <a href="#!">FAQ</a> <br>
                    <a href="#!">About</a> <br>
                    <a href="#!">Terms & Condition</a> <br>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="bg-light py-5">
        <div class="container">
            <div class="small text-center text-muted">Copyright © 2020 - Matrimony</div>
            <div class="small text-center text-muted">Made with <i class="fa fa-heart"></i> <a
                    href="https://www.appxor.com">appXor</a></div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('assets/web/js/scripts.js') }}"></script>
</body>

</html>