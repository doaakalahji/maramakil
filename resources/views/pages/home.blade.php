@extends("master.app")

@section("content")
<section class="hero-area bgimage">
    <div class="bg_image_holder">
        <img src="{{ asset('images/header.jpg') }}" alt="background-image">
    </div>
    <!-- start hero-content -->
    <div class="hero-content content_above">
        <!-- start .contact_wrapper -->
        <div class="content-wrapper">
            <!-- start .container -->
            <div class="container">
                <!-- start row -->
                <div class="row">
                    <!-- start col-md-12 -->
                    <div class="col-md-12">
                        <div class="hero__content__title">
                            <h1>
                                <span class="bold hero_img">@lang("app.mass")</span>
                            </h1>
                            {{-- <p class="tagline">MartPlace is the most powerful, & customizable template for Easy Digital Downloads Products</p> --}}
                        </div>

                        <!-- start .hero__btn-area-->
                        {{-- <div class="hero__btn-area">
                            <a href="all-products.html" class="btn btn--round btn--lg">View All Products</a>
                            <a href="all-products.html" class="btn btn--round btn--lg">Popular Products</a>
                        </div> --}}
                        <!-- end .hero__btn-area-->
                    </div>
                    <!-- end /.col-md-12 -->
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end .contact_wrapper -->
    </div>
    <!-- end hero-content -->

    <!--start search-area -->
    <div class="search-area">
        <!-- start .container -->
        <div class="container">
            <!-- start .container -->
            <div class="row">
                <!-- start .col-sm-12 -->
                <div class="col-sm-12">
                    <!-- start .search_box -->
                    <div class="search_box">
                        <form action="#">
                            <input type="text" class="text_field" placeholder="Search your products...">
                            <div class="search__select select-wrap">
                                <select name="category" class="select--field" id="blah">
                                    <option value="">All Categories</option>
                                    <option value="">PSD</option>
                                    <option value="">HTML</option>
                                    <option value="">WordPress</option>
                                    <option value="">All Categories</option>
                                </select>
                                <span class="lnr lnr-chevron-down"></span>
                            </div>
                            <button type="submit" class="search-btn btn--lg">Search Now</button>
                        </form>
                    </div>
                    <!-- end ./search_box -->
                </div>
                <!-- end /.col-sm-12 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </div>
    <!--start /.search-area -->
</section>


