@extends('master.app')

@section('meta')
 <meta property="keywords" content="">
 <meta property="description" content="{!! strip_tags('profile') !!}">

 <meta property="og:site_name" content="Orex.co">
 <meta property="og:url" content="{{ url()->current() }}">
 <meta property="og:image" itemprop="image" content="">
 <meta property="og:image:secure_url" itemprop="image" content="">
 <meta property="og:locale" content="en_US">
 <meta property="og:type" content="website">
 <meta property="og:title" content="">
 <meta property="og:description" content="{!! strip_tags('profile') !!}">
 <meta property="fb:app_id" content="1359039120781731">

 <meta name="twitter:card" content="summary"/>
 <meta name="twitter:site" content="@solarorex" />
 <meta name="twitter:title" content=""/>
 <meta name="twitter:description" content="{!! strip_tags('profile') !!}"/>
 <meta name="twitter:image" content=""/>

 @endsection

@section('content')
<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb">
                    <ul>
                        <li>
                            <a href="{{LaravelLocalization::localizeURL('/')}}">Home</a>
                        </li>
                        <li class="active">
                            <a href="{{LaravelLocalization::localizeURL('/product-owner-profile')}}">Product Owner Profile</a>
                        </li>
                    </ul>
                </div>
                <h1 class="page-title">Product Owner Profile</h1>
            </div>
        </div>
    </div>
</section>

<section class="author-profile-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <aside class="sidebar sidebar_author">
                    <div class="author-card sidebar-card">
                        <div class="author-infos">
                            <div class="author_avatar">
                                <img src="{{ asset('images/avatar_person.png') }}" alt="product owner picture">
                            </div>

                            <div class="author">
                                <h4>Merve Almashhud</h4>
                                <p>El Mass Marmar Owner</p>
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

                            {{-- <div class="author-btn">
                                <a href="#" class="btn btn--md btn--round">Message</a>
                            </div> --}}

                        </div>
                    </div>

                    {{-- <div class="sidebar-card freelance-status">
                        <div class="custom-radio">
                            <input type="radio" id="opt1" class="" name="filter_opt" checked="">
                            <label for="opt1">
                                <span class="circle"></span>Available for Freelance work</label>
                        </div>
                    </div> --}}
                    <!-- end /.author-card -->

                    <div class="sidebar-card message-card">
                        <div class="card-title">
                            <h5>@lang('app.contact_with_product_owner')</h5>
                        </div>

                        <div class="message-form">
                            <form action="#">
                                <div class="form-group">
                                    <input  type="text" name="name" class="text_field" id="author-message" placeholder="@lang('app.contact_name')" required>
                                </div>

                                <div class="form-group">
                                    <input type="email" name="email" class="text_field" id="author-message" placeholder="@lang('app.email')" required>
                                </div>

                                <div class="form-group">
                                    <textarea name="message" class="text_field" id="author-message" placeholder="@lang('app.contact_message')"></textarea>
                                </div>

                                <div class="msg_submit">
                                    <button type="submit" class="btn btn--md btn--round">@lang('app.contact_send')</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </aside>
            </div>

            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="author_module about_author">
                            <h2>About
                                <span>AazzTech</span>
                            </h2>
                            <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattisleo
                                quam aliquet congue. Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo
                                ut scelerisque the mattisleo quam aliquet congue. Nunc placerat mi id nisi interdum mollis.
                                Prae sent pharetra, justo ut scelerisque the mattisleo quam aliquet congue.</p>
                            <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattisleo
                                quam aliquet congue. Nunc placerat mi id nisi interdum mollis. Praesent pharetra.</p>
                        </div>
                    </div>
                </div>
                <!-- end /.row -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="product-title-area">
                            <div class="product__title">
                                <h2>@lang('app.newest_products')</h2>
                            </div>

                            <a href="{{LaravelLocalization::localizeURL('/products')}}" class="btn btn--sm">@lang('app.show_all')</a>
                        </div>
                    </div>
                    @foreach($products as $product)
                    <div class="col-lg-6 col-md-6">
                        <div class="product product--card">
    
                            <div class="product__thumbnail">
                                <img src="{{asset('img/'.$product->image)}}" alt="Product Image">
                                <div class="prod_btn">
                                    <a href="{{route("product_detail" , $product->id)}}" class="transparent btn--sm btn--round">@lang('app.more_info')</a>
                                    {{-- <a href="single-product.html" class="transparent btn--sm btn--round">Live Demo</a> --}}
                                </div>
                            </div>
    
                            <div class="product-desc">
                                <a href="{{route("product_detail" , $product->id)}}" class="product_title">
                                    <h4>{{$product->name}}</h4>
                                </a>
                                <ul class="titlebtm">
                                    <li>
                                        <p>
                                        {{-- <a href="#">{{$product->description}}</a> --}}
                                        {{-- <img class="auth-img" src="images/auth.jpg" alt="author image"> --}}
                                        <p>
                                            <a href="{{route("product_detail" , $product->id)}}">{{\Illuminate\Support\Str::limit($product->description, $limit = 200, $end = '...')}}</a>
                                        </p>
                                    </li>
                                    {{-- <li class="product_cat">
                                        <a href="#">
                                            {{-- <span class="lnr lnr-book"></span>Plugin</a> --}}
                                    {{-- </li> --}}
                                            {{-- <span class="lnr lnr-book"></span>Plugin</a> --}}
                                    </li>
    
                                </ul>
    
                                {{-- <p>{{$product->description}}</p> --}}
                            </div>
    
                            <div class="product-purchase">
                                <div class="price_love">
                                    <span>{{$product->price}}</span>
                                    <p>
                                        <span class="lnr lnr-heart"></span> 90</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
