<div class="menu-area">
        <div class="top-menu-area">
            <div class="container">
                <div class="row header">
                    <div class="col-lg-3 col-md-3 col-sm-1  v_middle">
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

                    <div class="col-lg-8 col-md-9 col-sm-11 v_middle">
                        <div>
                            <div class="author__notification_area">
                                <ul>
                                    <li>
                                            <a href="https://wa.me/905362316258" class="contact_information">
                                              <span class="lnr lnr-phone"></span> +90 536 231 62 58
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
                </div>
            </div>
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
                                            <img src="{{ asset('images/logo.png') }}" alt="" style="width: 50px">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{LaravelLocalization::localizeURL('/')}}">@lang('app.home')</a>
                                    </li>
                                    <li>
                                        <a href="{{LaravelLocalization::localizeURL('/about-us')}}">@lang('app.about_us')</a>
                                    </li>
                                    <li>
                                        <a href="{{LaravelLocalization::localizeURL('/products')}}">@lang('app.all_products')</a>
                                    </li>
                                    <li>
                                        <a href="{{LaravelLocalization::localizeURL('/gallery')}}">@lang('app.gallery')</a>
                                    </li>
                                    <li>
                                        <a href="{{LaravelLocalization::localizeURL('/contact')}}">@lang('app.contact')</a>
                                    </li>
                                    <li class="has_dropdown">
                                        <a class="lnr lnr-earth"></a>
                                        <div class="dropdowns dropdown--menu  dropdown_lang">
                                            <ul>
                                                <li>
                                                    <a href="{{ LaravelLocalization::getLocalizedURL('en') }}">@lang('app.english')</a>
                                                </li>
                                                <li>
                                                    <a href="{{LaravelLocalization::getLocalizedURL('ar') }}">@lang('app.arabic')</a>
                                                </li>
                                                <li>
                                                    <a href="{{LaravelLocalization::getLocalizedURL('tr') }}">@lang('app.turkish')</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                  @if (Auth::check() && Auth::user()->is_admin == 1)
                                    <li class="has_dropdown">
                                            <a class="lnr lnr-user"></a>
                                            <div class="dropdowns dropdown--menu  dropdown_user">
                                                <ul>
                                                    <li>
                                                        <a href="{{LaravelLocalization::localizeURL('/profile')}}">@lang('app.profile')</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{LaravelLocalization::localizeURL('/logout')}}">@lang('app.logout')</a>
                                                    </li>
                                                </ul>
                                            </div>
                                    </li>
                                  @endif
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
