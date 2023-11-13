@extends('master.app')


@section('meta')
 <meta property="keywords" content="@lang('app.keyword_about')">
 <meta property="description" content="{!! strip_tags('test') !!}">

 <meta property="og:site_name" content="Orex.co">
 <meta property="og:url" content="{{ url()->current() }}">
 <meta property="og:image" itemprop="image" content="">
 <meta property="og:image:secure_url" itemprop="image" content="">
 <meta property="og:locale" content="en_US">
 <meta property="og:type" content="website">
 <meta property="og:title" content="@lang('meta_home.keyword_about_graph')">
 <meta property="og:description" content="{!! strip_tags("test") !!}">
 <meta property="fb:app_id" content="1359039120781731">


 <meta name="twitter:card" content="summary"/>
 <meta name="twitter:site" content="@solarorex" />
 <meta name="twitter:title" content="@lang('meta_home.keyword_about_twitter')"/>
 <meta name="twitter:description" content="{!! strip_tags("test") !!}"/>
 <meta name="twitter:image" content="@lang('meta_home.keyword')"/>


 @endsection

@section('content')
    <!--================================
        START BREADCRUMB AREA
    =================================-->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb">
                        <ul>
                            <li>
                                <a href="index.html">@lang("app.home")</a>
                            </li>
                            <li class="active">
                                <a href="#">@lang("app.about_us")</a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="page-title">About Us</h1>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
        END BREADCRUMB AREA
    =================================-->

<!--================================
END ABOUT HERO AREA
=================================-->
<section class="about_mission">
    <div class="content_block1">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-12">
                    <div class="content_area">
                        <h1 class="content_area--title">About
                            <span class="highlight">El Mass Marmar</span>
                        </h1>
                        <p style="font-size: 20px">At El Mass Marmar, we are passionate about the intricate beauty and timeless elegance of marble. Our journey in the marble industry spans years, driven by a commitment to excellence, innovation, and quality craftsmanship.</p>
                    </div>
                </div>
                <!-- end /.col-md-5 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->

        <div class="content_image bgimage">
            <div class="bg_image_holder">
                <img src="{{ asset('images/about_us1.jpg') }}" alt="">
            </div>
        </div>
    </div>
    <!-- end /.about -->

    <div class="content_block2">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6  offset-md-6 offset-lg-7">
                    <div class="content_area2">
                        <h1 class="content_area2--title">El Mass Marmar
                            <span class="highlight">Mission</span>
                        </h1>
                        <p style="font-size: 20px">Established with a vision to redefine the marble industry, El Mass Marmar has been a cornerstone in providing premium quality marble solutions. We combine traditional expertise with modern technology to deliver superior products and services.</p>
                    </div>
                </div>
                <!-- end /.col-md-5 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->

        <div class="content_image2 bgimage">
            <div class="bg_image_holder">
                <img src="{{ asset('images/about_us2.jpg') }}" alt="">
            </div>
        </div>
    </div>
    <!-- end /.mission-->
</section>
<!--================================
END ABOUT HERO AREA
=================================-->

    <!--================================
    START FEATURE AREA
=================================-->
<section class="features section--padding">
    <!-- start container -->
    <div class="container">
        <!-- start row -->

        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h1>Why
                        <span class="highlighted"> Choose Us</span>
                    </h1>
                    <p></p>
                </div>
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <div class="row">
            <!-- start search-area -->
            <div class="col-lg-4 col-md-6">
                <div class="feature">
                    <div class="">
                        <i aria-hidden="true" class="flaticon  flaticon-floor"></i>
                    </div>
                    <div class="feature__title">
                        <h3>Quality Assurance</h3>
                    </div>
                    <div class="feature__desc">
                        <p>We meticulously select and process our marble to guarantee top-notch quality</p>
                    </div>
                </div>
                <!-- end /.feature -->
            </div>
            <!-- end /.col-lg-4 col-md-6 -->

            <!-- start search-area -->
            <div class="col-lg-4 col-md-6">
                <div class="feature">
                    <div class="">
                        <i aria-hidden="true" class="flaticon   flaticon-tiles-2"></i>
                    </div>
                    <div class="feature__title">
                        <h3>Craftsmanship</h3>
                    </div>
                    <div class="feature__desc">
                        <p>Our skilled artisans and modern techniques ensure precision in every product.</p>
                    </div>
                </div>
                <!-- end /.feature -->
            </div>
            <!-- end /.col-lg-4 col-md-6 -->

            <!-- start search-area -->
            <div class="col-lg-4 col-md-6">
                <div class="feature">
                    <div class="">
                        <i aria-hidden="true" class="flaticon  flaticon-wood"></i>
                    </div>
                    <div class="feature__title">
                        <h3>Customer Satisfaction</h3>
                    </div>
                    <div class="feature__desc">
                        <p>Your needs are our priority, and we aim to exceed your expectations.</p>
                    </div>
                </div>
                <!-- end /.feature -->
            </div>
            <!-- end /.col-lg-4 col-md-6 -->
        </div>
        <!-- end /.row -->
    </div>
    <!-- end /.container -->
