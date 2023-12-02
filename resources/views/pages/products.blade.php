@extends('master.app')


@section('meta')
 <meta property="keywords" content="@lang('app.keyword_product')">
 <meta property="description" content="{!! strip_tags('test') !!}">

 <meta property="og:site_name" content="Orex.co">
 <meta property="og:url" content="{{ url()->current() }}">
 <meta property="og:image" itemprop="image" content="">
 <meta property="og:image:secure_url" itemprop="image" content="">
 <meta property="og:locale" content="en_US">
 <meta property="og:type" content="website">
 <meta property="og:title" content="@lang('meta_home.keyword_product_graph')">
 <meta property="og:description" content="{!! strip_tags("test") !!}">
 <meta property="fb:app_id" content="1359039120781731">


 <meta name="twitter:card" content="summary"/>
 <meta name="twitter:site" content="@solarorex" />
 <meta name="twitter:title" content="@lang('meta_home.keyword_product_twitter')"/>
 <meta name="twitter:description" content="{!! strip_tags("test") !!}"/>
 <meta name="twitter:image" content="@lang('meta_home.keyword')"/>


 @endsection

@section('content')

    <section class="search-wrapper">
        <div class="search-area2 bgimage">
            <div class="bg_image_holder">
                <img src="images/search.jpg" alt="">
            </div>
            <div class="container content_above">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="search">
                            <div class="search__field">
                                <form action="#">
                                    <div class="field-wrapper">
                                        <input class="relative-field rounded" type="text" placeholder="@lang('app.search_about_your_product')">
                                        <button class="btn btn--round" type="submit">@lang('app.search')</button>
                                    </div>
                                </form>
                            </div>
                            <div class="breadcrumb">
                                <ul>
                                    <li>
                                        <a href="{{LaravelLocalization::localizeURL('/')}}">@lang('app.home')</a>
                                    </li>
                                    <li class="active">
                                        <a href="{{LaravelLocalization::localizeURL('/products')}}">@lang('app.all_products')</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end /.search-area2 -->
    </section>
    <!--================================
        END SEARCH AREA
    =================================-->

    <section class="products">
        <div class="container">
            <div class="row">
                @foreach($products as $product)
                <div class="col-lg-4 col-md-6">
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

            <div class="row">
                <div class="col-md-12">
                    <div class="pagination-area">
                        {!! $products->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
