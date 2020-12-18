@section('style')
<style>
    #mainNav {
        box-shadow: none;
        background-color: transparent;
    }

    @media (min-width: 992px) {
        #mainNav {
            box-shadow: none;
            background-color: rgba(0, 0, 0, 0.5);
        }

        #mainNav .navbar-brand {
            color: rgba(255, 255, 255, 0.7);
        }

        #mainNav .navbar-nav .nav-item .nav-link {
            color: rgba(255, 255, 255, 0.7);
        }

        #mainNav .navbar-brand:hover {
            color: #fff;
        }

        #mainNav .navbar-nav .nav-item .nav-link:hover {
            color: #fff;
        }
    }
</style>
@endsection

<x-web-layout>
    <!-- Masthead-->
    <header class="masthead" style="">
        <div class=" h-100">
            <div class="row h-100 align-items-center justify-content-center" style="width: 100%;">
                <div class="col-lg-3">
                    <div id="home-search-form">
                        <form action="{{ url('/search') }}">
                            <div class="form-group">
                                <label class="col-form-label col-form-label-sm" for="exampleFormControlSelect1">
                                    Looking For
                                </label>
                                <select name="candidate_type" class="form-control form-control-sm">
                                    <option value="female">Bride</option>
                                    <option value="male">Groom</option>
                                </select>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label class="col-form-label col-form-label-sm" for="exampleFormControlSelect1">
                                        Age Range
                                    </label>
                                    {!! Form::select('expect_age_start', [""=>'Select']+$ages, null, ['class'=>'form-control form-control-sm']) !!}
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="col-form-label col-form-label-sm" for="exampleFormControlSelect1">&nbsp;</label>
                                    {!! Form::select('expect_age_end', [""=>'Select']+$ages, null, ['class'=>'form-control form-control-sm']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label col-form-label-sm" for="religion">Religion</label>
                                {!! Form::select('religion', [""=>'Select']+$religions, null, ['class'=>'form-control form-control-sm']) !!}
                            </div>
                            <div class="form-group">
                                <label class="col-form-label col-form-label-sm" for="profile_id">Profile ID</label>
                                <input type="text" class="form-control form-control-sm" id="profile_id"
                                    name="profile_id" />
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm btn-block">Search Profile</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h1 class="text-center text-white mt-0 cool-font">Your love story begins from here <i>!</i> </h1>
                    <hr class="divider my-4" />
                    <p class="text-center text-white mt-0">
                        <a href="/register"><button class="btn btn-sm btn-primary">Create Profile</button></a> Or
                        <button class="btn btn-sm btn-dark" data-toggle="modal" data-target="#sendUsModal">Send
                            Us</button> your info to let us create.
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

    <!-- Send Us Modal -->
    <div class="modal fade" id="sendUsModal" tabindex="-1" role="dialog" aria-labelledby="sendUsModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="sendUsModalLabel">Send Your Profile Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ul>
                        <li>
                            Please downlaod <button class="btn btn-primary btn-sm">this form</button>
                        </li>
                        <li>
                            Fill Up the form and send it back to <a href="mailto:info@matrimony.com">
                                info@matrimony.com
                            </a> or to our messanger fb.com/matrimony
                        </li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    </x-admin-layout>