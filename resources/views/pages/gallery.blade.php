@extends("master.app")

 @section('meta')
 <meta property="keywords" content="@lang('app.')">
 <meta property="description" content="{!! strip_tags('test') !!}">

 <meta property="og:site_name" content="Orex.co">
 <meta property="og:url" content="{{ url()->current() }}">
 <meta property="og:image" itemprop="image" content="">
 <meta property="og:image:secure_url" itemprop="image" content="">
 <meta property="og:locale" content="en_US">
 <meta property="og:type" content="website">
 <meta property="og:title" content="@lang('meta_home.')">
 <meta property="og:description" content="{!! strip_tags("test") !!}">
 <meta property="fb:app_id" content="1359039120781731">


 <meta name="twitter:card" content="summary"/>
 <meta name="twitter:site" content="@solarorex" />
 <meta name="twitter:title" content="@lang('meta_home.')"/>
 <meta name="twitter:description" content="{!! strip_tags("test") !!}"/>
 <meta name="twitter:image" content="@lang('')"/>


 @endsection

@section("content")
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
                            <a href="{{LaravelLocalization::localizeURL('/gallery')}}">@lang("app.gallery")</a>
                        </li>
                    </ul>
                </div>
                <h1 class="page-title">@lang("app.gallery")</h1>
            </div>
        </div>
    </div>
</section>

<section class="features section--padding">
    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-md-6">
                <a
                data-fancybox="gallery"
                href="{{ asset('images/gallery/gallery1.jpg') }}"
                data-caption="Optional caption,&lt;br /&gt;that can contain &lt;em&gt;HTML&lt;/em&gt; code"
                >
                <img src="{{ asset('images/gallery/gallery1.jpg') }}" width="1280" height="300" alt="" class="gallery_image" />
                </a>
            </div>

            <div class="col-lg-4 col-md-6">
                <a
                data-fancybox="gallery"
                href="{{ asset('images/gallery/gallery2.jpg') }}"
                data-caption="Optional caption,&lt;br /&gt;that can contain &lt;em&gt;HTML&lt;/em&gt; code"
                >
                <img src="{{ asset('images/gallery/gallery2.jpg') }}" width="1280" height="300" alt="" class="gallery_image" />
                </a>
            </div>

            <div class="col-lg-4 col-md-6">
                <a
                data-fancybox="gallery"
                href="{{ asset('images/gallery/gallery3.jpg') }}"
                data-caption="Optional caption,&lt;br /&gt;that can contain &lt;em&gt;HTML&lt;/em&gt; code"
                >
                <img src="{{ asset('images/gallery/gallery3.jpg') }}" width="1280" height="300" alt="" class="gallery_image" />
                </a>
            </div>

            <div class="col-lg-4 col-md-6">
                <a
                data-fancybox="gallery"
                href="{{ asset('images/gallery/gallery4.jpg') }}"
                data-caption="Optional caption,&lt;br /&gt;that can contain &lt;em&gt;HTML&lt;/em&gt; code"
                >
                <img src="{{ asset('images/gallery/gallery4.jpg') }}" width="1280" height="300" alt="" class="gallery_image" />
                </a>
            </div>

            <div class="col-lg-4 col-md-6">
                <a
                data-fancybox="gallery"
                href="{{ asset('images/gallery/gallery5.jpg') }}"
                data-caption="Optional caption,&lt;br /&gt;that can contain &lt;em&gt;HTML&lt;/em&gt; code"
                >
                <img src="{{ asset('images/gallery/gallery5.jpg') }}" width="1280" height="300" alt="" class="gallery_image" />
                </a>
            </div>

            <div class="col-lg-4 col-md-6">
                <a
                data-fancybox="gallery"
                href="{{ asset('images/gallery/gallery6.jpg') }}"
                data-caption="Optional caption,&lt;br /&gt;that can contain &lt;em&gt;HTML&lt;/em&gt; code"
                >
                <img src="{{ asset('images/gallery/gallery6.jpg') }}" width="1280" height="300" alt="" class="gallery_image" />
                </a>
            </div>

            <div class="col-lg-4 col-md-6">
                <a
                data-fancybox="gallery"
                href="{{ asset('images/gallery/gallery7.jpg') }}"
                data-caption="Optional caption,&lt;br /&gt;that can contain &lt;em&gt;HTML&lt;/em&gt; code"
                >
                <img src="{{ asset('images/gallery/gallery7.jpg') }}" width="1280" height="300" alt="" class="gallery_image" />
                </a>
            </div>

            <div class="col-lg-4 col-md-6">
                <a
                data-fancybox="gallery"
                href="{{ asset('images/gallery/gallery8.jpg') }}"
                data-caption="Optional caption,&lt;br /&gt;that can contain &lt;em&gt;HTML&lt;/em&gt; code"
                >
                <img src="{{ asset('images/gallery/gallery8.jpg') }}" width="1280" height="300" alt="" class="gallery_image" />
                </a>
            </div>

            <div class="col-lg-4 col-md-6">
                <a
                data-fancybox="gallery"
                href="{{ asset('images/gallery/gallery9.jpg') }}"
                data-caption="Optional caption,&lt;br /&gt;that can contain &lt;em&gt;HTML&lt;/em&gt; code"
                >
                <img src="{{ asset('images/gallery/gallery9.jpg') }}" width="1280" height="300" alt="" class="gallery_image" />
                </a>
            </div>

            <div class="col-lg-4 col-md-6">
                <a
                data-fancybox="gallery"
                href="{{ asset('images/gallery/gallery10.jpg') }}"
                data-caption="Optional caption,&lt;br /&gt;that can contain &lt;em&gt;HTML&lt;/em&gt; code"
                >
                <img src="{{ asset('images/gallery/gallery10.jpg') }}" width="1280" height="300" alt="" class="gallery_image" />
                </a>
            </div>

            <div class="col-lg-4 col-md-6">
                <a
                data-fancybox="gallery"
                href="{{ asset('images/gallery/gallery11.jpg') }}"
                data-caption="Optional caption,&lt;br /&gt;that can contain &lt;em&gt;HTML&lt;/em&gt; code"
                >
                <img src="{{ asset('images/gallery/gallery11.jpg') }}" width="1280" height="300" alt="" class="gallery_image" />
                </a>
            </div>

            <div class="col-lg-4 col-md-6">
                <a
                data-fancybox="gallery"
                href="{{ asset('images/gallery/gallery12.jpg') }}"
                data-caption="Optional caption,&lt;br /&gt;that can contain &lt;em&gt;HTML&lt;/em&gt; code"
                >
                <img src="{{ asset('images/gallery/gallery12.jpg') }}" width="1280" height="300" alt="" class="gallery_image" />
                </a>
            </div>

            <div class="col-lg-4 col-md-6">
                <a
                data-fancybox="gallery"
                href="{{ asset('images/gallery/gallery13.jpg') }}"
                data-caption="Optional caption,&lt;br /&gt;that can contain &lt;em&gt;HTML&lt;/em&gt; code"
                >
                <img src="{{ asset('images/gallery/gallery13.jpg') }}" width="1280" height="300" alt="" class="gallery_image" />
                </a>
            </div>


        </div>
    </div>
</section>
@endsection
