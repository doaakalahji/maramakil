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
                                <a href="{{LaravelLocalization::localizeURL('/')}}">
                                   @lang('app.home')
                                </a>
                            </li>
                            <li>
                                <a href="#">@lang('app.product_details')</a>
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
                        <div class="card_style1">
                            <figure class="card_style1__info">
                                <img src="{{asset('img/'.$product->image)}}" alt="Product Picture">

                                <figcaption>
                                    <a href="event-detail.html">
                                        <h3>{{ $product->name }}</h3>
                                    </a>
                                    <p>{{  $product->description }}</p>
                                </figcaption>
                            </figure>
                        </div>

                        <div class="dashboard_module recent_message">
                            <div class="dashboard__title">
                                <h4>@lang('app.comments')</h4>
                                <div class="loading">
                                    <button id="add_comment" class="btn btn--round btn--sm">@lang('app.add_comment')</button>   
                                </div>
                            </div>

                            <div class="dashboard__content">
                                <div class="thread">
                                    <ul class="media-list thread-list">
                                        @foreach($comments as $comment)
                                            <li class="single-thread">
                                            <div class="media">
                                                <div class="media-left">
                                                    <img class="media-object" src="{{ asset('images/avtar-small.png') }}" alt="Commentator Avatar" style="width: 70px;">
                                                </div>
                                                <div class="media-body">
                                                    <div>
                                                        <div class="media-heading">
                                                                <h4>{{$comment->name}}</h4>
                                                            <span>{{$comment->created_at}}</span>
                                                        </div>
                                                        @if (Auth::check() && Auth::user()->is_admin == 1 && $comment->reply == null)
                                                        <a href="#" class="reply-link">@lang('app.reply')</a>
                                                        @elseif (Auth::check() && Auth::user()->is_admin == 1 && $comment->reply)
                                                        <a href="#" class="reply-link">@lang('app.update')</a>
                                                        @endif
                                                    </div>
                                                    <p>{{$comment->comment}}</p>
                                                </div>
                                                </div>
    
                                            <!-- comment reply -->
    
                                            
                                            <ul class="children">
                                                @if($comment->reply)
                                                <li class="single-thread depth-2">
                                                    <div class="media">
                                                        <div class="media-left">
                                                            <a href="#">
                                                                <img class="media-object" src="{{asset('images/avtar-small.png')}}" alt="Commentator Avatar">
                                                            </a>
                                                        </div>
                                                
                                                        <div class="media-body">
                                                            <div class="media-heading">
                                                            @if(Auth::check())
                                                            <h4>{{Auth::user()->name}}</h4>
                                                            @endif
                                                                {{-- <span>6 Hours Ago</span> --}}
                                                            </div>
                                                            <span class="comment-tag author">@lang('app.product_owner')</span>
                                                            <p> {{$comment->reply}}</p>
                                                        </div>
                                            
                                                    </div>
                                                    @endif
                                                </li>
                                            </ul>
                                            
                                            <div class="media depth-2 reply-comment">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="{{asset('images/avtar-small.png')}}" alt="Commentator Avatar">
                                                    </a>
                                                </div>
    
    
    
                                                <div class="media-body">
                                                    <form method="POST" action="{{route('reply' , ['product_id'=> $comment->product_id ,'comment_id'=> $comment->id])}}" class="comment-reply-form">
                                                        @csrf
                                                        @method('PUT')
                                                        <textarea name="reply" placeholder="Write your reply...">
                                                            {{$comment->reply}}
                                                        </textarea>
                                                        <button type="submit" class="btn btn--sm btn--round">@lang('app.contact_send')</button>
                                                    </form>
                                                </div>
    
                                            </div>
                                            <!-- comment reply -->
                                            </li>
                                        @endforeach
                                    </ul>
                                </div> 
                                
                                <div class="message-form" id="form_comment" style="display: none">
                                    <form action="{{route('comments')}}" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{$product->id}}"/>
                                        <div class="form-group">
                                            <input type="text" name="name" class="text_field" id="author-message" placeholder="@lang('app.contact_name')">
                                            
                                            @error('name')
                                                <div style="color: red">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <input type="email" name="email" class="text_field" id="author-message" placeholder="@lang('app.email')">
                                            @error('email')
                                            <div style="color: red">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <textarea name="comment" class="text_field" id="author-message" placeholder="@lang('app.add_comment')"></textarea>
                                            @error('comment')
                                            <div style="color: red">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="msg_submit">
                                            <button type="submit" class="btn btn--md btn--round">@lang('app.contact_send')</button>
                                        </div>

                                        @if(session()->has('message'))
                                        <br/>
                                        <div class="alert alert-success fade-message">
                                            {{ session()->get('message') }}
                                        </div>
                                        @endif
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="pagination-area pagination-area2">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="pagination-area">
                                        {!! $comments->links() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>

                <div class="col-lg-4">
                    <aside class="sidebar sidebar--single-product">
                        <div class="sidebar-card card--metadata">
                            <ul class="data">
                                <li>
                                    <p>
                                        <span class="lnr lnr-bubble mcolor3"></span>@lang('app.comments')</p>
                                    <span>{{$comments_count}}</span>
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
                                    <h4>{{$profile->username}}</h4>
                                    <p>ElMass Marmar Owner</p>
                                </div>

                                <div class="social social--color--filled">
                                    <ul>
                                        <li>
                                            <a href="{{$profile->facebook}}">
                                                <span class="fa fa-facebook"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{$profile->whatsup}}">
                                                <span class="fa fa-whatsapp"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{$profile->instagram}}">
                                                <span class="fa fa-instagram"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div>
                                    <a href="{{LaravelLocalization::localizeURL('/product-owner-profile')}}" class="btn btn--sm btn--round">@lang('app.view_profile')</a>
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
    });

     // message 
     $(function(){
        setTimeout(function() {
            $('.fade-message').slideUp();
        }, 5000);
    });

</script>


@endsection
