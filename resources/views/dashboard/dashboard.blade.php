@extends("master.app")

@section("content")

@section('css')

@endsection

    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb">
                        <ul>
                            <li>
                                <a href="{{LaravelLocalization::localizeURL('/')}}">@lang('app.home')</a>
                            </li>
                            <li class="active">
                                <a href="{{route("dashboard")}}">@lang('app.dashboard')</a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="page-title">@lang('app.dashboard')</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="dashboard-area">
        <div class="dashboard_menu_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="dashboard_menu">
                            <li  class="active">
                                <a href="{{route('dashboard')}}">
                                    <span class="lnr lnr-home"></span>@lang('app.dashboard')</a>
                            </li>
                            <li>
                                <a href="{{route('product.create')}}">
                                    <span class="lnr lnr-upload"></span>@lang('app.add_products')</a>
                            </li>
                            <li>
                                <a href="{{route('manage_products')}}">
                                    <span class="lnr lnr-briefcase"></span>@lang('app.manage_products')</a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="lnr lnr-briefcase"></span>@lang('app.manage_gallery')</a>
                            </li>
                            <li>
                                <a href="{{LaravelLocalization::localizeURL('/profile')}}">
                                    <span class="lnr lnr-cog"></span>@lang('app.settings')</a>
                            </li>
                        </ul>
                    </div>
                    <!-- end /.col-md-12 -->
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>

        <div class="dashboard_contents dashboard_statement_area">
            <div class="container">

                @if(session()->has('message'))
                <br/>
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
                @endif
                

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="author-info author-info--dashboard mcolorbg4">
                            <p>@lang('app.total_products')</p>
                            <h3>{{ count($products) }}</h3>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="author-info author-info--dashboard mcolorbg2">
                            <p>@lang('app.total_comments')</p>
                            <h3>{{ count($comments) }}</h3>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="author-info author-info--dashboard mcolorbg3">
                            <p>@lang('app.total_messages')</p>
                            <h3>{{ count($messages) }}</h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="dashboard_module recent_comment">
                            <div class="dashboard__title">
                                <h4>@lang('app.recent_comments')</h4>
                            </div>

                            <div class="dashboard__content">
                                <div class="thread">
                                    <ul class="media-list thread-list">
                                        @foreach ($recentComments as $comment)
                                        <li class="single-thread">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="">
                                                        <img class="media-object" src="{{ asset('images/avatar_person.png') }}" alt="Commentator Avatar">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <div>
                                                        <div class="media-heading">
                                                            <a href="{{route("product_detail" , $comment->product_id)}}">
                                                                <h4>{{ $comment->name }} - {{ $comment->product->getNameAttribute($comment) }}</h4> 
                                                            </a>
                                                            <span>{{ $comment->created_at }}</span>
                                                        </div>
                                                        {{-- <span class="comment-tag buyer">Purchased</span> --}}
                                                        {{-- <a href="#" class="reply-link">Reply</a> --}}
                                                    </div>
                                                    <p>{{ $comment->comment }}</p>
                                                </div>
                                            </div>
                                        </li> 
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="dashboard_module recent_message">
                            <div class="dashboard__title">
                                <h4>@lang('app.recent_messages')</h4>
                                <div class="loading">
                                    <a href="{{ route('show_messages') }}">@lang('app.show_all')</a>
                                </div>
                            </div>

                            <div class="dashboard__content">
                                @foreach ($recentMessages as $message)
                                    <div class="messages">
                                        <div class="message">
                                            <div class="message__actions_avatar">
                                                <div class="avatar">
                                                    <img src="{{ asset('images/avatar_person.png') }}" alt="">
                                                </div>
                                            </div>

                                            <div class="message_data">
                                                <div class="name_time">
                                                    <div class="name">
                                                        <a href="mailto:{{ $message->email }}">
                                                            <p>{{ $message->name }}</p>
                                                            <span class="lnr lnr-envelope"></span>
                                                        </a>
                                                        
                                                    </div>

                                                    <span class="time">{{ $message->created_at }}</span>
                                                    <p>{{ $message->message }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>    
                                @endforeach

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection

@section('script')

@endsection
