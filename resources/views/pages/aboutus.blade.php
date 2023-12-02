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
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb">
                        <ul>
                            <li>
                                <a href="{{LaravelLocalization::localizeURL('/')}}">@lang("app.home")</a>
                            </li>
                            <li class="active">
                                <a href="{{LaravelLocalization::localizeURL('/about-us')}}">@lang("app.about_us")</a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="page-title">@lang("app.about_us")</h1>
                </div>
            </div>
        </div>
    </section>


<section class="about_mission">
    <div class="content_block1">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-12">
                    <div class="content_area">
                        <h1 class="content_area--title">@lang("app.about")
                            <span class="highlight">El Mass Marmar</span>
                        </h1>
                        <p style="font-size: 20px">@lang('app.about_us_descrption')</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="content_image bgimage">
            <div class="bg_image_holder">
                <img src="{{ asset('images/about_us1.jpg') }}" alt="">
            </div>
        </div>
    </div>

    <div class="content_block2">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6  offset-md-6 offset-lg-7">
                    <div class="content_area2">
                        <h1 class="content_area2--title">El Mass Marmar
                            <span class="highlight">@lang('app.mission')</span>
                        </h1>
                        <p style="font-size: 20px">@lang('app.mission_descrption')</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="content_image2 bgimage">
            <div class="bg_image_holder">
                <img src="{{ asset('images/about_us2.jpg') }}" alt="">
            </div>
        </div>
    </div>

</section>

<section class="features section--padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h1>@lang('app.why_choose_us')</h1>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6" data-aos="zoom-in" >
                <div class="feature">
                    <div class="">
                        <i aria-hidden="true" class="flaticon  flaticon-floor"></i>
                    </div>
                    <div class="feature__title">
                        <h3>@lang('app.quality_assurance')</h3>
                    </div>
                    <div class="feature__desc">
                        <p>@lang('app.quality_assurance_description')</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="zoom-in">
                <div class="feature">
                    <div class="">
                        <i aria-hidden="true" class="flaticon   flaticon-tiles-2"></i>
                    </div>
                    <div class="feature__title">
                        <h3>@lang('app.craftsmanship')</h3>
                    </div>
                    <div class="feature__desc">
                        <p>@lang('app.craftsmanship_descrption')</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="zoom-in">
                <div class="feature">
                    <div class="">
                        <i aria-hidden="true" class="flaticon  flaticon-wood"></i>
                    </div>
                    <div class="feature__title">
                        <h3>@lang('app.customer_satisfaction')</h3>
                    </div>
                    <div class="feature__desc">
                        <p>@lang('app.customer_satisfaction_descrption')</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!--================================
START TIMELINE AREA
=================================-->
{{-- <section class="timeline_area section--padding">
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
</section> --}}
<!--================================
END TIMELINE AREA
=================================-->


{{-- <section class="counter-up-area counter-up--area2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>@lang('app.today_we_are_in_here')</h2>
            </div>
        </div>
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
    </div>
</section> --}}

<section class="team_area section--padding" style="background-image: url({{ asset('images/features.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h1>El Mass Marmar
                        <span class="highlighted">@lang('app.owner')</span>
                    </h1>
                    <p>@lang('app.owner_title')</p>
                </div>
            </div>
        </div>

        <div class="row" style="justify-content: center;">
            <div class="col-lg-3 col-md-4" >
                <div class="single_team_member">
                    <figure>
                        <img src="{{ asset('images/avatar_person.png') }}" alt="Team Member">
                        <figcaption>
                            <div class="name_desig">
                                <h4>Marwa AlMashhoud</h4>
                                <p>El Mass Marmar Owner</p>
                            </div>

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
    </div>
</section>

{{-- <section class="testimonial-area testimonial--2 section--padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h1>Our Clients
                        <span class="highlighted">Feedback</span>
                    </h1>
                    <p>Laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats. Lid
                        est laborum dolo rumes fugats untras.</p>
                </div>
            </div>
        </div>

        <div class="row">
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
                </div>
            </div>
        </div>
    </div>
</section> --}}

@endsection
