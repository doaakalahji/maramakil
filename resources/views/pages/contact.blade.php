@extends('master.app')

@section('meta')
 <meta property="keywords" content="@lang('app.keyword_contact')">
 <meta property="description" content="@lang('app.description_contact')">

 <meta property="og:site_name" content="elmassmarmar.com">
 <meta property="og:url" content="{{ url()->current() }}">
 <meta property="og:image" itemprop="image" content="">
 <meta property="og:image:secure_url" itemprop="image" content="">
 <meta property="og:locale" content="en_US">
 <meta property="og:type" content="website">
 <meta property="og:title" content="@lang('meta_home.keyword_contact_graph')">
 <meta property="og:description" content="{!! strip_tags("test") !!}">
 <meta property="fb:app_id" content="1359039120781731">


 <meta name="twitter:card" content="summary"/>
 <meta name="twitter:site" content="@solarorex" />
 <meta name="twitter:title" content="@lang('meta_home.keyword_contact_twitter')"/>
 <meta name="twitter:description" content="{!! strip_tags("test") !!}"/>
 <meta name="twitter:image" content="@lang('meta_home.keyword')"/>
 @endsection


@section('content')
    <section class="breadcrumb-area breadcrumb--center breadcrumb--smsbtl">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page_title">
                        <h3>@lang('app.contact')</h3>
                        <p class="subtitle">@lang('app.contact_breadcrumb')</p>
                    </div>
                    <div class="breadcrumb">
                        <ul>
                            <li>
                                <a href="index.html">@lang('app.home')</a>
                            </li>
                            <li class="active">
                                <a href="#">@lang('app.contact')</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- end /.col-md-12 -->
            </div>
        </div>
    </section>

    <section class="contact-area section--padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h1>@lang('app.contact_title')</h1>
                                <p>@lang('app.contact_title_p')</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-right" data-aos-duration="1200">
                            <div class="contact_tile" >
                                <span class="tiles__icon lnr lnr-map-marker"></span>
                                <h4 class="tiles__title">@lang('app.office_address')</h4>
                                <div class="tiles__content">
                                    <p>Emirbeyazıt Mah. Çaylılar Sok. Cücenoğlu No:8/11 0539 608 5441-0538 737 0230 - Menteşe/MUĞLA</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1200">
                            <div class="contact_tile">
                                <span class="tiles__icon lnr lnr-phone"></span>
                                <h4 class="tiles__title">@lang('app.phone_number')</h4>
                                <div class="tiles__content">
                                    <p>+90 536 954 06 16</p>
                                </div>
                            </div>
                            <!-- end /.contact_tile -->
                        </div>

                        <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-left" data-aos-duration="1200">
                            <div class="contact_tile">
                                <span class="tiles__icon lnr lnr-inbox"></span>
                                <h4 class="tiles__title">@lang('app.email')</h4>
                                <div class="tiles__content">
                                    <p>masmermer@gmail.com Tic. Sic. No: 10824 Mersis No:0329181390000001</p>
                                </div>
                            </div>
                            <!-- end /.contact_tile -->
                        </div>
                        <!-- end /.col-lg-4 col-md-6 -->

                        <div class="col-md-12">
                            <div class="contact_form cardify">
                                <div class="contact_form__title">
                                    <h3>@lang('app.contact_form')</h3>
                                </div>

                                <div class="row">
                                    <div class="col-md-8 offset-md-2">
                                        <div class="contact_form--wrapper">
                                            <form action="#">
                                                <div class="row">
                                                    <div class="col-md-6" data-aos="zoom-in">
                                                        <div class="form-group">
                                                            <input type="text" placeholder="@lang('app.contact_name')">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6" data-aos="zoom-in">
                                                        <div class="form-group">
                                                            <input type="text" placeholder="@lang('app.email')">
                                                        </div>
                                                    </div>
                                                </div>

                                                <textarea cols="30" rows="10" placeholder="@lang('app.contact_message')" data-aos="zoom-in"></textarea>

                                                <div class="sub_btn">
                                                    <button type="button" class="btn btn--round btn--default" data-aos="zoom-in">@lang('app.contact_send')</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- end /.col-md-8 -->
                                </div>
                                <!-- end /.row -->
                            </div>
                            <!-- end /.contact_form -->
                        </div>
                        <!-- end /.col-md-12 -->
                    </div>
                    <!-- end /.row -->
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

    {{-- <div id="map"></div> --}}
    <!-- end /.map -->
@endsection