<section class="features section--padding">
    <!-- start container -->
    <div class="container">
        <!-- start row -->

        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h1> Choose Your Color What You Want For Your Home </h1>
                    <p>There are many variations of Marble.
                    </p>
                </div>
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <div class="row">
            <!-- start search-area -->
            <div class="col-lg-4 col-md-6">
                <div class="feature">
                    <div class="feature__img">
                        <img src="{{ asset('images/types/granite.png') }}" alt="feature">
                    </div>
                    <div class="feature__title">
                        <h3>Granite</h3>
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
                    <div class="feature__img">
                        <img src="{{ asset('images/types/limestone.png') }}" alt="feature">
                    </div>
                    <div class="feature__title">
                        <h3>Limestone</h3>
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
                    <div class="feature__img">
                        <img src="{{ asset('images/types/marble.png') }}" alt="feature">
                    </div>
                    <div class="feature__title">
                        <h3>Marble</h3>
                    </div>
                    <div class="feature__desc">
                        <p>Your needs are our priority, and we aim to exceed your expectations.</p>
                    </div>
                </div>
                <!-- end /.feature -->
            </div>
            <!-- end /.col-lg-4 col-md-6 -->

            <div class="col-lg-4 col-md-6">
                <div class="feature">
                    <div class="feature__img">
                        <img src="{{ asset('images/types/onyx.png') }}" alt="feature">
                    </div>
                    <div class="feature__title">
                        <h3>Onyx</h3>
                    </div>
                    <div class="feature__desc">
                        <p>Your needs are our priority, and we aim to exceed your expectations.</p>
                    </div>
                </div>
                <!-- end /.feature -->
            </div>
            <!-- end /.col-lg-4 col-md-6 -->

            <div class="col-lg-4 col-md-6">
                <div class="feature">
                    <div class="feature__img">
                        <img src="{{ asset('images/types/quartz.png') }}" alt="feature">
                    </div>
                    <div class="feature__title">
                        <h3>Quartz</h3>
                    </div>
                    <div class="feature__desc">
                        <p>Your needs are our priority, and we aim to exceed your expectations.</p>
                    </div>
                </div>
                <!-- end /.feature -->
            </div>
            <!-- end /.col-lg-4 col-md-6 -->

            <div class="col-lg-4 col-md-6">
                <div class="feature">
                    <div class="feature__img">
                        <img src="{{ asset('images/types/travertine.png') }}" alt="feature">
                    </div>
                    <div class="feature__title">
                        <h3>Travertine</h3>
                    </div>
                    <div class="feature__desc">
                        <p>Your needs are our priority, and we aim to exceed your expectations.</p>
                    </div>
                </div>
                <!-- end /.feature -->
            </div>
            <!-- end /.col-lg-4 col-md-6 -->

            <div class="col-lg-4 col-md-6">
                <div class="feature">
                    <div class="feature__img">
                        <img src="{{ asset('images/types/travertine2.png') }}" alt="feature">
                    </div>
                    <div class="feature__title">
                        <h3>Travertine2</h3>
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
            START SIGNUP AREA
    =================================-->
    <section class="section--padding2" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial-slider">
                        <div class="testimonial">
                            <img src="{{ asset('images/slider1.jpg') }}" alt="">
                        </div>
                        <!-- end /.testimonial -->

                        <div class="testimonial">
                            <img src="{{ asset('images/slider2.jpg') }}" alt="">
                        </div>
                        <!-- end /.testimonial -->

                        <div class="testimonial">
                            <img src="{{ asset('images/slider3.jpg') }}" alt="">
                        </div>
                        <!-- end /.testimonial -->

                        <div class="testimonial">
                            <img src="{{ asset('images/slider4.jpg') }}" alt="">
                        </div>
                        <!-- end /.testimonial -->
                        <div class="testimonial">
                            <img src="{{ asset('images/slider5.jpg') }}" alt="">
                        </div>

                        <div class="testimonial">
                            <img src="{{ asset('images/slider6.jpg') }}" alt="">
                        </div>

                        <div class="testimonial">
                            <img src="{{ asset('images/slider7.jpg') }}" alt="">
                        </div>

                        <div class="testimonial">
                            <img src="{{ asset('images/slider8.jpg') }}" alt="">
                        </div>

                        <div class="testimonial">
                            <img src="{{ asset('images/slider9.jpg') }}" alt="">
                        </div>
                    </div>
                    <!-- end /.testimonial_slider -->
                </div>
            </div>
            <!-- end .row -->
        </div>
        <!-- end .container -->
    </section>
    <!--================================
            END SIGNUP AREA
    =================================-->

        <!--================================
    START FEATURED PRODUCT AREA
