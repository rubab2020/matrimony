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

<x-web-layout>
    <!-- Masthead-->
    <header class="pagehead" style="">
        <div class=" h-100">
            <div class="row h-100 align-items-center justify-content-center" style="width: 100%;">
                <div class="col-lg-6">
                    <h1  class="text-center text-white mt-0 cool-font"><span id="pagetitle">{{ $page->title }}</span></h1>
                </div>
            </div>
        </div>
    </header>
    <!-- Services-->
    <section class="page-section" id="page-content">
        <div class="container">
           {!! $page->content !!}
            
        </div>
    </section>
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
                            </a>
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