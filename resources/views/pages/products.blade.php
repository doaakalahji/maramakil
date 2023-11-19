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
                                        <a href="#">@lang('app.home')</a>
                                    </li>
                                    <li class="active">
                                        <a href="#">@lang('app.all_products')</a>
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

<!--================================
        START FILTER AREA
    =================================-->
    {{-- <div class="filter-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="filter-bar">
                        <div class="filter__option filter--dropdown">
                            <a href="#" id="drop1" class="dropdown-trigger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories
                                <span class="lnr lnr-chevron-down"></span>
                            </a>
                            <ul class="custom_dropdown custom_drop2 dropdown-menu" aria-labelledby="drop1">
                                <li>
                                    <a href="#">Wordpress
                                        <span>35</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Landing Page
                                        <span>45</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Psd Template
                                        <span>13</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Plugins
                                        <span>08</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">HTML Template
                                        <span>34</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Components
                                        <span>78</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- end /.filter__option -->

                        <div class="filter__option filter--dropdown">
                            <a href="#" id="drop2" class="dropdown-trigger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filter By
                                <span class="lnr lnr-chevron-down"></span>
                            </a>
                            <ul class="custom_dropdown dropdown-menu" aria-labelledby="drop2">
                                <li>
                                    <a href="#">Trending items</a>
                                </li>
                                <li>
                                    <a href="#">Popular items</a>
                                </li>
                                <li>
                                    <a href="#">New items </a>
                                </li>
                                <li>
                                    <a href="#">Best seller </a>
                                </li>
                                <li>
                                    <a href="#">Best rating </a>
                                </li>
                            </ul>
                        </div>
                        <!-- end /.filter__option -->

                        <div class="filter__option filter--dropdown filter--range">
                            <a href="#" id="drop3" class="dropdown-trigger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Price Range
                                <span class="lnr lnr-chevron-down"></span>
                            </a>
                            <div class="custom_dropdown dropdown-menu" aria-labelledby="drop3">
                                <div class="range-slider price-range"></div>

                                <div class="price-ranges">
                                    <span class="from rounded">$30</span>
                                    <span class="to rounded">$300</span>
                                </div>
                            </div>
                        </div>
                        <!-- end /.filter__option -->

                        <div class="filter__option filter--select">
                            <div class="select-wrap">
                                <select name="price">
                                    <option value="low">Price : Low to High</option>
                                    <option value="high">Price : High to low</option>
                                </select>
                                <span class="lnr lnr-chevron-down"></span>
                            </div>
                        </div>
                        <!-- end /.filter__option -->

                        <div class="filter__option filter--select">
                            <div class="select-wrap">
                                <select name="price">
                                    <option value="12">12 Items per page</option>
                                    <option value="15">15 Items per page</option>
                                    <option value="25">25 Items per page</option>
                                </select>
                                <span class="lnr lnr-chevron-down"></span>
                            </div>
                        </div>
                        <!-- end /.filter__option -->

                        {{-- <div class="filter__option filter--layout">
                            <a href="all-products.html">
                                <div class="svg-icon">
                                    <img class="svg" src="images/svg/grid.svg" alt="it's just a layout control folks!">
                                </div>
                            </a>
                            <a href="all-products-list.html">
                                <div class="svg-icon">
                                    <img class="svg" src="images/svg/list.svg" alt="it's just a layout control folks!">
                                </div>
                            </a>
                        </div> --}}
                        <!-- end /.filter__option -->
                    </div>
                    <!-- end /.filter-bar -->
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end filter-bar -->
        </div>
    </div> --}}
    <!-- end /.filter-area -->
    <!--================================
        END FILTER AREA
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

                                <a href="single-product.html" class="transparent btn--sm btn--round">@lang('app.more_info')</a>

                                <a href="{{route("product_detail" , $product->id)}}" class="transparent btn--sm btn--round">More Info</a>
                                <a href="single-product.html" class="transparent btn--sm btn--round">Live Demo</a>

                            </div>
                        </div>

                        <div class="product-desc">
                            <a href="#" class="product_title">
                                <h4>{{$product->name}}</h4>
                            </a>
                            <ul class="titlebtm">
                                <li>

                                    <p>
                                        {{-- <a href="#">{{$product->description}}</a> --}}

                                    {{-- <img class="auth-img" src="images/auth.jpg" alt="author image"> --}}
                                    <p>
                                        <a href="#">{{\Illuminate\Support\Str::limit($product->description, $limit = 50, $end = '...')}}</a>

                                    </p>
                                </li>
                                {{-- <li class="product_cat">
                                    <a href="#">

                                        {{-- <span class="lnr lnr-book"></span>Plugin</a> --}}
                                </li>

                                        <span class="lnr lnr-book"></span>Plugin</a>
                                </li> --}}

                            </ul>

                            <p>{{$product->description}}</p>
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
                    <div style="margin-left: 50%">
                        {!! $products->links() !!}
                        {{-- <nav class="navigation pagination" role="navigation">
                            <div class="nav-links">
                                <a class="prev page-numbers" href="#">
                                    <span class="lnr lnr-arrow-left"></span>
                                </a>
                                <a class="page-numbers current" href="#">1</a>
                                <a class="page-numbers" href="#">2</a>
                                <a class="page-numbers" href="#">3</a>
                                <a class="next page-numbers" href="#">
                                    <span class="lnr lnr-arrow-right"></span>
                                </a>
                            </div>
                        </nav> --}}
                    </div>
                </div>
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
        END PRODUCTS AREA
    =================================-->
@endsection
