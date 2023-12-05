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
                            <a href="{{route('product.create')}}">@lang('app.show_comments')</a>
                        </li>
                        </ul>
                    </ul>
                </div>
                <h1 class="page-title">@lang('app.show_comments')</h1>
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
                        <li>
                            <a href="{{route('dashboard')}}">
                                <span class="lnr lnr-home"></span>@lang('app.dashboard')</a>
                        </li>
                        <li  class="active">
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

    <div class="dashboard_contents">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="author-info author-info--dashboard mcolorbg4">
                        <p>Total Items</p>
                        <h3>4,369</h3>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="author-info author-info--dashboard mcolorbg2">
                        <p>Monthly Sales</p>
                        <h3>$273.00</h3>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="author-info author-info--dashboard mcolorbg3">
                        <p>Yearly Sales</p>
                        <h3>$2,249.00</h3>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="dashboard_module recent_comment">
                        <div class="dashboard__title">
                            <h4>Recent Comments</h4>
                        </div>

                        <div class="dashboard__content">
                            <div class="thread">
                                <ul class="media-list thread-list">
                                    <li class="single-thread">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="images/m1.png" alt="Commentator Avatar">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div>
                                                    <div class="media-heading">
                                                        <a href="author.html">
                                                            <h4>Themexylum</h4>
                                                        </a>
                                                        <span>9 Hours Ago</span>
                                                    </div>
                                                    <span class="comment-tag buyer">Purchased</span>
                                                    <a href="#" class="reply-link">Reply</a>
                                                </div>
                                                <p>Nunc placerat mi id nisi interdum mollis. Praesent there pharetra, justo
                                                    ut sceleris que the mattis.</p>
                                            </div>
                                        </div>

                                        <!-- comment reply -->
                                        <div class="media depth-2 reply-comment" style="display: none;">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="images/m2.png" alt="Commentator Avatar">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <form action="#" class="comment-reply-form">
                                                    <textarea class="bla" name="reply-comment" placeholder="Write your comment..."></textarea>
                                                    <button class="btn btn--md btn--round">Post Comment</button>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- comment reply -->
                                    </li>
                                    <!-- end single comment thread /.comment-->

                                    <li class="single-thread">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="images/m3.png" alt="Commentator Avatar">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div>
                                                    <div class="media-heading">
                                                        <a href="author.html">
                                                            <h4>Fierce Coder</h4>
                                                        </a>
                                                        <span>9 Hours Ago</span>
                                                    </div>
                                                    <a href="#" class="reply-link">Reply</a>
                                                </div>
                                                <p>Nunc placerat mi id nisi interdum mollis. Praesent phare tra, justo ut
                                                    sceleris que the mattis, leo quam.</p>
                                            </div>
                                        </div>

                                        <!-- comment reply -->
                                        <div class="media depth-2 reply-comment" style="display: none;">
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
                                    </li>
                                </ul>
                            </div>
                        </div>
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

