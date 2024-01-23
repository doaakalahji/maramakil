@extends("master.app")

@section("content")

@section('css')
<<<<<<< HEAD
    <!-- css -->
    {{-- <link href="{{ asset('css/pagination_delete.css') }}" rel="stylesheet"> --}}
    <!-- jquery  -->
    {{-- <script src="{{ asset('js/deleteMessage.js') }}"></script> --}}
    {{-- <title>Admin</title> --}}
    {{-- <link href="{{asset('node_modules/sweetalert2/dist/sweetalert2.css')}}" rel="stylesheet">  --}}

 @endsection
=======

@endsection

>>>>>>> 18d10868c88c179542e5ad86765db813cbcdaa34
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
<<<<<<< HEAD
                    <div class="col-md-12">
                        <div class="statement_table table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Date</th>
                                        {{-- <th>Product ID</th> --}}
                                        <th>Product Name</th>
                                        <th>Detail</th>
                                        <th>Type</th>
                                        <th>Price</th>

                                        {{-- <th>Earning</th> --}}
                                        <th>Action</th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($products as $product)
                                    <tr>
                                        <td>
                                            @if (File::exists(public_path("img/".$product->image)))
                                              <img  width="250px" height="100px"
                                              src="{{asset("img/".$product->image)}}" alt="{{asset("img/".$product->image)}}"
                                              />
                                            @else
                                            {{-- {{dd("this")}} --}}
                                              <img  width="250px" height="100px"
                                              src="{{asset("img/product_default.jpg")}}" alt="{{asset("img/product_default.jpg")}}" />
                                            @endif
                                            {{-- <img src="{{asset("img/".$product->image)}} ?{{asset("img/".$product->image)}} :  {{asset("img/product_default.jpg")}}"> --}}
                                        </td>
                                        <td>{{date('Y-m-d',strtotime($product->created_at))}}</td>
                                        {{-- <td>MP810094</td> --}}
                                        <td class="author">{{$product->name}}</td>
                                        <td class="detail">
                                            <a href="single-product.html">
                                                {{-- {!! nl2br($product->description) !!} --}}
                                              {{\Illuminate\Support\Str::limit($product->description, $limit = 150, $end = '...')}}
                                            </a>
                                        </td>
                                        <td class="type">
                                            <span class="sale">marble</span>
                                        </td>
                                        <td>{{$product->price}}$</td>
                                        {{-- <td class="earning">$24.50</td> --}}
                                        <td class="action">
                                           <a href="{{route('product.edit' , $product->id)}}" style="padding: 0 10px ; color : green ; background-color : white"> <span class="lnr lnr-pencil"></span></a>

                                           <form action="" method="POST">
                                            @csrf
                                            @method('delete')
                                             <a style="color : red ; background-color : white">
                                                <i class="lnr lnr-trash deletes del_id" data-id="{{$product->id}}"></i>
                                             </a>
                                          </form>

                                           {{-- <a href="#" style="padding: 0 10px ; color : red ; background-color : white"
                                           data-target="#myModal2" data-toggle="modal">  <span class="lnr lnr-trash"></span></a> --}}
                                            {{-- <a href="invoice.html">view</a> --}}
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>

                            </table>




=======
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
>>>>>>> 18d10868c88c179542e5ad86765db813cbcdaa34
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
<<<<<<< HEAD

            <!-- end /.container -->
=======
>>>>>>> 18d10868c88c179542e5ad86765db813cbcdaa34
        </div>
    </section>

@endsection

@section('script')

<<<<<<< HEAD
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
{{-- <script src="{{asset('node_modules/sweetalert2/dist/sweetalert2.min.js')}}"></script> --}}
<script>
// import swal from 'sweetalert2';

// window.swal = swal;
    // const swal = window.swal = require('sweetalert2');
    $(".del_id").on('click', function (e) {
            var dataId = $(this).attr('data-id');
            console.log('dataId' ,dataId);
            e.preventDefault();
            // console.log($('meta[name="csrf-token"]').attr('content'));
            swal.fire({
            title: "Are you sure from delete?",
            icon: 'warning',
            text: "You won't be able to revert this!",
            type: "warning",
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!',
            closeOnConfirm: true,
            showCancelButton: true,
            cancelButtonColor: '#d33',
            cancelButtonText: 'cancel',

            }).then((result) => {
                if(result.value){
                    $.ajax({
                    type: "DELETE",
                    url: "/product/"+dataId,
                    // contentType: "application/json; charset=utf-8",
                    dataType: "json",
                    data: {
                      _token: "{{csrf_token()}}",
                    //   id : dataId
                    },
                 success: function (results) {

                } //success
                });
                 location.reload();
                }
                else{
                    location.reload();
                }
        });
    });

  </script>
=======
>>>>>>> 18d10868c88c179542e5ad86765db813cbcdaa34
@endsection
