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
                                     @foreach($comments as $comment)
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
                                                            <h4>{{$comment->name}}</h4>
                                                        </a>
                                                        <span>{{$comment->created_at}}</span>
                                                    </div>
                                                  
                                                     <a  style="margin-left: 70%;" href="#" data-toggle="modal" data-target="#deleteComment" class="delete" onclick="loadDeleteModal({{ $comment->id }})">
                                             
                                                        <span class="lnr lnr-trash"></span>@lang('app.delete')</a>
                                                    {{-- <span class="comment-tag buyer">Purchased</span> --}}
                                                    {{-- <a href="" class="reply-link">delete</a> --}}
                                                </div>
                                                <p>{{$comment->comment}}</p>
                                            </div>
                                        </div>

                                        <!-- comment reply -->
                                        {{-- <div class="media depth-2 reply-comment" style="display: none;">
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
                                        </div> --}}
                                        <!-- comment reply -->
                                    </li>
                                     @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Modal 2 -->
<div class="modal fade rating_modal item_remove_modal" id="deleteComment" tabindex="-1" role="dialog" aria-labelledby="deleteComment">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">@lang('app.delete_modal_title')  <span id="modal-comment"></span> ? </h3>
                <input type="hidden" id="comment" name="id">
                {{-- <p>You will not be able to recover this file!</p> --}}
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <button  type="button"  class="btn btn--round btn-danger btn--default" id="modal-confirm_delete">@lang('app.delete')</button>
                <button class="btn btn--round modal_close" data-dismiss="modal">@lang('app.cancel')</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    <script>
        function loadDeleteModal(id) {
            $('#modal-confirm_delete').attr('onclick', `confirmDelete(${id})`);
            $('#deleteComment').modal('show');
        }

        function confirmDelete(id) {
            $.ajax({
                    type: "DELETE",
                    url: "/comment/"+id,
                    // contentType: "application/json; charset=utf-8",
                    dataType: "json",
                    data: {
                      _token: "{{csrf_token()}}",
                    },
                 success: function (results) {
                                  } //success
                });
                $('#deleteComment').modal('hide');
                location.reload();

        }
    </script>
@endsection

