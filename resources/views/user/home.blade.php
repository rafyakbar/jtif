@extends('layouts.userlayout')

@section('title',"Web Jurusan Teknik Informatika")

@section('content')
<div class="section" id="carousel">
    <div class="col">
        <h4>Carousel</h4>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block" src="{{ asset('user/img/bg1.jpg') }}" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Nature, United States</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block" src="{{ asset('user/img/bg3.jpg') }}" alt="Second slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Somewhere Beyond, United States</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block" src="{{ asset('user/img/bg4.jpg') }}" alt="Third slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Yellowstone National Park, United States</h5>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <i class="now-ui-icons arrows-1_minimal-left"></i>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <i class="now-ui-icons arrows-1_minimal-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section">
    <div class="container text-center">
        <div class="row justify-content-md-center">
            <div class="col-md-12 col-lg-8">
                <h2 class="title">Completed with examples</h2>
                <h5 class="description">The kit comes with three pre-built pages to help you get started faster. You can change the text and images and you're good to go. More importantly, looking at them will give you a picture of what you can built with this powerful Bootstrap 4 ui kit.</h5>
            </div>
        </div>
    </div>
</div>
<div class="section section-signup" style="background-image: url('{{ asset('user/img/bg11.jpg') }}'); background-size: cover; background-position: top center; min-height: 700px;">
    <div class="container">
        <div class="row">
            <div class="card card-signup" data-background-color="orange">
                <form class="form" method="" action="">
                    <div class="header text-center">
                        <h4 class="title title-up">Sign Up</h4>
                        <div class="social-line">
                            <a href="#pablo" class="btn btn-neutral btn-facebook btn-icon btn-round">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                            <a href="#pablo" class="btn btn-neutral btn-twitter btn-icon btn-lg btn-round">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="#pablo" class="btn btn-neutral btn-google btn-icon btn-round">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="input-group form-group-no-border">
                                        <span class="input-group-addon">
                                            <i class="now-ui-icons users_circle-08"></i>
                                        </span>
                            <input type="text" class="form-control" placeholder="First Name...">
                        </div>
                        <div class="input-group form-group-no-border">
                                        <span class="input-group-addon">
                                            <i class="now-ui-icons text_caps-small"></i>
                                        </span>
                            <input type="text" placeholder="Last Name..." class="form-control" />
                        </div>
                        <div class="input-group form-group-no-border">
                                        <span class="input-group-addon">
                                            <i class="now-ui-icons ui-1_email-85"></i>
                                        </span>
                            <input type="text" class="form-control" placeholder="Email...">
                        </div>
                        <!-- If you want to add a checkbox to this form, uncomment this code -->
                        <!-- <div class="checkbox">
                          <input id="checkboxSignup" type="checkbox">
                              <label for="checkboxSignup">
                              Unchecked
                              </label>
                            </div> -->
                    </div>
                    <div class="footer text-center">
                        <a href="#pablo" class="btn btn-neutral btn-round btn-lg">Get Started</a>
                    </div>
                </form>
            </div>
        </div>
        <div class="col text-center">
            <a href="examples/login-page.html" class="btn btn-simple btn-round btn-white btn-lg" target="_blank">View Login Page</a>
        </div>
    </div>
</div>
<div class="section section-examples" data-background-color="black">
    <div class="space-50"></div>
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <a href="examples/landing-page.html" target="_blank">
                    <img src="assets/img/landing.jpg" alt="Image" class="img-raised">
                </a>
                <a href="examples/landing-page.html" class="btn btn-simple btn-primary btn-round">View Landing Page</a>
            </div>
            <div class="col">
                <a href="examples/profile-page.html" target="_blank">
                    <img src="assets/img/profile.jpg" alt="Image" class="img-raised">
                </a>
                <a href="examples/profile-page.html" class="btn btn-simple btn-primary btn-round">View Profile Page</a>
            </div>
        </div>
    </div>
</div>
<div class="section section-download" id="#download-section" data-background-color="black">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="text-center col-md-12 col-lg-8">
                <h3 class="title">Do you love this Bootstrap 4 UI Kit?</h3>
                <h5 class="description">Cause if you do, it can be yours for FREE. Hit the button below to navigate to Creative Tim or Invision where you can find the kit in HTML or Sketch/PSD format. Start a new project or give an old Bootstrap project a new look!</h5>
            </div>
            <div class="text-center col-md-12 col-lg-8">
                <a href="https://www.creative-tim.com/product/now-ui-kit" class="btn btn-primary btn-lg btn-round" role="button">
                    Download HTML
                </a>
                <a href="https://www.invisionapp.com/now" target="_blank" class="btn btn-primary btn-lg btn-simple btn-round" role="button">
                    Download PSD/Sketch
                </a>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="row text-center mt-5">
            <div class="col-md-8 ml-auto mr-auto">
                <h2>Want more?</h2>
                <h5 class="description">We've just launched
                    <a href="http://demos.creative-tim.com/now-ui-kit-pro/presentation.html" target="_blank">Now UI Kit PRO</a>. It has a huge number of components, sections and example pages. Start Your Development With A Badass Bootstrap 4 UI Kit.</h5>
            </div>
            <div class="col-md-12">
                <a href="http://demos.creative-tim.com/now-ui-kit-pro/presentation.html" class="btn btn-neutral btn-round btn-lg" target="_blank">
                    <i class="now-ui-icons arrows-1_share-66"></i> Upgrade to PRO
                </a>
            </div>
        </div>
        <br>
        <br>
        <div class="row justify-content-md-center sharing-area text-center">
            <div class="text-center col-md-12 col-lg-8">
                <h3>Thank you for supporting us!</h3>
            </div>
            <div class="text-center col-md-12 col-lg-8">
                <a target="_blank" href="https://www.twitter.com/creativetim" class="btn btn-neutral btn-icon btn-twitter btn-round btn-lg" rel="tooltip" title="Follow us">
                    <i class="fa fa-twitter"></i>
                </a>
                <a target="_blank" href="https://www.facebook.com/creativetim" class="btn btn-neutral btn-icon btn-facebook btn-round btn-lg" rel="tooltip" title="Like us">
                    <i class="fa fa-facebook-square"></i>
                </a>
                <a target="_blank" href="https://www.linkedin.com/company-beta/9430489/" class="btn btn-neutral btn-icon btn-linkedin btn-lg btn-round" rel="tooltip" title="Follow us">
                    <i class="fa fa-linkedin"></i>
                </a>
                <a target="_blank" href="https://github.com/creativetimofficial/now-ui-kit" class="btn btn-neutral btn-icon btn-github btn-round btn-lg" rel="tooltip" title="Star on Github">
                    <i class="fa fa-github"></i>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection