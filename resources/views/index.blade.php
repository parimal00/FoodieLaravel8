@extends('layout.main')
@section('content')

    <!-- banner -->
    <div class="baneer-w3ls">
        <div class="row no-gutters">
            <div class="col-xl-5 col-lg-6">
                <div class="banner-left-w3">
                    <div class="container">
                        <div class="banner-info_agile_w3ls">
                            <h5>Only Fresh Burgers</h5>
                            <h3 class="text-da mb-4">Flame <span>Grilled Burger</span> </h3>
                            <p>The sizzling aroma of freshly grilled vegetables filled the kitchen as the chef added a pinch of herbs for flavor</p>
                            <a href="{{route('about')}}" class="button-w3ls active mt-5">Read More
                                <span class="fa fa-caret-right ml-1" aria-hidden="true"></span>
                            </a>
                            <a href="{{route('menus.index')}}" class="button-w3ls mt-5 ml-2">Order Now
                                <span class="fa fa-caret-right ml-1" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-lg-6 callbacks_container">
                <!-- banner slider -->
                <div class="csslider infinity" id="slider1">
                    <input type="radio" name="slides" checked="checked" id="slides_1" />
                    <input type="radio" name="slides" id="slides_2" />
                    <input type="radio" name="slides" id="slides_3" />
                    <ul class="banner_slide_bg">
                        <li>
                            <div class="banner-top1"></div>
                        </li>
                        <li>
                            <div class="banner-top2"></div>
                        </li>
                        <li>
                            <div class="banner-top3"></div>
                        </li>
                    </ul>
                    <div class="arrows">
                        <label for="slides_1"></label>
                        <label for="slides_2"></label>
                        <label for="slides_3"></label>
                    </div>
                    <div class="navigation">
                        <div>
                            <label for="slides_1"></label>
                            <label for="slides_2"></label>
                            <label for="slides_3"></label>
                        </div>
                    </div>
                </div>
                <!-- //banner slider -->
            </div>
        </div>
    </div>
    <!-- //banner -->
    <div class="clearfix"></div>

    <!-- about -->
    <div class="about-bottom">
        <div class="row no-gutters">
            <div class="col-lg-5 col-md-6 about">

            </div>
            <div class="col-lg-7 col-md-6 about-right-w3 text-right py-md-5">
                <div class="right-space py-xl-5 py-lg-3">
                    <div class="title-section mb-4">
                        <p class="w3ls-title-sub">About Us</p>
                        <h3 class="w3ls-title">Welcome to <span>Tasty Burger</span></h3>
                    </div>
                    <p class="about-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                        doloremque
                        laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                        architecto
                        beatae vitae dicta
                        sunt explicabo.Nemo enim ipsam voluptatem quia voluptas sit.</p>
                    <a href="about.html" class="button-w3ls mt-5">Read More
                        <span class="fa fa-caret-right ml-1" aria-hidden="true"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- //about -->

    <!-- specials -->
    <section class="blog_w3ls py-5">
        <div class="container pb-xl-5 pb-lg-3">
            <div class="title-section text-center mb-md-5 mb-4">
                <p class="w3ls-title-sub">Tasty</p>
                <h3 class="w3ls-title">Our <span>Special</span></h3>
            </div>
            <div class="row">
                <!-- blog grid -->
                <div class="col-lg-4 col-md-6">
                    <div class="card border-0 med-blog">
                        <div class="card-header p-0">
                            <a href="menu.html">
                                <img class="card-img-bottom" src="images/blog1.jpg" alt="Card image cap">
                            </a>
                        </div>
                        <div class="card-body border border-top-0">
                            <h5 class="blog-title card-title m-0"><a href="menu.html">French Burger</a></h5>
                            <p class="mt-3">Cras ultricies ligula sed magna dictum porta auris blandita.</p>
                            <a href="menu.html" class="btn button-w3ls mt-4 mb-3">View More
                                <span class="fa fa-caret-right ml-1" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- //blog grid -->
                <!-- blog grid -->
                <div class="col-lg-4 col-md-6 mt-md-0 mt-5">
                    <div class="card border-0 med-blog">
                        <div class="card-header p-0">
                            <a href="menu.html">
                                <img class="card-img-bottom" src="images/blog2.jpg" alt="Card image cap">
                            </a>
                        </div>
                        <div class="card-body border border-top-0">
                            <h5 class="blog-title card-title m-0"><a href="menu.html">Veg Muffin</a></h5>
                            <p class="mt-3">Cras ultricies ligula sed magna dictum porta auris blandita.</p>
                            <a href="menu.html" class="button-w3ls active mt-4 mb-3">View More
                                <span class="fa fa-caret-right ml-1" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- //blog grid -->
                <!-- blog grid -->
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-5">
                    <div class="card border-0 med-blog">
                        <div class="card-header p-0">
                            <a href="menu.html">
                                <img class="card-img-bottom" src="images/blog3.jpg" alt="Card image cap">
                            </a>
                        </div>
                        <div class="card-body border border-top-0">
                            <h5 class="blog-title card-title m-0"><a href="menu.html">Hashbrown Brioche</a></h5>
                            <p class="mt-3">Cras ultricies ligula sed magna dictum porta auris blandita.</p>
                            <a href="menu.html" class="button-w3ls mt-4 mb-3">View More
                                <span class="fa fa-caret-right ml-1" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- //blog grid -->
            </div>
        </div>
    </section>
    <!-- //specials -->

    <!-- two grids -->
    <section class="offer pt-lg-3">
        <div class="row no-gutters">
            <div class="col-md-6 p-0">
                <div class="blog-sec-w3">
                    <div class="text-blog-w3 text-center p-2">
                        <h4 class="text-wh mb-3"><a href="menu.html">Best Fast Food Collection</a></h4>
                        <p class="text-li">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris Sed
                            ut perspiciatis
                            unde omnis iste natus error.</p>
                        <a href="menu.html" class="button-w3ls active mt-5">Order Now
                            <span class="fa fa-caret-right ml-1" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-0">
                <div class="blog-sec-w3 blog-sec-w3-2">
                    <div class="text-blog-w3 text-center p-2">
                        <h4 class="text-wh mb-3"><a href="menu.html">Organic Best & Fresh Food</a></h4>
                        <p class="text-li">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris Sed
                            ut perspiciatis
                            unde omnis iste natus error.</p>
                        <a href="menu.html" class="button-w3ls active mt-5">Order Now
                            <span class="fa fa-caret-right ml-1" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //two grids -->

    <!-- services -->
    <section class="middle py-5" id="services">
        <div class="container py-xl-5 py-lg-3">
            <div class="title-section text-center mb-md-5 mb-4">
                <p class="w3ls-title-sub">Our Work</p>
                <h3 class="w3ls-title mb-3">Excellent <span>Services</span></h3>
            </div>
            <div class="row grids-w3 py-xl-5 py-lg-4 pt-lg-0 pt-4">
                <div class="col-lg-5 w3pvt-lauits_banner_bottom_left">
                    <div class="row">
                        <div class="col-8 wthree_banner_bottom_grid_right text-right">
                            <h4 class="mb-3"><a href="login.html">Free Shipping</a></h4>
                            <p>Morbi viverra lacus commodo felis semper lectus feugiat.</p>
                        </div>
                        <div class="col-4 wthree_banner_bottom_grid_left text-lg-right text-center">
                            <img src="images/s1.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 w3pvt-lauits_banner_bottom_left">

                </div>
                <div class="col-lg-5 w3pvt-lauits_banner_bottom_left mt-lg-0 mt-4">
                    <div class="row">
                        <div class="col-4 wthree_banner_bottom_grid_left text-lg-right text-center">
                            <img src="images/s2.png" alt="" class="img-fluid">
                        </div>
                        <div class="col-8 wthree_banner_bottom_grid_right">
                            <h4 class="mb-3"><a href="login.html">Free & Easy Returns</a></h4>
                            <p>Morbi viverra lacus commodo felis semper lectus feugiat.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row grids-w3 py-xl-5 py-lg-4 mt-lg-0 mt-4">
                <div class="col-lg-4 w3pvt-lauits_banner_bottom_left">
                    <div class="row">
                        <div class="col-8 wthree_banner_bottom_grid_right text-right pl-lg-0">
                            <h4 class="mb-3"><a href="login.html">Online Order</a></h4>
                            <p>Morbi viverra lacus commodo felis semper lectus feugiat.</p>
                        </div>
                        <div class="col-4 wthree_banner_bottom_grid_left text-lg-right text-center pr-lg-0">
                            <img src="images/s3.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 w3pvt-lauits_banner_bottom_left pr-0">

                </div>
                <div class="col-lg-4 w3pvt-lauits_banner_bottom_left mt-lg-0 mt-4">
                    <div class="row">
                        <div class="col-4 wthree_banner_bottom_grid_left text-lg-right text-center pl-lg-0">
                            <img src="images/s4.png" alt="" class="img-fluid">
                        </div>
                        <div class="col-8 wthree_banner_bottom_grid_right pr-lg-0">
                            <h4 class="mb-3"><a href="login.html">24/7 Support</a></h4>
                            <p>Morbi viverra lacus commodo felis semper lectus feugiat.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="img-blog-2">
            <img src="images/img.png" alt="" class="img-fluid">
        </div>
    </section>
    <!-- //services -->

    <!-- blog -->
    <section class="blog_w3ls py-5" id="blog">
        <div class="container py-xl-5 py-lg-3">
            <div class="title-section text-center mb-md-5 mb-4">
                <p class="w3ls-title-sub">Posts</p>
                <h3 class="w3ls-title mb-3">Our Latest <span>Blog</span></h3>
                <p class="titile-para-text mx-auto">Inventore veritatis et quasi architecto beatae vitae dicta sunt
                    explicabo.Nemo
                    enim totam rem aperiam.</p>
            </div>
            <div class="row">
                <!-- blog grid -->
                <div class="col-lg-4 col-md-6">
                    <div class="card border-0">
                        <div class="card-header p-0">
                            <a href="single.html">
                                <img src="images/blog1.png" class="card-img-bottom img-fluid" alt="image">
                            </a>
                            <img src="images/te1.jpg" alt="" class="img-blog rounded-circle img-fluid">
                        </div>
                        <div class="card-body text-center pt-5 mt-2">
                            <h5 class="blog-title card-title mb-2"><a href="single.html">Sed ut Riciatis</a></h5>
                            <div class="blog_w3icon border-top border-bottom py-1 mb-3">
                                <span>
                                    Magna Kictum - Nov 12</span>
                            </div>
                            <p>Cras ultricies ligula sed magna dictum porta auris blandita.</p>
                            <a href="single.html" class="button-w3ls mt-4">Read More
                                <span class="fa fa-caret-right ml-1" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- //blog grid -->
                <!-- blog grid -->
                <div class="col-lg-4 col-md-6">
                    <div class="card border-0">
                        <div class="card-header p-0">
                            <a href="single.html">
                                <img src="images/blog2.png" class="card-img-bottom img-fluid" alt="image">
                            </a>
                            <img src="images/te2.jpg" alt="" class="img-blog rounded-circle img-fluid">
                        </div>
                        <div class="card-body text-center pt-5 mt-2">
                            <h5 class="blog-title card-title mb-2"><a href="single.html">Unde omnis iste</a></h5>
                            <div class="blog_w3icon border-top border-bottom py-1 mb-3">
                                <span>
                                    Auris Jlan - Nov 15</span>
                            </div>
                            <p>Cras ultricies ligula sed magna dictum porta auris blandita.</p>
                            <a href="single.html" class="button-w3ls active mt-4">Read More
                                <span class="fa fa-caret-right ml-1" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- //blog grid -->
                <!-- blog grid -->
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                    <div class="card border-0">
                        <div class="card-header p-0">
                            <a href="single.html">
                                <img src="images/blog3.png" class="card-img-bottom img-fluid" alt="image">
                            </a>
                            <img src="images/te3.jpg" alt="" class="img-blog rounded-circle img-fluid">
                        </div>
                        <div class="card-body text-center pt-5 mt-2">
                            <h5 class="blog-title card-title mb-2"><a href="single.html">Natus error sit</a></h5>
                            <div class="blog_w3icon border-top border-bottom py-1 mb-3">
                                <span>
                                    Dictum Orta - Nov 20</span>
                            </div>
                            <p>Cras ultricies ligula sed magna dictum porta auris blandita.</p>
                            <a href="single.html" class="button-w3ls mt-4">Read More
                                <span class="fa fa-caret-right ml-1" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- //blog grid -->
            </div>
        </div>
    </section>
    <!-- //blog -->

    <!-- slides images -->
    <section class="wthree-slider" id="masthead">

    </section>
    <!-- //slides images -->

    <!-- newsletter -->
    <section class="subscribe-main py-5">
        <div class="container py-xl-5 py-3">
            <div class="row pb-lg-4 pt-lg-5">
                <div class="col-lg-6 col-md-9 text-center">
                    <h3 class="w3ls-title mb-2">Subscribe to Newsletter</h3>
                    <p class="mb-xl-5 mb-4">Free Delivery on your first order!</p>
                    <form action="#" method="post" class="d-flex newsletter-info">
                        <input type="email" name="email" placeholder="Enter your Email..." required="">
                        <button type="submit">Submit</button>
                    </form>
                </div>
                <div class="col-lg-6 col-md-3">

                </div>
            </div>
            <img src="images/sub.png" alt="" class="img-fluid sub-img">
        </div>
    </section>
    <!-- //newsletter -->


@endsection