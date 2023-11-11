    <!-- start menu-area -->
    <div class="menu-area">
        <!-- start .top-menu-area -->
        <div class="top-menu-area">
            <!-- start .container -->
            <div class="container">
                <!-- start .row -->
                <div class="row header">
                    <!-- start .col-md-3 -->
                    <div class="col-lg-3 col-md-3 col-6 v_middle">
                        <div class="author__notification_area">
                            <ul>
                                <li>
                                    <div class="icon_wrap">
                                        <span class="fa fa-facebook"></span>
                                    </div>
                                </li>

                                <li>
                                    <div class="icon_wrap">
                                        <span class="fa fa-instagram"></span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- end /.col-md-3 -->

                    <!-- start .col-md-5 -->
                    <div class="col-lg-8 offset-lg-1 col-md-9 col-6 v_middle">
                        <!-- start .author-area -->
                        <div class="author-area">

                            <div class="author__notification_area">
                                <ul>
                                    <li>
                                            <a href="https://wa.me/905369540616" class="contact_information">
                                              <span class="lnr lnr-phone"></span> +90 536 954 06 16
                                            </a>
                                    </li>

                                    <li>
                                        <a href="https://wa.me/905369540616" class="contact_information">
                                          <span class="lnr lnr-phone"></span> +90 536 954 06 16
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="contact_information">
                                            <span class="lnr lnr-map-marker"></span> Emirbeyazıt Mah
                                        </a>
                                    </li>

                                    <li>
                                        <a href="mailto:mervealmashhud@gmail.com" class="contact_information">
                                           <span class="lnr lnr-envelope"></span> mervealmashhud@gmail.com
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>


                      </div>
                    <!-- end /.col-md-5 -->
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>


        <div class="mainmenu">

            <div class="container">

                <div class="row">

                    <div class="col-md-12">
                        <div class="navbar-header">

                            <div class="mainmenu__search">
                                <form action="#">
                                    <div class="searc-wrap">
                                        <input type="text" placeholder="@lang('app.search')">
                                        <button type="submit" class="search-wrap__btn">
                                            <span class="lnr lnr-magnifier"></span>
                                        </button>
                                    </div>
                                </form>
                            </div>

                        </div>

                        <nav class="navbar navbar-expand-md navbar-light mainmenu__menu">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li>
                                        <a href="{{ route('home') }}">
                                            <img src="{{ asset('images/mass_logo.png') }}" alt="" style="width: 50px">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('home') }}">@lang('app.home')</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('about-us') }}">@lang('app.about_us')</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('products') }}">@lang('app.all_products')</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('contact') }}">@lang('app.contact')</a>
                                    </li>
                                    <li class="has_dropdown">
                                        <a class="fa fa-language"></a>
                                        <div class="dropdowns dropdown--menu  dropdown_lang">
                                            <ul>
                                                <li>
                                                    <a href="{{route('langconvert' , 'en')}}">@lang('app.english')</a>
                                                </li>
                                                <li>
                                                    <a href="{{route('langconvert' , 'ar')}}">@lang('app.arabic')</a>
                                                </li>
                                                <li>
                                                    <a href="{{route('langconvert' , 'tr')}}">@lang('app.turkish')</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.navbar-collapse -->
                        </nav>
                    </div>
                    <!-- end /.col-md-12 -->
                </div>
                <!-- end /.row-->
            </div>
            <!-- start .container -->
        </div>

    </div>
