@extends('front.header')

@section('content')

        <!-- BLOG POST
        ================================================== -->
        <section class="blogs">
            <div class="container">
                <div class="row">

                    <!-- blog left -->
                    <div class="col-lg-8 mb-2-9 mb-lg-0">
                        <div class="posts">
                            <!-- post -->
                            <div class="post">
                                <div class="post-img">
                                    <div class="ratio ratio-16x9">
                                        <iframe src="https://www.youtube.com/embed/8go_xBWa_EA?start=2" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                        </div>
                                </div>
                                <div class="content">
                                    <div class="post-meta">
                                        <ul class="meta ps-0">
                                            <li>
                                                <a href="#!">
                                                    <i class="fa fa-user" aria-hidden="true"></i> Admin
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#!">
                                                    <i class="fas fa-calendar-alt" aria-hidden="true"></i> 10 Jul <script>document.write(new Date().getFullYear())</script>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#!">
                                                    <i class="fa fa-tags" aria-hidden="true"></i> Blog
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#!">
                                                    <i class="fa fa-comments" aria-hidden="true"></i> 0 Comments
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="post-cont">
                                        <p>consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                                            aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident minim veniam.</p>
                                        <p class="special bg-primary text-white">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                        <p>consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                                            aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident minim veniam.</p>
                                    </div>
                                    <div class="share-post">
                                        <span>Share Post</span>
                                        <ul class="ps-0">
                                            <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#!"><i class="fab fa-dribbble"></i></a></li>
                                            <li><a href="#!"><i class="fab fa-youtube"></i></a></li>
                                            <li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--  start post-->

                        </div>
                    </div>
                    <!-- end blog left -->

                    <!-- blog right -->
                    <div class="col-lg-4">
                        <div class="side-bar ps-xl-1-9">

                            <div class="widget">
                                <h2>Course Name</h2>
                            </div>

                            <div class="widget">
                                <div class="widget-title">
                                    <h6>COURSE CONTENT</h6>
                                </div>
                                <ul class="list-style1">
                                    <li><a href="#!">Business<span class="float-end">(10)</span></a></li>
                                    <li><a href="#!">Consultancy<span class="float-end">(10)</span></a></li>
                                    <li><a href="#!">Finance<span class="float-end">(15)</span></a></li>
                                    <li><a href="#!">Investment<span class="float-end">(04)</span></a></li>
                                    <li><a href="#!">Development<span class="float-end">(06)</span></a></li>
                                    <li><a href="#!">Professional<span class="float-end">(20)</span></a></li>
                                </ul>
                            </div>

                            <div class="widget">
                                <div class="widget-title">
                                    <h6>Follow Us</h6>
                                </div>
                                <ul class="list-unstyled social-icon01 p-0 m-0">
                                    <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#!"><i class="fab fa-dribbble"></i></a></li>
                                    <li><a href="#!"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end blog right -->

                </div>
            </div>
        </section>

@endsection
