{{-- <x-app-layout> --}}
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> --}}

{{-- </x-app-layout> --}}

@extends("master.app")

@section("content")


    <!--================================
        START BREADCRUMB AREA
    =================================-->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb">
                        <ul>
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li class="active">
                                <a href="{{route("dashboard")}}">Dashboard</a>
                            </li>
                            {{-- <li class="active">
                                <a href="#">Statement</a>
                            </li> --}}
                        </ul>
                    </div>
                    <h1 class="page-title">All Marble</h1>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>

        <!-- Modal 2 -->
        <div class="modal fade rating_modal item_remove_modal" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModal2">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title">Are you sure to delete this item?</h3>
                        <p>You will not be able to recover this file!</p>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <!-- end /.modal-header -->
    
                    <div class="modal-body">
                        <button type="submit" class="btn btn--round btn-danger btn--default">Delete</button>
                        <button class="btn btn--round modal_close" data-dismiss="modal">Cancel</button>
                    </div>
                    <!-- end /.modal-body -->
                </div>
            </div>
        </div>
    
    
    <!--================================
        END BREADCRUMB AREA
    =================================-->

    <!--================================
            START DASHBOARD AREA
    =================================-->
    <section class="dashboard-area">
        <div class="dashboard_menu_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="dashboard_menu">
                            <li  class="active">
                                <a href="dashboard.html">
                                    <span class="lnr lnr-home"></span>Dashboard</a>
                            </li>
                            <li>
                                <a href="dashboard-setting.html">
                                    <span class="lnr lnr-cog"></span>Setting</a>
                            </li>
                            {{-- <li>
                                <a href="dashboard-purchase.html">
                                    <span class="lnr lnr-cart"></span>Purchase</a>
                            </li> --}}
                            {{-- <li>
                                <a href="dashboard-add-credit.html">
                                    <span class="lnr lnr-dice"></span>Add Credits</a>
                            </li>
                            <li>
                                <a href="dashboard-statement.html">
                                    <span class="lnr lnr-chart-bars"></span>Statements</a>
                            </li> --}}
                            {{-- <li>
                                <a href="dashboard-upload.html">
                                    <span class="lnr lnr-upload"></span>Upload Items</a>
                            </li> --}}
                            {{-- <li>
                                <a href="dashboard-manage-item.html">
                                    <span class="lnr lnr-briefcase"></span>Manage Items</a>
                            </li> --}}
                            {{-- <li>
                                <a href="dashboard-withdrawal.html">
                                    <span class="lnr lnr-briefcase"></span>Withdrawals</a>
                            </li> --}}
                        </ul>
                        <!-- end /.dashboard_menu -->
                    </div>
                    <!-- end /.col-md-12 -->
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end /.dashboard_menu_area :) -->

        <div class="dashboard_contents dashboard_statement_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="dashboard_title_area">
                            <div class="dashboard__title">
                                <h3>Products</h3>
                                {{-- <div class="date_area">
                                    <form action="#">
                                        <div class="input_with_icon">
                                            <input type="text" class="dattaPikkara" placeholder="From">
                                            <span class="lnr lnr-calendar-full"></span>
                                        </div>

                                        <div class="input_with_icon">
                                            <input type="text" class="dattaPikkara" placeholder="To">
                                            <span class="lnr lnr-calendar-full"></span>
                                        </div>
                                        <div class="select-wrap">
                                            <select name="transaction_type" id="#">
                                                <option value="all">All Transaction</option>
                                                <option value="sale">Sale</option>
                                                <option value="sale">Purchase</option>
                                                <option value="credited">Withdraw</option>
                                            </select>
                                            <span class="lnr lnr-chevron-down"></span>
                                        </div>

                                        <button type="submit" class="btn btn--sm btn--round btn--color1">Search</button>
                                    </form>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <!-- end /.col-md-12 -->
                </div>
                <!-- end /.row -->

                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="statement_info_card">
                            <div class="info_wrap">
                                <span class="lnr lnr-tag icon mcolorbg1"></span>
                                <div class="info">
                                    <p>50</p>
                                    <span>Total Products</span>
                                </div>
                            </div>
                            <!-- end /.info_wrap -->
                        </div>
                        <!-- end /.statement_info_card -->
                    </div>
                    <!-- end /.col-md-3 -->

                    <div class="col-lg-4 col-md-4">
                        <div class="statement_info_card">
                            <div class="info_wrap">
                                <span class="lnr lnr-cart icon mcolorbg2"></span>
                                <div class="info">
                                    <p>100</p>
                                    <span>Total Customers</span>
                                </div>
                            </div>
                            <!-- end /.info_wrap -->
                        </div>
                        <!-- end /.statement_info_card -->
                    </div>
                    <!-- end /.col-md-3 -->

                    <div class="col-lg-4 col-md-4">
                        <div class="statement_info_card">
                            <div class="info_wrap">
                                <span class="lnr lnr-dice icon mcolorbg3"></span>
                                <div class="info">
                                    <p>200</p>
                                    <span>Total visitors</span>
                                </div>
                            </div>
                            <!-- end /.info_wrap -->
                        </div>
                        <!-- end /.statement_info_card -->
                    </div>
                    <!-- end /.col-md-3 -->
{{-- 
                    <div class="col-lg-3 col-md-3">
                        <div class="statement_info_card">
                            <div class="info_wrap">
                                <span class="lnr lnr-briefcase icon mcolorbg4"></span>
                                <div class="info">
                                    <p>$3,690</p>
                                    <span>Total Withdraw</span>
                                </div>
                            </div>
                            <!-- end /.info_wrap -->
                        </div>
                        <!-- end /.statement_info_card -->
                    </div> --}}
                    <!-- end /.col-md-3 -->
                </div>
                <!-- end /.row -->

                <br/>
                <div class="row">
                    <div class="col-md-12">
                         <a style="margin-left: 82%" class="btn btn--icon btn-md btn--round btn-info" href="{{route('product.create')}}">Add Product</a>
                    </div>
                </div>

                <div class="row">
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
                                           <a href="#" style="padding: 0 10px ; color : red ; background-color : white"
                                           data-target="#myModal2" data-toggle="modal">  <span class="lnr lnr-trash"></span></a>
                                            {{-- <a href="invoice.html">view</a> --}}
                                        </td>
                                    </tr>
                                    @endforeach
                 
                                </tbody>
                               
                            </table>


            
             
                        </div>
                    </div>
                </div>
                <!-- end /.row -->
                <br/>
                <div class="row">
                    <div class="col-md-12">
                         <div style="margin-left: 50%"> {!!  $products->links() !!}</div>
                    </div>
                </div>
            </div>
         
            <!-- end /.container -->
        </div>
        
        <!-- end /.dashboard_menu_area -->
    </section>
    <!--================================
            END DASHBOARD AREA
    =================================-->

@endsection