=================================-->
{{-- <section class="featured-products  section--padding" style="background: #f6f4f5">
    <!-- start /.container -->
    <div class="container">
        <!-- start row -->
        <div class="row">
            <!-- start col-md-12 -->
            <div class="col-md-12">
                <div class="product-title-area ">
                    <div class="product__title">
                        <h2>Featured Products</h2>
                    </div>

                    <div class="product__slider-nav rounded">
                        <span class="lnr lnr-chevron-left nav_left"></span>
                        <span class="lnr lnr-chevron-right nav_right"></span>
                    </div>
                </div>
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end /.row -->
    </div>

    <!-- start .featured-product-slider -->



    <div class="container">
        <div class="row">
            <div class="col-md-12 no0-padding">
                <div class="featured-product-slider prod-slider1">
                    <div class="featured__single-slider">
                        <div class="featured__preview-img">
                            <img src="images/featprod.jpg" alt="Featured products">
                            <div class="prod_btn">
                                <a href="single-product.html" class="transparent btn--sm btn--round">More Info</a>
                                <a href="single-product.html" class="transparent btn--sm btn--round">Live Demo</a>
                            </div>
                        </div>
                        <!-- end /.featured__preview-img -->

                        <div class="featured__product-description">
                            <div class="product-desc desc--featured">
                                <a href="single-product.html" class="product_title">
                                    <h4>Rida - vCard, Portfolio / Resume Template</h4>
                                </a>
                                <ul class="titlebtm">
                                    <li>
                                        <img class="auth-img" src="images/auth.jpg" alt="author image">
                                        <p>
                                            <a href="#">AazzTech</a>
                                        </p>
                                    </li>
                                    <li class="product_cat">
                                        <a href="#">
                                            <span class="lnr lnr-book"></span> WordPress</a>
                                    </li>
                                </ul>
                                <!-- end /.titlebtm -->

                                <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the
                                    mattis, leo quam aliquet congue placerat mi id nisi interdum mollis. Praesent pharetra,
                                    justo ut scelerisque the mattis, leo quam aliquet congue justo ut scelerisque.</p>
                            </div>
                            <!-- end /.product-desc -->

                            <div class="product_data">
                                <div class="tags tags--round">
                                    <ul>
                                        <li>
                                            <a href="#">website</a>
                                        </li>
                                        <li>
                                            <a href="#">plugin</a>
                                        </li>
                                        <li>
                                            <a href="#">landing page</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- end /.tags -->
                                <div class="product-purchase featured--product-purchase">
                                    <div class="price_love">
                                        <span>$10 - $50</span>
                                        <p>
                                            <span class="lnr lnr-heart"></span> 90</p>
                                    </div>
                                    <div class="sell">
                                        <p>
                                            <span class="lnr lnr-cart"></span>
                                            <span>16</span>
                                        </p>
                                    </div>

                                    <div class="rating product--rating">
                                        <ul>
                                            <li>
                                                <span class="fa fa-star"></span>
                                            </li>
                                            <li>
                                                <span class="fa fa-star"></span>
                                            </li>
                                            <li>
                                                <span class="fa fa-star"></span>
                                            </li>
                                            <li>
                                                <span class="fa fa-star"></span>
                                            </li>
                                            <li>
                                                <span class="fa fa-star"></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- end /.product-purchase -->
                            </div>
                        </div>
                        <!-- end /.featured__product-description -->
                    </div>
                    <!--end /.featured__single-slider-->

                    <div class="featured__single-slider">
                        <div class="featured__preview-img">
                            <img src="images/featprod.jpg" alt="Featured products">
                            <div class="prod_btn">
                                <a href="single-product.html" class="transparent btn--sm btn--round">More Info</a>
                                <a href="single-product.html" class="transparent btn--sm btn--round">Live Demo</a>
                            </div>
                        </div>
                        <!-- end /.featured__preview-img -->

                        <div class="featured__product-description">
                            <div class="product-desc desc--featured">
                                <a href="single-product.html" class="product_title">
                                    <h4>One Page Resume Template</h4>
                                </a>
                                <ul class="titlebtm">
                                    <li>
                                        <img class="auth-img" src="images/auth.jpg" alt="author image">
                                        <p>
                                            <a href="#">AazzTech</a>
                                        </p>
                                    </li>
                                    <li class="product_cat">
                                        <a href="#">
                                            <span class="lnr lnr-book"></span> WordPress</a>
                                    </li>
                                </ul>
                                <!-- end /.titlebtm -->

                                <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the
                                    mattis, leo quam aliquet congue placerat mi id nisi interdum mollis. Praesent pharetra,
                                    justo ut scelerisque the mattis, leo quam aliquet congue justo ut scelerisque.</p>
                            </div>
                            <!-- end /.product-desc -->

                            <div class="product_data">
                                <div class="tags tags--round">
                                    <ul>
                                        <li>
                                            <a href="#">website</a>
                                        </li>
                                        <li>
                                            <a href="#">plugin</a>
                                        </li>
                                        <li>
                                            <a href="#">landing page</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- end /.tags -->
                                <div class="product-purchase featured--product-purchase">
                                    <div class="price_love">
                                        <span>$10 - $50</span>
                                        <p>
                                            <span class="lnr lnr-heart"></span> 90</p>
                                    </div>
                                    <div class="sell">
                                        <p>
                                            <span class="lnr lnr-cart"></span>
                                            <span>16</span>
                                        </p>
                                    </div>

                                    <div class="rating product--rating">
                                        <ul>
                                            <li>
                                                <span class="fa fa-star"></span>
                                            </li>
                                            <li>
                                                <span class="fa fa-star"></span>
                                            </li>
                                            <li>
                                                <span class="fa fa-star"></span>
                                            </li>
                                            <li>
                                                <span class="fa fa-star"></span>
                                            </li>
                                            <li>
                                                <span class="fa fa-star"></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- end /.product-purchase -->
                            </div>
                        </div>
                        <!-- end /.featured__product-description -->
                    </div>
                    <!--end /.featured__single-slider-->

                    <div class="featured__single-slider">
                        <div class="featured__preview-img">
                            <img src="images/featprod.jpg" alt="Featured products">
                            <div class="prod_btn">
                                <a href="single-product.html" class="transparent btn--sm btn--round">More Info</a>
                                <a href="single-product.html" class="transparent btn--sm btn--round">Live Demo</a>
                            </div>
                        </div>
                        <!-- end /.featured__preview-img -->

                        <div class="featured__product-description">
                            <div class="product-desc desc--featured">
                                <a href="single-product.html" class="product_title">
                                    <h4>AppsPress App Landing</h4>
                                </a>
                                <ul class="titlebtm">
                                    <li>
                                        <img class="auth-img" src="images/auth.jpg" alt="author image">
                                        <p>
                                            <a href="#">AazzTech</a>
                                        </p>
                                    </li>
                                    <li class="product_cat">
                                        <a href="#">
                                            <span class="lnr lnr-book"></span> WordPress</a>
                                    </li>
                                </ul>
                                <!-- end /.titlebtm -->

                                <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the
                                    mattis, leo quam aliquet congue placerat mi id nisi interdum mollis. Praesent pharetra,
                                    justo ut scelerisque the mattis, leo quam aliquet congue justo ut scelerisque.</p>
                            </div>
                            <!-- end /.product-desc -->

                            <div class="product_data">
                                <div class="tags tags--round">
                                    <ul>
                                        <li>
                                            <a href="#">website</a>
                                        </li>
                                        <li>
                                            <a href="#">plugin</a>
                                        </li>
                                        <li>
                                            <a href="#">landing page</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- end /.tags -->
                                <div class="product-purchase featured--product-purchase">
                                    <div class="price_love">
                                        <span>$10 - $50</span>
                                        <p>
                                            <span class="lnr lnr-heart"></span> 90</p>
                                    </div>
                                    <div class="sell">
                                        <p>
                                            <span class="lnr lnr-cart"></span>
                                            <span>16</span>
                                        </p>
                                    </div>

                                    <div class="rating product--rating">
                                        <ul>
                                            <li>
                                                <span class="fa fa-star"></span>
                                            </li>
                                            <li>
                                                <span class="fa fa-star"></span>
                                            </li>
                                            <li>
                                                <span class="fa fa-star"></span>
                                            </li>
                                            <li>
                                                <span class="fa fa-star"></span>
                                            </li>
                                            <li>
                                                <span class="fa fa-star"></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- end /.product-purchase -->
                            </div>
                        </div>
                        <!-- end /.featured__product-description -->
                    </div>
                    <!--end /.featured__single-slider-->

                    <div class="featured__single-slider">
                        <div class="featured__preview-img">
                            <img src="images/featprod.jpg" alt="Featured products">
                            <div class="prod_btn">
                                <a href="single-product.html" class="transparent btn--sm btn--round">More Info</a>
                                <a href="single-product.html" class="transparent btn--sm btn--round">Live Demo</a>
                            </div>
                        </div>
                        <!-- end /.featured__preview-img -->

                        <div class="featured__product-description">
                            <div class="product-desc desc--featured">
                                <a href="single-product.html" class="product_title">
                                    <h4>MartPlace - Digital Marketplace</h4>
                                </a>
                                <ul class="titlebtm">
                                    <li>
                                        <img class="auth-img" src="images/auth.jpg" alt="author image">
                                        <p>
                                            <a href="#">AazzTech</a>
                                        </p>
                                    </li>
                                    <li class="product_cat">
                                        <a href="#">
                                            <span class="lnr lnr-book"></span> WordPress</a>
                                    </li>
                                </ul>
                                <!-- end /.titlebtm -->

                                <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the
                                    mattis, leo quam aliquet congue placerat mi id nisi interdum mollis. Praesent pharetra,
                                    justo ut scelerisque the mattis, leo quam aliquet congue justo ut scelerisque.</p>
                            </div>
                            <!-- end /.product-desc -->

                            <div class="product_data">
                                <div class="tags tags--round">
                                    <ul>
                                        <li>
                                            <a href="#">website</a>
                                        </li>
                                        <li>
                                            <a href="#">plugin</a>
                                        </li>
                                        <li>
                                            <a href="#">landing page</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- end /.tags -->
                                <div class="product-purchase featured--product-purchase">
                                    <div class="price_love">
                                        <span>$10 - $50</span>
                                        <p>
                                            <span class="lnr lnr-heart"></span> 90</p>
                                    </div>
                                    <div class="sell">
                                        <p>
                                            <span class="lnr lnr-cart"></span>
                                            <span>16</span>
                                        </p>
                                    </div>

                                    <div class="rating product--rating">
                                        <ul>
                                            <li>
                                                <span class="fa fa-star"></span>
                                            </li>
                                            <li>
                                                <span class="fa fa-star"></span>
                                            </li>
                                            <li>
                                                <span class="fa fa-star"></span>
                                            </li>
                                            <li>
                                                <span class="fa fa-star"></span>
                                            </li>
                                            <li>
                                                <span class="fa fa-star"></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- end /.product-purchase -->
                            </div>
                        </div>
                        <!-- end /.featured__product-description -->
                    </div>
                    <!--end /.featured__single-slider-->
                </div>
            </div>
        </div>
        <!-- end /.featured__preview-img -->
    </div>
    <!-- end /.featured-product-slider -->
</section> --}}
<!--================================
END FEATURED PRODUCT AREA
=================================-->

@endsection
