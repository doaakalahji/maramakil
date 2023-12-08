@extends("master.app")

 @section('meta')
 <meta property="keywords" content="@lang('app.keyword_home')">
 <meta property="description" content="{!! strip_tags('test') !!}">

 <meta property="og:site_name" content="Orex.co">
 <meta property="og:url" content="{{ url()->current() }}">
 <meta property="og:image" itemprop="image" content="">
 <meta property="og:image:secure_url" itemprop="image" content="">
 <meta property="og:locale" content="en_US">
 <meta property="og:type" content="website">
 <meta property="og:title" content="@lang('meta_home.keyword_home_graph')">
 <meta property="og:description" content="{!! strip_tags("test") !!}">
 <meta property="fb:app_id" content="1359039120781731">


 <meta name="twitter:card" content="summary"/>
 <meta name="twitter:site" content="@solarorex" />
 <meta name="twitter:title" content="@lang('meta_home.keyword_home_twitter')"/>
 <meta name="twitter:description" content="{!! strip_tags("test") !!}"/>
 <meta name="twitter:image" content="@lang('meta_home.keyword')"/>


 @endsection

@section("content")


<section class="hero-area bgimage">
    <div class="bg_image_holder" >
        <img src="{{ asset('images/h12.png') }}" alt="images/hero_area_bg1.jpg" width="100%">
    </div>
    <!-- start hero-content -->
    {{-- <div class="hero-content content_above"> --}}
        <!-- start .contact_wrapper -->
        <div class="content-wrapper">
            <!-- start .container -->
            <div class="container">
                <!-- start row -->
                <div class="row">
                    <!-- start col-md-12 -->
                    <div class="col-md-12">
                        {{-- <div class="hero__content__title">
                            <h1>
                                <span class="bold hero_img">@lang("app.mass")</span>
                            </h1>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="search-area">
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
    </div> --}}

</section>

<section class="overview">
    <div class="single-feature">
        <div class="container">
            <div class="col-md-6 v_middle aos-init aos-animate" data-aos="fade-down" data-aos-duration="1200">
                <img src="{{ asset('images/marble-caption.png') }}" alt="This overview image">
            </div>

            <div class="col-md-6 v_middle">
                <h2 class="overview-title">@lang('app.marble')</h2>
                <p>@lang('app.marble_description1')</p>
                <p>@lang('app.marble_description2')</p>
            </div>
        </div>
    </div>

    <div class="single-feature bgcolor">
        <div class="container">
            <div class="col-md-6 v_middle">
                {{-- <h2 class="overview-title">Template Features</h2> --}}
                <p>@lang('app.marble_description3')</p>
                <p>@lang('app.marble_description4')</p>
            </div>

            <div class="col-md-6 v_middle aos-init aos-animate" data-aos="fade-down" data-aos-duration="1200">
                <img src="{{ asset('images/marble-caption2.png') }}" alt="This overview image" >
            </div>
        </div>
    </div>
</section>
{{-- style="background-image: url({{ asset('images/features.jpg') }}); padding:70px;" --}}
<section class="section--padding2" >
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="feature__content aos-init aos-animate" data-aos="fade-up" data-aos-duration="1200">
                    <i class="flaticon  flaticon-tiles-2"></i>
                    <p>@lang('app.marble_description5')</p>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 ">
                    <div class="feature__content aos-init aos-animate" data-aos="fade-up" data-aos-duration="1200">
                        <i class="flaticon  flaticon-wood"></i>
                        <p>@lang('app.marble_description6')</p>
                    </div>
            </div>
        </div>
    </div>
</section>