</section>
<!--================================
END FEATURE AREA
=================================-->
<hr>

<!--================================
START TIMELINE AREA
=================================-->
<section class="timeline_area section--padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h1>El Mass Marmar
                        <span class="highlighted"> Achievements</span>
                    </h1>
                    <p></p>
                </div>
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end /.row -->

        <div class="row">
            <div class="col-md-12">
                <ul class="timeline">
                    <li class="happening">
                        <div class="happening--period">
                            <p>February 2009</p>
                        </div>
                        <div class="happening--detail">
                            <h4 class="title">MartPlace was Launched</h4>
                            <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra justo ut scelerisque the mattis,
                                leo quam aliquet diam congue is laoreet.</p>
                        </div>
                    </li>

                    <li class="happening">
                        <div class="happening--period">
                            <p>February 2010</p>
                        </div>
                        <div class="happening--detail">
                            <h4 class="title">Launched Premium Version</h4>
                            <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra justo ut scelerisque the mattis,
                                leo quam aliquet diam congue is laoreet.</p>
                        </div>
                    </li>

                    <li class="happening">
                        <div class="happening--period">
                            <p>July 2012</p>
                        </div>
                        <div class="happening--detail">
                            <h4 class="title">3 Million Downloads Reached</h4>
                            <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra justo ut scelerisque the mattis,
                                leo quam aliquet diam congue is laoreet.</p>
                        </div>
                    </li>

                    <li class="happening">
                        <div class="happening--period">
                            <p>November 2015</p>
                        </div>
                        <div class="happening--detail">
                            <h4 class="title">50,000+ Community Members</h4>
                            <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra justo ut scelerisque the mattis,
                                leo quam aliquet diam congue is laoreet.</p>
                        </div>
                    </li>

                    <li class="happening">
                        <div class="happening--period">
                            <p>August 2016</p>
                        </div>
                        <div class="happening--detail">
                            <h4 class="title">Added Payoneer as a Payment Method</h4>
                            <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra justo ut scelerisque the mattis,
                                leo quam aliquet diam congue is laoreet.</p>
                        </div>
                    </li>

                </ul>
                <!-- end /.timeline -->
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end /.row -->
    </div>
    <!-- end /.container -->
</section>
<!--================================
END TIMELINE AREA
=================================-->


<!--================================
START COUNTER UP AREA2
=================================-->
<section class="counter-up-area counter-up--area2">
    <!-- start .container -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Today We are in Here</h2>
            </div>
        </div>
        <!-- start .col-md-12 -->
        <div class="col-md-12">
            <div class="counter-up">
                <div class="counter mcolor2">
                    <span class="lnr lnr-briefcase"></span>
                    <span class="count">38,436</span>
                    <p>items for sale</p>
                </div>
                <div class="counter mcolor3">
                    <span class="lnr lnr-cart"></span>
                    <span class="count">38,436</span>
                    <p>total sales</p>
                </div>
                <div class="counter mcolor1">
                    <span class="lnr lnr-smile"></span>
                    <span class="count">38,436</span>
                    <p>appy customers</p>
                </div>
                <div class="counter mcolor4">
                    <span class="lnr lnr-users"></span>
                    <span class="count">38,436</span>
                    <p>members</p>
                </div>
            </div>
        </div>
        <!-- end /.col-md-12 -->
    </div>
    <!-- end /.container -->
</section>
<!--================================
END COUNTER UP AREA2
=================================-->

<!--================================
START MARTPLACE TEAM AREA
=================================-->
<section class="team_area section--padding" style="background-image: url({{ asset('images/features.jpg') }});">
    <div class="container">
        <!-- start row -->
        <div class="row">
            <!-- start col-md-12 -->
            <div class="col-md-12">
                <div class="section-title">
                    <h1>El Mass Marmar
                        <span class="highlighted">Owner</span>
                    </h1>
                    <p>Feel free to contact us to learn more about our services, explore our exquisite marble collection, or discuss your specific requirements.</p>
                </div>
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end /.row -->

        <div class="row" style="justify-content: center;">
            <div class="col-lg-3 col-md-4" >
                <div class="single_team_member">
                    <figure>
                        <img src="images/team1.jpg" alt="Team Member">
                        <figcaption>
                            <div class="name_desig">
                                <h4>Marwa AlMashhoud</h4>
                                <p>El Mass Marmar Owner</p>
                            </div>
                            <!-- end /.name_desig -->

                            <div class="social">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <span class="fa fa-facebook"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="fa fa-whatsapp"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="fa fa-instagram"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </figcaption>
                        <!-- end /.figcaption -->
                    </figure>
                    <!-- end /.figure -->
                </div>
                <!-- end /.single_team_member -->
            </div>
            <!-- end /.col-md-3 -->

        </div>
        <!-- end /.row -->
    </div>
    <!-- end /.container -->
