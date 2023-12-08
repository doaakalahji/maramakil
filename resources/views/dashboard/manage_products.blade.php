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
                            <a href="{{route('manage_products')}}">@lang('app.manage_products')</a>
                        </li>
                        </ul>
                    </ul>
                </div>
                <h1 class="page-title">@lang('app.manage_products')</h1>
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
                        <li>
                            <a href="{{route('product.create')}}">
                                <span class="lnr lnr-upload"></span>@lang('app.add_products')</a>
                        </li>
                        <li  class="active">
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
                <div class="col-md-12">
                    <div class="filter-bar dashboard_title_area clearfix filter-bar2">
                        <div class="dashboard__title dashboard__title pull-left">
                            <h3>@lang('app.manage_products')</h3>
                        </div>

                        <div class="pull-right">
                            <div class="filter__option filter--text">
                                <p>
                                    <span>{{ $countProducts }}</span> @lang('app.product')</p>
                            </div>

                            {{-- <div class="filter__option filter--select">
                                <div class="select-wrap">
                                    <select name="price">
                                        <option value="low">Price : Low to High</option>
                                        <option value="high">Price : High to low</option>
                                    </select>
                                    <span class="lnr lnr-chevron-down"></span>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach ($products as $product)
                <div class="col-lg-4 col-md-6">
                    <div class="product product--card">

                        <div class="product__thumbnail1">
                            <img src="{{asset('img/'.$product->image)}}" alt="Product Image">

                            <div class="prod_option">
                                <a href="#" id="drop2" class="dropdown-trigger" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="lnr lnr-cog setting-icon"></span>
                                </a>

                                <div class="options dropdown-menu" aria-labelledby="drop2" x-placement="top-start" style="position: absolute; transform: translate3d(0px, -91px, 0px); top: 0px; left: 0px; will-change: transform;">
                                    <ul>
                                        <li>
                                            <a href="{{route('product.edit',$product->id)}}">
                                                <span class="lnr lnr-pencil"></span>@lang('app.edit')</a>
                                        </li>
                                        <li>
<<<<<<< HEAD
                                            <a href="{{route('show_comments' , $product->id)}}">
=======
                                            <a href="">
>>>>>>> 18d10868c88c179542e5ad86765db813cbcdaa34
                                                <span class="lnr lnr-eye"></span>@lang('app.show_comments')</a>
                                        </li>
                                        <li>
                                            <a href="#" data-toggle="modal" data-target="#deleteProduct" class="delete" onclick="loadDeleteModal({{ $product->id }}, `{{ $product->name }}`)">
                                                <span class="lnr lnr-trash"></span>@lang('app.delete')</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- end /.product__thumbnail -->

                        <div class="product-desc">
                            <a href="{{route("product_detail" , $product->id)}}" class="product_title">
                                <h4>{{$product->name}}</h4>
                            </a>
                            {{-- <ul class="titlebtm">
                                <li>
                                    <img class="auth-img" src="images/auth.jpg" alt="author image">
                                    <p>
                                        <a href="#">AazzTech</a>
                                    </p>
                                </li>
                                <li class="product_cat">
                                    <a href="#">
                                        <span class="lnr lnr-book"></span>Plugin</a>
                                </li>
                            </ul> --}}

                            <p>{{\Illuminate\Support\Str::limit($product->description, $limit = 200, $end = '...')}}</p>
                        </div>

                        <div class="product-purchase">
                            <div class="price_love">
                                <span>{{$product->price}}</span>
                                <p>
                                    <span class="lnr lnr-heart"></span> 90</p>
                                <p>
                                    <span class="lnr lnr-bubble"></span> 90</p>
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
    </div>
</section>

<!-- Modal 2 -->
<div class="modal fade rating_modal item_remove_modal" id="deleteProduct" tabindex="-1" role="dialog" aria-labelledby="deleteProduct">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">@lang('app.delete_modal_title')  <span id="modal-product_name"></span> ? </h3>
                <input type="hidden" id="product" name="product_id">
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
        function loadDeleteModal(id, name) {
            $('#modal-product_name').html(name);
            $('#modal-confirm_delete').attr('onclick', `confirmDelete(${id})`);
            $('#deleteProduct').modal('show');
        }

        function confirmDelete(id) {
            $.ajax({
                    type: "DELETE",
                    url: "/product/"+id,
                    // contentType: "application/json; charset=utf-8",
                    dataType: "json",
                    data: {
                      _token: "{{csrf_token()}}",
                    },
                 success: function (results) {
                                  } //success
                });
                $('#deleteProduct').modal('hide');
                location.reload();

        }
    </script>
@endsection
