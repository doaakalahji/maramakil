<footer class="footer-area">
    <div class="footer-big section--footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="info-footer">
                        <div class="info__logo">
                            <img src="{{ asset('images/logo.png') }}" alt="footer logo">
                        </div>
                        {{-- <p class="info--text">Nunc placerat mi id nisi interdum they mollis. Praesent pharetra, justo ut scel erisque the mattis,
                            leo quam.</p> --}}
                        {{-- <ul class="info-contact">
                            <li>
                                <span class="lnr lnr-phone info-icon"></span>
                                <span class="info">Phone: +6789-875-2235</span>
                            </li>
                            <li>
                                <span class="lnr lnr-envelope info-icon"></span>
                                <span class="info">support@aazztech.com</span>
                            </li>
                            <li>
                                <span class="lnr lnr-map-marker info-icon"></span>
                                <span class="info">202 New Hampshire Avenue Northwest #100, New York-2573</span>
                            </li>
                        </ul> --}}
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="footer-menu">
                        {{-- <h4 class="footer-widget-title text--white">@lang('app.links')</h4> --}}
                        <ul>
                            <li>
                                <a href="{{LaravelLocalization::localizeURL('/')}}">@lang('app.home')</a>
                            </li>
                            <li>
                                <a href="{{LaravelLocalization::localizeURL('/products')}}">@lang('app.all_products')</a>
                            </li>
                            <li>
                                <a href="{{LaravelLocalization::localizeURL('/about-us')}}">@lang('app.about_us')</a>
                            </li>
                            <li>
                                <a href="{{LaravelLocalization::localizeURL('/contact')}}">@lang('app.contact')</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="newsletter">
                        {{-- <h4 class="footer-widget-title text--white">Newsletter</h4>
                        <p>Subscribe to get the latest news, update and offer information. Don't worry, we won't send spam!</p> --}}
                        {{-- <div class="newsletter__form">
                            <form action="#">
                                <div class="field-wrapper">
                                    <input class="relative-field rounded" type="text" placeholder="Enter email">
                                    <button class="btn btn--round" type="submit">@lang('app.contact_send')</button>
                                </div>
                            </form>
                        </div> --}}
                        <ul class="info-contact">
                            <li>
                                <a href="https://wa.me/905369540616" class="contact_information">
                                    <span class="lnr lnr-phone info-icon"></span>
                                    <span class="info"> +90 536 954 06 16</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://wa.me/905362316258" class="contact_information">
                                    <span class="lnr lnr-phone info-icon"></span>
                                    <span class="info"> +90 536 231 62 58</span>
                                </a>
                            </li>
                            <li>
                                <a href="mailto:mervealmashhud@gmail.com" class="contact_information">
                                    <span class="lnr lnr-envelope info-icon"></span>
                                    <span class="info">mervealmashhud@gmail.com</span>
                                </a>
                            </li>
                            <li>
                                <span class="lnr lnr-map-marker info-icon"></span>
                                <span class="info">Emirbeyazıt Mah</span>
                            </li>
                        </ul>

                        <div class="social social--color--filled">
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

                                <li>
                                    <a href="#">
                                        <span class="fa fa-linkedin"></span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mini-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright-text">
                        <p>&copy; 2023
                            <a href="#">El Mass Marmar</a>. All rights reserved.
                            {{-- <a href="#">AazzTech</a> --}}
                        </p>
                    </div>

                    <div class="go_top">
                        <span class="lnr lnr-chevron-up"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
