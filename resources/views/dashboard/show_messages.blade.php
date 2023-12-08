@extends("master.app")

@section("content")

<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb">
                    <ul>
                        <li>
                            <a href="{{LaravelLocalization::localizeURL('/')}}">@lang('app.home')</a>
                        </li>
                        <li>
                            <a href="{{route("dashboard")}}">@lang('app.dashboard')</a>
                        </li>
                        <li class="active">
                            <a href="{{route('product.create')}}">@lang('app.all_messages')</a>
                        </li>
                        </ul>
                    </ul>
                </div>
                <h1 class="page-title">@lang('app.all_messages')</h1>
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
                        <li class="active">
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
            </div>
        </div>
    </div>

    <div class="dashboard_contents">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="filter-bar dashboard_title_area clearfix filter-bar2">
                        <div class="dashboard__title dashboard__title pull-left">
                            <h3>@lang('app.all_messages')</h3>
                        </div>

                        <div class="pull-right">
                            <div class="filter__option filter--text">
                                <p>
                                    <span>{{ $countMessages }}</span> @lang('app.message')</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="dashboard_module recent_message">
                        <div class="dashboard__title">
                            <h4>@lang('app.all_messages')</h4>
                        </div>

                        <div class="dashboard__content">
                            @foreach ($messages as $message)
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

            <div class="row">
                <div class="col-md-12">
                    <div class="pagination-area">
                        {!! $messages->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section("script")
<script>

</script>
@endsection

