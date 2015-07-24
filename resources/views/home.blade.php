@extends('main')

@section('content')
<!-- Intro with Video -->
            <div class="js-video-bg" style="height: 420px;">
                <section class="site-section site-section-light site-section-top">
                    <div class="container">
                        <h1 class="text-center animation-slideDown"><strong>An amazing wiki software for personal or corporate use</strong></h1>
                        <h2 class="text-center animation-slideUp push hidden-xs">Bring your project to life with WiKee!</h2>
                    </div>
                    <div class="site-block text-center">
                        <a href="/signup" class="btn btn-lg btn-success"><i class="fa fa-newspaper-o"></i> Get Started Now!</a>

                    </div>
                </section>
            </div>
            <!-- END Intro with Video -->

            <!-- Promo #1 -->
            <section class="site-content site-section site-slide-content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 site-block visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInRight" data-element-offset="-180">
                            <img src="img/placeholders/screenshots/promo_desktop_left.png" alt="Promo #1" class="img-responsive">
                        </div>
                        <div class="col-sm-6 col-md-5 col-md-offset-1 site-block visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInLeft" data-element-offset="-180">
                            <h3 class="h2 site-heading site-heading-promo">Easily Create New <strong>Content</strong></h3>
                            <p class="promo-content"> Users can easily create and modify content to in <strong>spaces</strong> they belong to.</p>
                        </div>
                    </div>
                    <hr>
                </div>
            </section>
            <!-- END Promo #1 -->

            <!-- Promo #2 -->
            <section class="site-content site-section site-slide-content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-5 site-block visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInRight" data-element-offset="-180">
                            <h3 class="h2 site-heading site-heading-promo">Create separate<strong> Spaces</strong></h3>
                            <p class="promo-content">With <strong>spaces</strong> users can separate content by departments or categories with ease.</p>
                        </div>
                        <div class="col-sm-6 col-md-offset-1 site-block visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInLeft" data-element-offset="-180">
                            <img src="img/placeholders/screenshots/promo_desktop_right.png" alt="Promo #2" class="img-responsive">
                        </div>
                    </div>
                    <hr>
                </div>
            </section>
            <!-- END Promo #2 -->

            <!-- Promo #3 -->
            <section class="site-content site-section site-slide-content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 site-block visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInRight" data-element-offset="-180">
                            <img src="img/placeholders/screenshots/promo_tablet.png" alt="Promo #3" class="img-responsive">
                        </div>
                        <div class="col-sm-6 col-md-5 col-md-offset-1 site-block visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInLeft" data-element-offset="-180">
                            <h3 class="h2 site-heading site-heading-promo">Fully<strong> Responsive</strong></h3>
                            <p class="promo-content">The User Interface will work on any device - mobile phones, tablets, laptops and desktops. You can focus on creating the project you want. <a href="features.html">Learn More..</a></p>
                        </div>
                    </div>
                    <hr>
                </div>
            </section>
            <!-- END Promo #3 -->

            <!-- Testimonials -->
            <section class="site-content site-section">
                <div class="container">
                    <!-- Testimonials Carousel -->
                    <div id="testimonials-carousel" class="carousel slide carousel-html" data-ride="carousel" data-interval="4000">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#testimonials-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#testimonials-carousel" data-slide-to="1"></li>
                            <li data-target="#testimonials-carousel" data-slide-to="2"></li>
                        </ol>
                        <!-- END Indicators -->

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner text-center">
                            <div class="active item">
                                <p>
                                    <img src="img/placeholders/avatars/avatar12.jpg" alt="Avatar" class="img-circle">
                                </p>
                                <blockquote class="no-symbol">
                                    <p>An awesome Wiki solution that allowed our virtual company to create transparency with documentation and processes.  </p>
                                    <footer><strong>Sophie Illich</strong>, pixelpoynt.com</footer>
                                </blockquote>
                            </div>
                            <div class="item">
                                <p>
                                    <img src="img/placeholders/avatars/avatar7.jpg" alt="Avatar" class="img-circle">
                                </p>
                                <blockquote class="no-symbol">
                                    <p>I have never imagined that our final product would look that good!</p>
                                    <footer><strong>David Cull</strong>, example.com</footer>
                                </blockquote>
                            </div>
                            <div class="item">
                                <p>
                                    <img src="img/placeholders/avatars/avatar9.jpg" alt="Avatar" class="img-circle">
                                </p>
                                <blockquote class="no-symbol">
                                    <p>An extraordinary service that helped us grow way too fast!</p>
                                    <footer><strong>Nathan Brown</strong>, example.com</footer>
                                </blockquote>
                            </div>
                        </div>
                        <!-- END Wrapper for slides -->
                    </div>
                    <!-- END Testimonials Carousel -->
                </div>
            </section>
            <!-- END Testimonials -->

            <!-- Sign Up Action -->
            <section class="site-content site-section site-section-light themed-background-dark-night">
                <div class="container">
                    <h3 class="site-heading text-center"><strong>Sign Up Today</strong> and receive <strong>30% discount</strong>!</h3>
                    <div class="site-block text-center">
                        <form action="features.html" method="post" class="form-horizontal" onsubmit="return false;">
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <label class="sr-only" for="register-email">Your Email</label>
                                    <div class="input-group input-group-lg">
                                        <input type="email" id="register-email" name="register-email" class="form-control" placeholder="Your Email..">
                                        <div class="input-group-btn">
                                            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Sign Up</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
            <!-- END Sign Up Action -->

            <!-- Quick Stats -->
            <section class="site-content site-section themed-background">
                <div class="container">
                    <!-- Stats Row -->
                    <!-- CountTo (initialized in js/app.js), for more examples you can check out https://github.com/mhuggins/jquery-countTo -->
                    <div class="row" id="counters">
                        <div class="col-sm-4">
                            <div class="counter site-block">
                                <span data-toggle="countTo" data-to="6800" data-after="+"></span>
                                <small>Projects</small>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="counter site-block">
                                <span data-toggle="countTo" data-to="5500" data-after="+"></span>
                                <small>Happy Customers</small>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="counter site-block">
                                <span data-toggle="countTo" data-to="100" data-after="+"></span>
                                <small>New Accounts Today</small>
                            </div>
                        </div>
                    </div>
                    <!-- END Stats Row -->
                </div>
            </section>
            <!-- END Quick Stats -->
@endsection