</section>
<!--================================
END MARTPLACE TEAM AREA
=================================-->

<!--================================
START TESTIMONIAL
=================================-->
<section class="testimonial-area testimonial--2 section--padding">
    <!-- start .container -->
    <div class="container">
        <!-- start row -->
        <div class="row">
            <!-- start col-md-12 -->
            <div class="col-md-12">
                <div class="section-title">
                    <h1>Our Clients
                        <span class="highlighted">Feedback</span>
                    </h1>
                    <p>Laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats. Lid
                        est laborum dolo rumes fugats untras.</p>
                </div>
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end /.row -->

        <!-- start row -->
        <div class="row">
            <!-- start .col-md-12 -->
            <div class="col-md-12">
                <div class="testimonial-slider">
                    <div class="testimonial">
                        <div class="testimonial__about">
                            <div class="avatar v_middle">
                                <img src="images/test1.jpg" alt="Testimonial Avatar">
                            </div>
                            <div class="name-designation v_middle">
                                <h4 class="name">Tubeda Pagla</h4>
                                <span class="desig">Product Designer</span>
                            </div>
                            <span class="lnr lnr-bubble quote-icon"></span>
                        </div>
                        <div class="testimonial__text">
                            <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                                leo quam aliquet diam congue is the laoreet elit metus. Nunc placerat mi is id nisi interdum
                                is mollis. Praesent the pharetra, justo ut scelerisque.</p>
                        </div>
                    </div>
                    <!-- end /.testimonial -->

                    <div class="testimonial">
                        <div class="testimonial__about">
                            <div class="avatar v_middle">
                                <img src="images/test2.jpg" alt="Testimonial Avatar">
                            </div>
                            <div class="name-designation v_middle">
                                <h4 class="name">Tarashi Hamada</h4>
                                <span class="desig">Quality Ninja</span>
                            </div>
                            <span class="lnr lnr-bubble quote-icon"></span>
                        </div>
                        <div class="testimonial__text">
                            <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                                leo quam aliquet diam congue is the laoreet elit metus. Nunc placerat mi is id nisi interdum
                                is mollis. Praesent the pharetra, justo ut scelerisque.</p>
                        </div>
                    </div>
                    <!-- end /.testimonial -->

                    <div class="testimonial">
                        <div class="testimonial__about">
                            <div class="avatar v_middle">
                                <img src="images/test1.jpg" alt="Testimonial Avatar">
                            </div>
                            <div class="name-designation v_middle">
                                <h4 class="name">Tubeda Pagla</h4>
                                <span class="desig">Product Designer</span>
                            </div>
                            <span class="lnr lnr-bubble quote-icon"></span>
                        </div>
                        <div class="testimonial__text">
                            <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                                leo quam aliquet diam congue is the laoreet elit metus. Nunc placerat mi is id nisi interdum
                                is mollis. Praesent the pharetra, justo ut scelerisque.</p>
                        </div>
                    </div>
                    <!-- end /.testimonial -->

                    <div class="testimonial">
                        <div class="testimonial__about">
                            <div class="avatar v_middle">
                                <img src="images/test2.jpg" alt="Testimonial Avatar">
                            </div>
                            <div class="name-designation v_middle">
                                <h4 class="name">Tarashi Hamada</h4>
                                <span class="desig">Quality Ninja</span>
                            </div>
                            <span class="lnr lnr-bubble quote-icon"></span>
                        </div>
                        <div class="testimonial__text">
                            <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                                leo quam aliquet diam congue is the laoreet elit metus. Nunc placerat mi is id nisi interdum
                                is mollis. Praesent the pharetra, justo ut scelerisque.</p>
                        </div>
                    </div>
                    <!-- end /.testimonial -->
                </div>
                <!-- end /.testimonial_slider -->

                {{-- <div class="all-testimonial">
                    <a href="testimonial.html" class="btn btn--lg btn--round">View All Reviews</a>
                </div> --}}
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end /.row -->
    </div>
    <!-- end container -->
</section>
<!--================================
END TESTIMONIAL
=================================-->



@endsection
