@extends('master.app')

@section('meta')
 <meta property="keywords" content="{{$product->name}}">
 <meta property="description" content="{!! strip_tags($product->description) !!}">

 <meta property="og:site_name" content="Orex.co">
 <meta property="og:url" content="{{ url()->current() }}">
 <meta property="og:image" itemprop="image" content="">
 <meta property="og:image:secure_url" itemprop="image" content="{{$product->image}}">
 <meta property="og:locale" content="en_US">
 <meta property="og:type" content="website">
 <meta property="og:title" content="{{$product->name}}">
 <meta property="og:description" content="{!! strip_tags($product->description) !!}">
 <meta property="fb:app_id" content="1359039120781731">

 <meta name="twitter:card" content="summary"/>
 <meta name="twitter:site" content="@solarorex" />
 <meta name="twitter:title" content="{{$product->name}}"/>
 <meta name="twitter:description" content="{!! strip_tags($product->description) !!}"/>
 <meta name="twitter:image" content="{{$product->image}}"/>

 @endsection

@section('content')
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb">
                        <ul>
                            <li>
                                <a href="#">
                                   Product
                                </a>
                            </li>
                            <li>
                                <a href="#">Details</a>
                            </li>
                            {{-- <li class="active">
                                <a href="#">Corporate & Business</a>
                            </li> --}}
                        </ul>
                    </div>
                    <h1 class="page-title">{{$product->name}}</h1>
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


    <!--============================================
        START SINGLE PRODUCT DESCRIPTION AREA
    ==============================================-->
    <section class="single-product-desc">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="item-preview">
                        <div class="item__preview-slider">
                            <div class="prev-slide">
                                <img src="{{asset('img/'.$product->image)}}" alt="">
                            </div>
                            <div class="prev-slide">
                                <img src="images/itprv.jpg" alt="Keep calm this isn't the end of the world, the preview is just missing.">
                            </div>
                        </div>
                        <!-- end /.item--preview-slider -->

                        <div class="item__preview-thumb">
                            <div class="prev-thumb">
                                <div class="thumb-slider">
                                    <div class="item-thumb">
                                        <img src="images/thumb1.jpg" alt="This is the thumbnail of the item">
                                    </div>
                                </div>
                                <!-- end /.thumb-slider -->

                                <div class="prev-nav thumb-nav">
                                    <span class="lnr nav-{{(App::isLocale('ar') ? 'right' : 'left')}} lnr-arrow-{{(App::isLocale('ar') ? 'right' : 'left')}}"></span>
                                    <span class="lnr nav-{{(App::isLocale('ar') ? 'left' : 'right')}} lnr-arrow-{{(App::isLocale('ar') ? 'left' : 'right')}}"></span>
                                </div>
                                <!-- end /.prev-nav -->
                            </div>


                            <!-- end /.item__action -->
                        </div>
                        <!-- end /.item__preview-thumb-->


                    </div>
                    <!-- end /.item-preview-->

                    <div class="item-info">
                        <div class="item-navigation">
                            <ul class="nav nav-tabs">
                                <li>
                                    <a href="#product-details" class="active" aria-controls="product-details" role="tab" data-toggle="tab">@lang('app.product_details')</a>
                                </li>
                                <li>
                                    <a href="#product-comment" aria-controls="product-comment" role="tab" data-toggle="tab">@lang('app.comments')</a>
                                </li>
                                {{-- <li>
                                    <a href="#product-review" aria-controls="product-review" role="tab" data-toggle="tab">Reviews
                                        <span>(35)</span>
                                    </a>
                                </li> --}}
                                {{-- <li>
                                    <a href="#product-support" aria-controls="product-support" role="tab" data-toggle="tab">Support</a>
                                </li> --}}
                                {{-- <li>
                                    <a href="#product-faq" aria-controls="product-faq" role="tab" data-toggle="tab">item FAQ</a>
                                </li> --}}
                            </ul>
                        </div>
                        <!-- end /.item-navigation -->

                        <div class="tab-content">
                            <div class="fade show tab-pane product-tab active" id="product-details">
                                <div class="tab-content-wrapper">
                                    <h1>{{$product->name}}</h1>
                                    <p>{{$product->description}}</p>
                                    {{-- <h2>Features With Image:</h2>
                                    <img src="images/prodesc.jpg" alt="This is product description thumbnail"> --}}

                                    {{-- <h2>Features With HTML List Unordered:</h2>
                                    <ul>
                                        <li>Six different themes for product slider</li>
                                        <li>Featured products slider form selected categories.</li>
                                        <li>Product slider form specific categories of products. Include or exclude categories.</li>
                                        <li>Product slider form specific tags of products. Include or exclude tags. New</li>
                                    </ul> --}}

                                    {{-- <h2>Features With HTML List Ordered:</h2>
                                    <ol>
                                        <li>Six different themes for product slider</li>
                                        <li>Featured products slider form selected categories.</li>
                                        <li>Product slider form specific categories of products. Include or exclude categories.</li>
                                        <li>Product slider form specific tags of products. Include or exclude tags. New</li>
                                    </ol> --}}

                                    {{-- <h2>Features With HTML List Ordered:</h2>
                                    <iframe width="100" height="400" src="https://www.youtube.com/embed/w2zIUJrglR4" allowfullscreen></iframe> --}}
                                </div>
                            </div>
                            <!-- end /.tab-content -->

                            <div class="fade tab-pane product-tab" id="product-comment">
                                <div class="thread">
                                    <ul class="media-list thread-list">



                                        <li class="single-thread">
                                            <div class="media">
                                                <div class="media-left">
                                                    <img class="media-object" src="{{ asset('images/avtar-small.png') }}" alt="Commentator Avatar" style="width: 70px;">
                                                </div>
                                                <div class="media-body">
                                                    <div>
                                                        <div class="media-heading">
                                                                <h4>Themexylum</h4>
                                                            <span>9 Hours Ago</span>
                                                        </div>
                                                        @if (Auth::check() && Auth::user()->is_admin == 1)
                                                        <a href="#" class="reply-link">Reply</a>
                                                        @endif
                                                    </div>
                                                    <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut
                                                        sceleris que the mattis, leo quam aliquet congue placerat mi id nisi
                                                        interdum mollis. </p>
                                                </div>
                                            </div>

                                            <!-- comment reply -->
                                            <div class="media depth-2 reply-comment">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="images/m2.png" alt="Commentator Avatar">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <form action="#" class="comment-reply-form">
                                                        <textarea name="reply-comment" placeholder="Write your comment..."></textarea>
                                                        <button class="btn btn--sm btn--round">Post Comment</button>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- comment reply -->
                                        </li>


                                    </ul>
                                    <!-- end /.media-list -->

                                    <div class="item-action">
                                        <div class="action-btns">
                                            <button id="add_comment" class="btn btn--round btn--lg">@lang('app.add_comment')</button>
                                            {{-- <a href="#" class="btn btn--round btn--lg btn--icon">
                                                <span class="lnr lnr-heart"></span>Add To Favorites</a> --}}
                                        </div>
                                    </div>


                                    <div class="message-form" id="form_comment" style="display: none">
                                        <form action="#">
                                            <div class="form-group">
                                                <input type="text" name="name" class="text_field" id="author-message" placeholder="الاسم" required="">
                                            </div>

                                            <div class="form-group">
                                                <input type="email" name="email" class="text_field" id="author-message" placeholder="البريد الالكتروني" required="">
                                            </div>

                                            <div class="form-group">
                                                <textarea name="message" class="text_field" id="author-message" placeholder="الرسالة"></textarea>
                                            </div>

                                            <div class="msg_submit">
                                                <button type="submit" class="btn btn--md btn--round">إرسال</button>
                                            </div>
                                        </form>
                                    </div>




                                            <div class="pagination-area pagination-area2">
                                        <nav class="navigation pagination" role="navigation">
                                            <div class="nav-links">
                                                <a class="page-numbers current" href="#">1</a>
                                                <a class="page-numbers" href="#">2</a>
                                                <a class="page-numbers" href="#">3</a>
                                                <a class="next page-numbers" href="#">
                                                    <span class="lnr lnr-arrow-right"></span>
                                                </a>
                                            </div>
                                        </nav>
                                    </div>
                                    <!-- end /.comment pagination area -->
                                    <!-- end /.comment-form-area -->
                                </div>
                                <!-- end /.comments -->
                            </div>
                            <!-- end /.product-comment -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <aside class="sidebar sidebar--single-product">
                        <div class="sidebar-card card--metadata">
                            <ul class="data">
                                {{-- <li>
                                    <p>
                                        <span class="lnr lnr-heart scolor"></span>Favorites</p>
                                    <span>240</span>
                                </li> --}}
                                <li>
                                    <p>
                                        <span class="lnr lnr-bubble mcolor3"></span>@lang('app.comments')</p>
                                    <span>35</span>
                                </li>
                            </ul>
                        </div>

                        <div class="sidebar-card card--product-infos">
                            <div class="card-title">
                                <h4>@lang('app.product_details')</h4>
                            </div>

                            <ul class="infos">
                                <li>
                                    <p class="data-label">@lang('app.product_released')</p>
                                    <p class="info">{{$product->created_at}}</p>
                                </li>
                                <li>
                                    <p class="data-label">@lang('app.product_updated')</p>
                                    <p class="info">{{$product->updated_at}}</p>
                                </li>
                                <li>
                                    <p class="data-label">@lang('app.product_category')</p>
                                    <p class="info">Marble</p>
                                </li>
                            </ul>
                        </div>

                        <div class="author-card sidebar-card ">
                            <div class="card-title">
                                <h4>@lang('app.product_owner')</h4>
                            </div>

                            <div class="author-infos">
                                <div class="author_avatar">
                                    <img src="{{ asset('images/avatar_person.png') }}" alt="product owner picture">
                                </div>

                                <div class="author">
                                    <h4>Merve AlMashhoud</h4>
                                    <p>ElMass Marmar Owner</p>
                                </div>

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
                                    </ul>
                                </div>

                                <div class="author-btn">
                                    <a href="{{LaravelLocalization::localizeURL('/product-owner-profile')}}" class="btn btn--sm btn--round">View Profile</a>
                                    {{-- <a href="#" class="btn btn--sm btn--round">Message</a> --}}
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>

            </div>
        </div>
    </section>
@endsection

@section("script")

<script>
    $("#add_comment").click(function()
    {
        $("#form_comment").toggle();
    })
</script>

@endsection