{{-- style="background-image: url({{ asset('images/types/stone-floor-texture.jpg') }});" --}}
<section class="features section--padding" style="background-image: url({{ asset('images/types/stone-floor-texture.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h1> @lang('app.marble_types_tilte') </h1>
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="feature aos-init aos-animate" data-aos="flip-left"  data-aos-duration="1200" >
                    <div class="feature__img">
                        <img src="{{ asset('images/types/crema-nuova.png') }}" alt="feature">
                    </div>
                    <div class="feature__title">
                        <h3>Crema Nuova</h3>
                    </div>
                    {{-- <div class="feature__desc">
                        <p>We meticulously select and process our marble to guarantee top-notch quality</p>
                    </div> --}}
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="feature aos-init aos-animate" data-aos="flip-left"  data-aos-duration="1200" >
                    <div class="feature__img">
                        <img src="{{ asset('images/types/burdur-beige.png') }}" alt="feature">
                    </div>
                    <div class="feature__title">
                        <h3>Burdur Beige</h3>
                    </div>
                    {{-- <div class="feature__desc">
                        <p>Our skilled artisans and modern techniques ensure precision in every product.</p>
                    </div> --}}
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="feature aos-init aos-animate" data-aos="flip-left"  data-aos-duration="1200" >
                    <div class="feature__img">
                        <img src="{{ asset('images/types/mugla-marble.png') }}" alt="feature">
                    </div>
                    <div class="feature__title">
                        <h3>Mugla Marble</h3>
                    </div>
                    {{-- <div class="feature__desc">
                        <p>Your needs are our priority, and we aim to exceed your expectations.</p>
                    </div> --}}
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="feature aos-init aos-animate" data-aos="flip-left"  data-aos-duration="1200" >
                    <div class="feature__img">
                        <img src="{{ asset('images/types/emperador-marble.png') }}" alt="feature">
                    </div>
                    <div class="feature__title">
                        <h3>Emperador Marble</h3>
                    </div>
                    {{-- <div class="feature__desc">
                        <p>Your needs are our priority, and we aim to exceed your expectations.</p>
                    </div> --}}
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="feature aos-init aos-animate" data-aos="flip-left"  data-aos-duration="1200">
                    <div class="feature__img">
                        <img src="{{ asset('images/types/piazza-bianco.png') }}" alt="feature">
                    </div>
                    <div class="feature__title">
                        <h3>Piazza Bianco</h3>
                    </div>
                    {{-- <div class="feature__desc">
                        <p>Your needs are our priority, and we aim to exceed your expectations.</p>
                    </div> --}}
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="feature aos-init aos-animate" data-aos="flip-left"  data-aos-duration="1200">
                    <div class="feature__img">
                        <img src="{{ asset('images/types/afyon-violet.png') }}" alt="feature">
                    </div>
                    <div class="feature__title">
                        <h3>Afyon Violet</h3>
                    </div>
                    {{-- <div class="feature__desc">
                        <p>Your needs are our priority, and we aim to exceed your expectations.</p>
                    </div> --}}
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="feature aos-init aos-animate" data-aos="flip-left"  data-aos-duration="1200">
                    <div class="feature__img">
                        <img src="{{ asset('images/types/lilac-marble.png') }}" alt="feature">
                    </div>
                    <div class="feature__title">
                        <h3>Lilac Marble</h3>
                    </div>
                    {{-- <div class="feature__desc">
                        <p>Your needs are our priority, and we aim to exceed your expectations.</p>
                    </div> --}}
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="feature aos-init aos-animate" data-aos="flip-left"  data-aos-duration="1200">
                    <div class="feature__img">
                        <img src="{{ asset('images/types/moonstone.png') }}" alt="feature">
                    </div>
                    <div class="feature__title">
                        <h3>Moonstone</h3>
                    </div>
                    {{-- <div class="feature__desc">
                        <p>Your needs are our priority, and we aim to exceed your expectations.</p>
                    </div> --}}
                </div>
                <!-- end /.feature -->
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="feature aos-init aos-animate" data-aos="flip-left"  data-aos-duration="1200">
                    <div class="feature__img">
                        <img src="{{ asset('images/types/moonstone-sliver.png') }}" alt="feature">
                    </div>
                    <div class="feature__title">
                        <h3>Moonstone Gray</h3>
                    </div>
                    {{-- <div class="feature__desc">
                        <p>Your needs are our priority, and we aim to exceed your expectations.</p>
                    </div> --}}
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="feature aos-init aos-animate" data-aos="flip-left"  data-aos-duration="1200">
                    <div class="feature__img">
                        <img src="{{ asset('images/types/dolomite-marble.png') }}" alt="feature">
                    </div>
                    <div class="feature__title">
                        <h3>Dolomite Marble</h3>
                    </div>
                    {{-- <div class="feature__desc">
                        <p>Your needs are our priority, and we aim to exceed your expectations.</p>
                    </div> --}}
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="feature aos-init aos-animate" data-aos="flip-left"  data-aos-duration="1200">
                    <div class="feature__img">
                        <img src="{{ asset('images/types/turkish-emperador.png') }}" alt="feature">
                    </div>
                    <div class="feature__title">
                        <h3>Turkish Emperador</h3>
                    </div>
                    {{-- <div class="feature__desc">
                        <p>Your needs are our priority, and we aim to exceed your expectations.</p>
                    </div> --}}
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="feature aos-init aos-animate" data-aos="flip-left"  data-aos-duration="1200">
                    <div class="feature__img">
                        <img src="{{ asset('images/types/limra-stone-turkey.png') }}" alt="feature">
                    </div>
                    <div class="feature__title">
                        <h3>Limra Stone Turkey</h3>
                    </div>
                    {{-- <div class="feature__desc">
                        <p>Your needs are our priority, and we aim to exceed your expectations.</p>
                    </div> --}}
                </div>
                <!-- end /.feature -->
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="feature aos-init aos-animate" data-aos="flip-left"  data-aos-duration="1200">
                    <div class="feature__img">
                        <img src="{{ asset('images/types/gray-marble.png') }}" alt="feature">
                    </div>
                    <div class="feature__title">
                        <h3>Gray Marble</h3>
                    </div>
                    {{-- <div class="feature__desc">
                        <p>Your needs are our priority, and we aim to exceed your expectations.</p>
                    </div> --}}
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="feature aos-init aos-animate" data-aos="flip-left"  data-aos-duration="1200">
                    <div class="feature__img">
                        <img src="{{ asset('images/types/kemalpaşa-marble.png') }}" alt="feature">
                    </div>
                    <div class="feature__title">
                        <h3>Kemalpaşa Marble</h3>
                    </div>
                    {{-- <div class="feature__desc">
                        <p>Your needs are our priority, and we aim to exceed your expectations.</p>
                    </div> --}}
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="feature aos-init aos-animate" data-aos="flip-left"  data-aos-duration="1200">
                    <div class="feature__img">
                        <img src="{{ asset('images/types/black-marble.png') }}" alt="feature">
                    </div>
                    <div class="feature__title">
                        <h3>Black Marble</h3>
                    </div>
                    {{-- <div class="feature__desc">
                        <p>Your needs are our priority, and we aim to exceed your expectations.</p>
                    </div> --}}
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="feature aos-init aos-animate" data-aos="flip-left"  data-aos-duration="1200">
                    <div class="feature__img">
                        <img src="{{ asset('images/types/rosso-levanto.png') }}" alt="feature">
                    </div>
                    <div class="feature__title">
                        <h3>Rosso Levanto</h3>
                    </div>
                    {{-- <div class="feature__desc">
                        <p>Your needs are our priority, and we aim to exceed your expectations.</p>
                    </div> --}}
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="feature aos-init aos-animate" data-aos="flip-left"  data-aos-duration="1200">
                    <div class="feature__img">
                        <img src="{{ asset('images/types/streaky-belvedere.png') }}" alt="feature">
                    </div>
                    <div class="feature__title">
                        <h3>Streaky Belvedere</h3>
                    </div>
                    {{-- <div class="feature__desc">
                        <p>Your needs are our priority, and we aim to exceed your expectations.</p>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>

    <section class="game-section">
        <h2 class="line-title">@lang('app.marble_options')</h2>
        <br>
        <p>@lang('app.marble_options_descrption')</p>
        <div class="owl-carousel custom-carousel owl-theme">
          <div class="item active" style="background-image: url({{ asset('images/5.jpg') }});">
            <div class="item-desc">
              <h6 class="option_title">@lang('app.marble_option1')</h6>
              <p class="option_paragraph">@lang('app.marble_option1_descrption')</p>
            </div>
          </div>
          <div class="item" style="background-image: url({{ asset('images/4.jpg') }});">
            <div class="item-desc">
              <h5 class="option_title">@lang('app.marble_option2')</h5>
              <p class="option_paragraph">@lang('app.marble_option2_descrption')</p>
            </div>
          </div>
          <div class="item" style="background-image: url({{ asset('images/7.jpg') }});">
            <div class="item-desc">
              <h5 class="option_title">@lang('app.marble_option3')</h5>
              <p class="option_paragraph">@lang('app.marble_option3_descrption')</p>
            </div>
          </div>
          <div class="item" style="background-image: url({{ asset('images/10.jpg') }});">
            <div class="item-desc">
              <h5 class="option_title">@lang('app.marble_option4')</h5>
              <p class="option_paragraph">@lang('app.marble_option4_descrption')</p>
            </div>
          </div>
          <div class="item" style="background-image: url({{ asset('images/2.jpg') }});">
            <div class="item-desc">
              <h5 class="option_title">@lang('app.marble_option5')</h5>
              <p class="option_paragraph">@lang('app.marble_option5_descrption')</p>
            </div>
          </div>
        </div>
        </div>
      </section>
@endsection
