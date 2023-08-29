<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- plugins -->
    <link rel="stylesheet" href="{{ assets('frontend/css/plugins.css') }}">
    <!-- search css -->
    <link rel="stylesheet" href="{{ assets('frontend/search/search.css') }}">
    <!-- quform css -->
    <link rel="stylesheet" href="{{ assets('frontend/quform/css/base.css') }}">
    <!-- theme core css -->
    <link rel="stylesheet" href="{{ assets('frontend/css/styles.css') }}">

</head>
<body>

                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest



                           <!-- MAIN WRAPPER
    ================================================== -->
    <div class="main-wrapper">

        <!-- HEADER
        ================================================== -->
        <header class="transparent-header bg-transparent">

            <div class="navbar-default">

                <!-- start top search -->
                <div class="top-search bg-black-opacity-light">
                    <div class="container lg-container">
                        <form class="search-form" action="https://amava.websitelayout.net/search.html" method="GET" accept-charset="utf-8">
                            <div class="input-group">
                                <span class="input-group-addon cursor-pointer">
                                    <button class="search-form_submit fas fa-search text-white" type="submit"></button>
                                </span>
                                <input type="text" class="search-form_input form-control" name="s" autocomplete="off" placeholder="Type & hit enter...">
                                <span class="input-group-addon close-search"><i class="fas fa-times mt-2"></i></span>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end top search -->

                <div class="container lg-container">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-12">
                            <div class="menu_area alt-font">
                                <nav class="navbar navbar-expand-lg navbar-light p-0">

                                    <div class="navbar-header navbar-header-custom">
                                        <!-- start logo -->
                                        <a href="index.html" class="navbar-brand"><img id="logo" src="img/logos/logo.png" alt="logo"></a>
                                        <!-- end logo -->
                                    </div>

                                    <div class="navbar-toggler"></div>

                                    <!-- start menu area -->
                                    <ul class="navbar-nav ms-auto" id="nav" style="display: none;">
                                        <li><a href="#!">Home</a></li>
                                        <li><a href="#!">Pages</a>
                                            <ul>
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="our-team.html">Our Team</a></li>
                                                <li><a href="faq.html">FAQ</a></li>
                                                <li><a href="contact.html">Contact Us</a></li>
                                                <li><a href="#!">Case Studies</a>
                                                    <ul>
                                                        <li><a href="case-studies.html">Case Studies</a></li>
                                                        <li><a href="case-studies-2.html">Case Studies2</a></li>
                                                        <li><a href="case-study-detail.html">Case Studies Detail</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#!">Job Detail</a>
                                                    <ul>
                                                        <li><a href="job-listing.html">Job Listing</a></li>
                                                        <li><a href="job-detail.html">Job Detail</a></li>
                                                        <li><a href="apply-job.html">Apply Job</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#!">Portfolio</a>
                                                    <ul>
                                                        <li><a href="portfolio.html">Portfolio</a></li>
                                                        <li><a href="portfolio-style2.html">Portfolio Style2</a></li>
                                                        <li><a href="portfolio-style3.html">Portfolio Style3</a></li>
                                                        <li><a href="portfolio-style4.html">Portfolio Style4</a></li>
                                                        <li><a href="portfolio-single.html">Single Portfolio</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#!">Account</a>
                                                    <ul>
                                                        <li><a href="login.html">Login</a></li>
                                                        <li><a href="login-cover.html">Login Cover</a></li>
                                                        <li><a href="register.html">Register</a></li>
                                                        <li><a href="register-cover.html">Register Cover</a></li>
                                                        <li><a href="password-recovery.html">Reset Password</a></li>
                                                        <li><a href="password-recovery-cover.html">Reset Password Cover</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#!">Others</a>
                                                    <ul>
                                                        <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                                        <li><a href="404.html">404 Style1</a></li>
                                                        <li><a href="404-page.html">404 Style2</a></li>
                                                        <li><a href="coming-soon.html">Comingsoon Style1</a></li>
                                                        <li><a href="coming-soon1.html">Comingsoon Style2</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#!">Services</a>
                                            <ul>
                                                <li><a href="service-1.html">Service 01</a></li>
                                                <li><a href="service-2.html">Service 02</a></li>
                                                <li><a href="service-3.html">Service 03</a></li>
                                                <li><a href="service-4.html">Service 04</a></li>
                                                <li><a href="service-5.html">Service 05</a></li>
                                                <li><a href="service-6.html">Service 06</a></li>
                                                <li><a href="service-7.html">Service 07</a></li>
                                                <li><a href="service-8.html">Service 08</a></li>
                                                <li><a href="service-detail.html">Service Detail</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#!">Elements</a>
                                            <ul class="row megamenu">
                                                <li class="col-lg-3">
                                                    <span class="mb-0 mb-lg-2 d-block py-2 p-lg-0 px-4 px-lg-0 text-uppercase sub-title font-weight-600 display-30">Elements 01</span>
                                                    <ul>
                                                        <li><a href="accordions.html"><i class="fas fa-sliders-h me-2"></i>Accordions</a></li>
                                                        <li><a href="alerts.html"><i class="far fa-bell me-2"></i>Alerts</a></li>
                                                        <li><a href="blockquotes.html"><i class="fas fa-vector-square me-2"></i>Blockquote</a></li>
                                                        <li><a href="buttons.html"><i class="fas fa-link me-2"></i>Buttons</a></li>
                                                        <li><a href="call-to-action.html"><i class="far fa-square me-2"></i>Call to Action</a></li>
                                                        <li><a href="carousel-slider.html"><i class="far fa-images me-2"></i>Carousel Slider</a></li>
                                                    </ul>
                                                </li>
                                                <li class="col-lg-3">
                                                    <span class="mb-0 mb-lg-2 d-block py-2 p-lg-0 px-4 px-lg-0 text-uppercase sub-title font-weight-600 display-30">Elements 02</span>
                                                    <ul>
                                                        <li><a href="count-down.html"><i class="far fa-flag me-2"></i>Count Down</a></li>
                                                        <li><a href="counter.html"><i class="fas fa-compress me-2"></i>Counters</a></li>
                                                        <li><a href="dropcaps.html"><i class="far fa-closed-captioning me-2"></i>Dropcaps</a></li>
                                                        <li><a href="form-elements.html"><i class="fas fa-cubes me-2"></i>Form Elements</a></li>
                                                        <li><a href="font-icons.html"><i class="far fa-check-square me-2"></i>Font Icons</a></li>
                                                        <li><a href="highlights.html"><i class="fas fa-highlighter me-2"></i>Highlights</a></li>
                                                    </ul>
                                                </li>
                                                <li class="col-lg-3">
                                                    <span class="mb-0 mb-lg-2 d-block py-2 p-lg-0 px-4 px-lg-0 text-uppercase sub-title font-weight-600 display-30">Elements 03</span>
                                                    <ul>
                                                        <li><a href="icon-with-text.html"><i class="fab fa-fonticons-fi me-2"></i>Icon With Text</a></li>
                                                        <li><a href="list-styles.html"><i class="fas fa-list-ul me-2"></i>List Styles</a></li>
                                                        <li><a href="media-object.html"><i class="fas fa-photo-video me-2"></i>Media Object</a></li>
                                                        <li><a href="modal.html"><i class="fas fa-expand me-2"></i>Modal</a></li>
                                                        <li><a href="pagination.html"><i class="far fa-caret-square-right me-2"></i>Pagination</a></li>
                                                        <li><a href="progress-bar.html"><i class="fas fa-tasks me-2"></i>Progress Bars</a></li>
                                                    </ul>
                                                </li>
                                                <li class="col-lg-3">
                                                    <span class="mb-0 mb-lg-2 d-block py-2 p-lg-0 px-4 px-lg-0 text-uppercase sub-title font-weight-600 display-30">Elements 04</span>
                                                    <ul>
                                                        <li><a href="process.html"><i class="fas fa-share-square me-2"></i>Process</a></li>
                                                        <li><a href="pricing.html"><i class="fas fa-clipboard-list me-2"></i>Pricing</a></li>
                                                        <li><a href="tables.html"><i class="fas fa-table me-2"></i>Tables</a></li>
                                                        <li><a href="tabs.html"><i class="fas fa-server me-2"></i>Tabs</a></li>
                                                        <li><a href="typography.html"><i class="fas fa-text-height me-2"></i>Typography</a></li>
                                                        <li><a href="videos.html"><i class="fas fa-video me-2"></i>Videos</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#!">Shop</a>
                                            <ul>
                                                <li><a href="shop-product-grid.html">Product Grid</a></li>
                                                <li><a href="shop-product-grid-sidebar.html">Product Grid - Sidebar</a></li>
                                                <li><a href="shop-product-list.html">Product List</a></li>
                                                <li><a href="shop-product-details.html">Product Details</a></li>
                                                <li><a href="shop-cart.html">Shop Cart</a></li>
                                                <li><a href="shop-checkout.html">Shop Checkout</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#!">Blog</a>
                                            <ul>
                                                <li><a href="blog-grid.html">Blog Grid</a></li>
                                                <li><a href="blog-default.html">Blog Default</a></li>
                                                <li><a href="blog-post.html">Blog Post</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <!-- end menu area -->

                                    <!-- start attribute navigation -->
                                    <div class="attr-nav">
                                        <ul>
                                            <li class="dropdown me-3 me-lg-0">
                                                <a href="#" class="dropdown-toggle"  id="dropdownMenuLink" data-bs-toggle="dropdown">
                                                    <i class="fas fa-shopping-cart"></i>
                                                    <span class="badge bg-primary">3</span>
                                                </a>
                                                <ul class="dropdown-menu cart-list">
                                                    <li>
                                                        <a href="#!" class="photo"><img src="img/shop/cart-thumb01.jpg" class="cart-thumb" alt="..."></a>
                                                        <h6><a href="#!">Sneakers Shoe </a></h6>
                                                        <p>2x - <span class="price">$99.99</span></p>
                                                    </li>
                                                    <li>
                                                        <a href="#!" class="photo"><img src="img/shop/cart-thumb02.jpg" class="cart-thumb" alt="..."></a>
                                                        <h6><a href="#!">Digital Watch</a></h6>
                                                        <p>1x - <span class="price">$33.33</span></p>
                                                    </li>
                                                    <li>
                                                        <a href="#!" class="photo"><img src="img/shop/cart-thumb03.jpg" class="cart-thumb" alt="..."></a>
                                                        <h6><a href="#!">Headphones</a></h6>
                                                        <p>2x - <span class="price">$99.99</span></p>
                                                    </li>
                                                    <li class="total bg-primary">
                                                        <span class="pull-left"><strong>Total</strong>: $233.31</span>
                                                        <a href="#!" class="butn small btn-cart white"><span>View Cart</span></a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="search"><a href="#!"><i class="fas fa-search"></i></a></li>
                                        </ul>
                                    </div>
                                    <!-- end attribute navigation -->

                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </header>

        <!-- BANNER
        ================================================== -->
        <section class="main-banner-style06 full-screen p-0 header-position">

            <!-- start corner shape -->
            <div class="right-bottom-bg"><img src="img/banner/shape-4.png" alt="..."></div>
            <!-- end corner shape -->

            <div class="stratup-image">
                <img src="img/content/content-13.svg" alt="...">
            </div>

            <div class="container lg-container d-flex flex-column">

                <div class="row align-items-center min-vh-100">
                    <div class="col-lg-6 z-index-2">
                        <h1>Amava <strong>Startup Agency</strong> template</h1>
                        <p class="lead mb-1-6">We make it a priority to offer flexible results and data to include your must needs do it.</p>
                        <a href="#!" class="butn style-one fill">Get Started</a>
                    </div>

                </div>

            </div>

        </section>

        <!-- SERVICES
        ================================================== -->
        <section class="pt-0">
            <div class="container">

                <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-6">
                    <h2 class="line-title">Core Services</h2>
                </div>
                <div class="row mt-n1-9">

                    <div class="col-md-6 col-lg-4 mt-1-9">
                        <div class="card card-style02 green">
                            <div class="card-body">
                                <span class="icon"><i class="ti-save"></i></span>
                                <h3 class="h5">Exclusive Design</h3>
                                <p>We provide quick and detailed answers for your awesome business.</p>
                                <a href="#!">read more<i class="ti-arrow-right align-middle ms-2"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mt-1-9">
                        <div class="card card-style02 fill">
                            <div class="card-body">
                                <span class="icon"><i class="ti-lock"></i></span>
                                <h3 class="h5">Responsive layout</h3>
                                <p>We provide quick and detailed answers for your awesome business.</p>
                                <a href="#!">read more<i class="ti-arrow-right align-middle ms-2"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mt-1-9">
                        <div class="card card-style02 orange">
                            <div class="card-body">
                                <span class="icon"><i class="ti-vector"></i></span>
                                <h3 class="h5">Easy to Customize</h3>
                                <p>We provide quick and detailed answers for your awesome business.</p>
                                <a href="#!">read more<i class="ti-arrow-right align-middle ms-2"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- ABOUT
        ================================================== -->
        <section class="bg-grey">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-5 mb-lg-0 text-center text-lg-start">
                        <div class="px-3 px-md-5 px-lg-0">
                            <img src="img/content/content-19.svg" alt="...">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ps-lg-5">
                            <h2 class="mb-4">A quality app no matter what your idea is about.</h2>
                            <p class="display-28 mb-5">No matter the size of your business, you will be able to benefit for any kinds of idea.</p>
                            <ul class="list-unstyled m-0 p-0">
                                <li class="mb-6">
                                    <div class="d-flex">
                                        <div class="me-4">
                                            <i class="ti-check text-success"></i>
                                        </div>
                                        <div class="w-100">
                                            <h5 class="mb-3">The Easiest Way</h5>
                                            <p class="m-0">We help you create and manage all successful use content can make your project come true.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="align-items-top d-inline-flex text-start shadow py-3 px-4 rounded-lg bg-white">
                                <div class="sm-avatar">
                                    <img src="img/avatar/avatar-03.jpg" class="rounded-circle" alt="...">
                                </div>
                                <div class="ms-3 font-weight-500">“Everything you need - all in one theme.”
                                    <span class="d-block text-primary display-31">- John Doe</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FEATURES
        ================================================== -->
        <section class="parallax primary-overlay-solid" data-overlay-dark="85" data-background="img/bg/bg-01.jpg">
            <div class="container">

                <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-6">
                    <h2 class="line-title white">Key Features</h2>
                </div>

                <div class="row mt-n2-9">
                    <div class="col-md-6 col-lg-4 mt-2-9">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <i class="ti-pencil-alt text-white display-20"></i>
                            </div>
                            <div class="flex-grow-1 ms-4">
                                <h3 class="h5 text-white font-weight-500 mb-3">Unique & Adaptable</h3>
                                <p class="mb-0 text-white-90 font-weight-300">We serve our service to all the world. Our customers are very happy with services.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-2-9">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <i class="ti-ruler-alt-2 text-white display-20"></i>
                            </div>
                            <div class="flex-grow-1 ms-4">
                                <h3 class="h5 text-white font-weight-500 mb-3">Best Performance</h3>
                                <p class="mb-0 text-white-90 font-weight-300">We serve our service to all the world. Our customers are very happy with services.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-2-9">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <i class="ti-layers text-white display-20"></i>
                            </div>
                            <div class="flex-grow-1 ms-4">
                                <h3 class="h5 text-white font-weight-500 mb-3">Easily Control</h3>
                                <p class="mb-0 text-white-90 font-weight-300">We serve our service to all the world. Our customers are very happy with services.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-2-9">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <i class="ti-bar-chart text-white display-20"></i>
                            </div>
                            <div class="flex-grow-1 ms-4">
                                <h3 class="h5 text-white font-weight-500 mb-3">Fully Secured</h3>
                                <p class="mb-0 text-white-90 font-weight-300">We serve our service to all the world. Our customers are very happy with services.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-2-9">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <i class="ti-files text-white display-20"></i>
                            </div>
                            <div class="flex-grow-1 ms-4">
                                <h3 class="h5 text-white font-weight-500 mb-3">Team Collaboration</h3>
                                <p class="mb-0 text-white-90 font-weight-300">We serve our service to all the world. Our customers are very happy with services.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-2-9">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <i class="ti-server text-white display-20"></i>
                            </div>
                            <div class="flex-grow-1 ms-4">
                                <h3 class="h5 text-white font-weight-500 mb-3">Guaranteed Support</h3>
                                <p class="mb-0 text-white-90 font-weight-300">We serve our service to all the world. Our customers are very happy with services.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- TEAM
        ================================================== -->
        <section class="bg-grey">
            <div class="container">
                <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-6">
                    <h2 class="line-title">Creative Team</h2>
                </div>

                <div class="row mt-n5">
                    <div class="col-sm-6 col-lg-3 mt-5">
                        <div class="team-style04">
                            <div class="team-thumb">
                                <img src="img/team/team-05.jpg" alt="...">
                            </div>
                            <div class="team-details text-center rounded">
                                <div class="py-4 px-1">
                                    <h5 class="mb-1 h6">Elmer Chavez</h5>
                                    <span class="display-30">Founder</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mt-5">
                        <div class="team-style04">
                            <div class="team-thumb">
                                <img src="img/team/team-06.jpg" alt="...">
                            </div>
                            <div class="team-details text-center rounded">
                                <div class="py-4 px-1">
                                    <h5 class="mb-1 h6">Elmira Milani</h5>
                                    <span class="display-30">Co-Founder</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mt-5">
                        <div class="team-style04">
                            <div class="team-thumb">
                                <img src="img/team/team-07.jpg" alt="...">
                            </div>
                            <div class="team-details text-center rounded">
                                <div class="py-4 px-1">
                                    <h5 class="mb-1 h6">Dorcas Laueri</h5>
                                    <span class="display-30">Developer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mt-5">
                        <div class="team-style04">
                            <div class="team-thumb">
                                <img src="img/team/team-08.jpg" alt="...">
                            </div>
                            <div class="team-details text-center rounded">
                                <div class="py-4 px-1">
                                    <h5 class="mb-1 h6">Steven Miloler</h5>
                                    <span class="display-30">Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- TESTIMONIAL
        ================================================== -->
        <section class="testmonial-style08 pb-0">
            <div class="container">

                <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-6">
                    <h2 class="line-title white">Clients Feedback</h2>
                </div>

                <div class="owl-carousel owl-theme">

                    <div class="card shadow-sm p-3 mb-3 bg-white border-0">
                        <div class="card-body">
                            <i class="ti-quote-left text-purple display-16 mb-3 d-block"></i>
                            <p class="mb-2-5">Excepteur sint occaecat non proident, sunt in culpa qui officia deserunt anim id est laborum anim.</p>
                            <div class="d-flex align-items-center">
                                <div class="me-3 bg-purple sm-avatar rounded-circle text-center">
                                    <img src="img/avatar/avatar-13.png" alt="..." class="mt-n2 w-auto mx-auto">
                                </div>
                                <div>
                                    <h6 class="mb-0">Noah Kirk</h6>
                                    <span class="small">Founder</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card shadow-sm p-3 mb-3 bg-white border-0">
                        <div class="card-body">
                            <i class="ti-quote-left text-yellow display-16 mb-3 d-block"></i>
                            <p class="mb-2-5">Excepteur sint occaecat non proident, sunt in culpa qui officia deserunt anim id est laborum anim.</p>
                            <div class="d-flex align-items-center">
                                <div class="me-3 bg-yellow sm-avatar rounded-circle text-center">
                                    <img src="img/avatar/avatar-14.png" alt="..." class="mt-n2 w-auto mx-auto">
                                </div>
                                <div>
                                    <h6 class="mb-0">Holly Faucett</h6>
                                    <span class="small">Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card shadow-sm p-3 mb-3 bg-white border-0">
                        <div class="card-body">
                            <i class="ti-quote-left text-green display-16 mb-3 d-block"></i>
                            <p class="mb-2-5">Excepteur sint occaecat non proident, sunt in culpa qui officia deserunt anim id est laborum anim.</p>
                            <div class="d-flex align-items-center">
                                <div class="me-3 bg-green sm-avatar rounded-circle text-center">
                                    <img src="img/avatar/avatar-15.png" alt="..." class="mt-n2 w-auto mx-auto">
                                </div>
                                <div>
                                    <h6 class="mb-0">Sean Quick</h6>
                                    <span class="small">Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card shadow-sm p-3 mb-3 bg-white border-0">
                        <div class="card-body">
                            <i class="ti-quote-left text-orange display-16 mb-3 d-block"></i>
                            <p class="mb-2-5">Excepteur sint occaecat non proident, sunt in culpa qui officia deserunt anim id est laborum anim.</p>
                            <div class="d-flex align-items-center">
                                <div class="me-3 bg-orange sm-avatar rounded-circle text-center">
                                    <img src="img/avatar/avatar-16.png" alt="..." class="mt-n2 w-auto mx-auto">
                                </div>
                                <div>
                                    <h6 class="mb-0">Luca Benson</h6>
                                    <span class="small">Developer</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card shadow-sm p-3 mb-3 bg-white border-0">
                        <div class="card-body">
                            <i class="ti-quote-left text-blue display-16 mb-3 d-block"></i>
                            <p class="mb-2-5">Excepteur sint occaecat non proident, sunt in culpa qui officia deserunt anim id est laborum anim.</p>
                            <div class="d-flex align-items-center">
                                <div class="me-3 bg-blue sm-avatar rounded-circle text-center">
                                    <img src="img/avatar/avatar-17.png" alt="..." class="mt-n2 w-auto mx-auto">
                                </div>
                                <div>
                                    <h6 class="mb-0">David Monla</h6>
                                    <span class="small">Developer</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- CONTACT
        ================================================== -->
        <section>
            <div class="container">

                <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-6">
                    <h2 class="line-title">Quick Contact</h2>
                </div>

                <div class="row mt-n5">
                    <div class="col-lg-6 mt-5">

                        <!-- start form here -->
                        <form class="quform" action="https://amava.websitelayout.net/quform/contact.php" method="post" enctype="multipart/form-data" onclick="">

                            <div class="quform-elements">

                                <div class="row">

                                    <!-- Begin Text input element -->
                                    <div class="col-md-6">
                                        <div class="quform-element form-group">
                                            <label for="name">Your Name <span class="quform-required">*</span></label>
                                            <div class="quform-input">
                                                <input class="form-control" id="name" type="text" name="name" placeholder="Your name here" />
                                            </div>
                                        </div>

                                    </div>
                                    <!-- End Text input element -->

                                    <!-- Begin Text input element -->
                                    <div class="col-md-6">
                                        <div class="quform-element form-group">
                                            <label for="email">Your Email <span class="quform-required">*</span></label>
                                            <div class="quform-input">
                                                <input class="form-control" type="text" name="email" placeholder="Your email here" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Text input element -->

                                    <!-- Begin Text input element -->
                                    <div class="col-md-6">
                                        <div class="quform-element form-group">
                                            <label for="subject">Your Subject <span class="quform-required">*</span></label>
                                            <div class="quform-input">
                                                <input class="form-control" type="text" name="subject" placeholder="Your subject here" />
                                            </div>
                                        </div>

                                    </div>
                                    <!-- End Text input element -->

                                    <!-- Begin Text input element -->
                                    <div class="col-md-6">
                                        <div class="quform-element form-group">
                                            <label for="phone">Contact Number</label>
                                            <div class="quform-input">
                                                <input class="form-control" id="phone" type="text" name="phone" placeholder="Your phone number" />
                                            </div>
                                        </div>

                                    </div>
                                    <!-- End Text input element -->

                                    <!-- Begin Textarea element -->
                                    <div class="col-md-12">
                                        <div class="quform-element form-group">
                                            <label for="message">Message <span class="quform-required">*</span></label>
                                            <div class="quform-input">
                                                <textarea class="form-control" id="message" name="message" rows="4" placeholder="Tell us a few words"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Textarea element -->

                                    <!-- Begin Captcha element -->
                                    <div class="col-md-12">
                                        <div class="quform-element">
                                            <div class="form-group">
                                                <div class="quform-input">
                                                    <input class="form-control" id="type_the_word" type="text" name="type_the_word" placeholder="Type the below word" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="quform-captcha">
                                                    <div class="quform-captcha-inner">
                                                        <img src="quform/images/captcha/courier-new-light.png" alt="...">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Captcha element -->

                                    <!-- Begin Submit button -->
                                    <div class="col-md-12">
                                        <div class="quform-submit-inner">
                                            <button class="butn style-one fill" type="submit"><span>Submit Comment</span></button>
                                        </div>
                                        <div class="quform-loading-wrap text-start"><span class="quform-loading"></span></div>
                                    </div>
                                    <!-- End Submit button -->

                                </div>

                            </div>

                        </form>
                        <!-- end form here -->

                    </div>
                    <div class="col-lg-6 mt-5">

                        <div id="accordion" class="accordion-style02">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                  How can i purchase this item ?
                                </button>
                                    </h5>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion">
                                    <div class="card-body bg-white">
                                        Tempora incidunt ut labore et dolore exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                                        sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                  Why unique and creative design ?
                                </button>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion">
                                    <div class="card-body bg-white">
                                        Neque porro quisquam est quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                                        sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                  Are you ready to buy this theme ?
                                </button>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordion">
                                    <div class="card-body bg-white pb-0">
                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                                        sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- BLOG
        ================================================== -->
        <section class="bg-grey">
            <div class="container">

                <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-6">
                    <h2 class="line-title">Latest News</h2>
                </div>

                <div class="row blog-card02 mt-n5">
                    <div class="col-md-6 col-lg-4 mt-5">
                        <article class="blog-item">
                            <div class="blog-item-thumbnail">
                                <img src="img/blog/blog-13.jpg" alt="...">
                            </div>

                            <div class="media align-items-center">
                                <div class="blog-meta">
                                    <div class="date-day">08</div>
                                    <div class="date-month">AUG</div>
                                </div>
                                <div class="media-body">
                                    <div class="post-cat">
                                        Software
                                    </div>
                                    <div class="blog-title">
                                        <a href="#!">How combine design and performance?</a>
                                    </div>
                                </div>
                            </div>

                        </article>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-5">
                        <article class="blog-item">
                            <div class="blog-item-thumbnail">
                                <img src="img/blog/blog-14.jpg" alt="...">
                            </div>

                            <div class="media align-items-center">
                                <div class="blog-meta">
                                    <div class="date-day">18</div>
                                    <div class="date-month">SEP</div>
                                </div>
                                <div class="media-body">
                                    <div class="post-cat">
                                        Agency
                                    </div>
                                    <div class="blog-title">
                                        <a href="#!">The progress work of the agency</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-5">
                        <article class="blog-item">
                            <div class="blog-item-thumbnail">
                                <img src="img/blog/blog-15.jpg" alt="...">
                            </div>

                            <div class="media align-items-center">
                                <div class="blog-meta">
                                    <div class="date-day">22</div>
                                    <div class="date-month">OCT</div>
                                </div>
                                <div class="media-body">
                                    <div class="post-cat">
                                        Technology
                                    </div>
                                    <div class="blog-title">
                                        <a href="#!">How to provide instant response</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <!-- PARTNER
        ================================================== -->
        <section class="md">
            <div class="container">
                <div class="owl-carousel owl-theme clients-style2">
                    <div class="item text-center">
                        <img src="img/partners/client-07.png" alt="...">
                    </div>
                    <div class="item text-center">
                        <img src="img/partners/client-08.png" alt="...">
                    </div>
                    <div class="item text-center">
                        <img src="img/partners/client-09.png" alt="...">
                    </div>
                    <div class="item text-center">
                        <img src="img/partners/client-10.png" alt="...">
                    </div>
                    <div class="item text-center">
                        <img src="img/partners/client-11.png" alt="...">
                    </div>
                    <div class="item text-center">
                        <img src="img/partners/client-12.png" alt="...">
                    </div>
                    <div class="item text-center">
                        <img src="img/partners/client-13.png" alt="...">
                    </div>
                    <div class="item text-center">
                        <img src="img/partners/client-14.png" alt="...">
                    </div>
                </div>
            </div>
        </section>

        <!-- FOOTER
        ================================================== -->
        <footer class="pt-6 pt-sm-8 pt-lg-10">
            <div class="container">
                <div class="row pb-6 pb-sm-8 pb-lg-10">
                    <div class="col-sm-6 col-lg-4 mb-4 mb-sm-5 mb-lg-0">
                        <img src="img/logos/logo-footer-small-white.png" class="mb-4 w-md-50 w-lg-65 w-xl-55" alt="footer-logo">

                        <h5 class="h6 font-weight-300 line-height-normal text-white-90 w-md-85 mb-4">
                            <span class="text-warning">Amava</span> gives you all elements which are necessary for your design goals.
                        </h5>

                        <ul class="list-unstyled social-icon01 p-0 m-0">
                            <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#!"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>

                    </div>

                    <div class="col-sm-6 col-lg-2 mb-4 mb-sm-5 mb-lg-0">
                        <h3 class="h5 font-weight-500 mb-3 mb-lg-4 text-white normal">Services</h3>
                        <ul class="footer-list02">
                            <li><a href="#!" class="text-white-60 hover-white">Web Design</a></li>
                            <li><a href="#!" class="text-white-60 hover-white">Development</a></li>
                            <li><a href="#!" class="text-white-60 hover-white">WordPress</a></li>
                            <li><a href="#!" class="text-white-60 hover-white">Online Marketing</a></li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-lg-3 mb-4 mb-sm-0">
                        <div class="ps-0 ps-lg-5">
                            <h3 class="h5 font-weight-500 mb-3 mb-lg-4 text-white normal">About Us</h3>
                            <ul class="footer-list02">
                                <li><a href="#!" class="text-white-60 hover-white">About Us</a></li>
                                <li><a href="#!" class="text-white-60 hover-white">Work Portfolio</a></li>
                                <li><a href="#!" class="text-white-60 hover-white">Our Team</a></li>
                                <li><a href="#!" class="text-white-60 hover-white">Price Plan</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <h3 class="h5 font-weight-500 mb-3 mb-lg-4 text-white normal">Newsletter</h3>
                        <div class="mb-0">

                            <!-- start form here -->
                            <form class="quform" action="https://amava.websitelayout.net/quform/newsletter-two.php" method="post" enctype="multipart/form-data" onclick="">

                                <div class="quform-elements">

                                    <div class="row">

                                        <!-- Begin Text input element -->
                                        <div class="col-md-12">
                                            <div class="quform-element form-group">
                                                <div class="quform-input">
                                                    <input class="form-control" id="email_address" type="text" name="email_address" placeholder="Subscribe with us" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Submit button -->
                                        <div class="col-md-12">
                                            <div class="quform-submit-inner">
                                                <button class="btn btn-primary w-100 py-2" type="submit"><span>Subscribe</span></button>
                                            </div>
                                            <div class="quform-loading-wrap text-center"><span class="quform-loading"></span></div>
                                        </div>
                                        <!-- End Submit button -->

                                    </div>

                                </div>

                            </form>

                            <!-- end form here -->

                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center border-top py-4 border-color-light-white">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <p class="text-white-90 mb-0">&copy; Copyright Amava <span class="current-year"></span>. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>


</body>
</html>
