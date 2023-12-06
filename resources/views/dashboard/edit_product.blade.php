@extends("master.app")

@section("style")
 <style>
    .cv_upload .up_icon {
    float: right;
    font-size: 16px;
    color: #f1c33b;
}
 </style>
@endsection

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
                            <a href="{{route('product.edit',$product->id)}}">@lang('app.edit_products')</a>
                        </li>
                        </ul>
                    </ul>
                </div>
                <h1 class="page-title">@lang('app.edit_products')</h1>
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
                        <li   class="active">
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
</section>

<section class="section--padding2 bgcolor">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="shortcode_modules">
                    <div class="modules__title">
                        <h3>@lang('app.edit_products')</h3>
                    </div>
                    @if(session()->has('message'))
                        <div class="alert alert-success fade show">
                            {{ session()->get('message') }}
                        </div>
                    @endif

                    @if(session()->has('failed'))
                    <div class="alert alert-danger">
                        {{ session()->get('failed') }}
                    </div>
                    @endif
                    <div class="modules__content">
                        <form action="{{ isset($product) ? route('product.update',$product->id) : route('product.store') }}" method="POST"  id="form" enctype="multipart/form-data">
                           @csrf
                           @if(isset($product))
                             @method('PUT')
                           @endif
                            <div class="row">
                                <input type="hidden" name="_id" value="{{isset($product) ? $product->id : 0}}"/>

                                {{-- <div class="col-md-6 offset-md-1"> --}}

                            <div class="row col-md-12">
                                <div class="form-group col-md-6 col-lg-6 col-xs-6">
                                    <label for="f1">Product Name EN</label>
                                    <input type="text" id="f1" class="text_field"
                                    name="name_en" value="{{isset($product) ? $product->name_en :  ''}}"
                                    placeholder="Enter Product Name (EN)...">

                                    @error('name_en')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>


                                <div class="form-group ol-md-6 col-lg-6 col-xs-6">
                                    <label for="textarea1">Details EN</label>
                                    <textarea
                                    class="text_field" name="description_en" id="textarea1" placeholder="Your text here">
                                    {{isset($product) ? $product->description_en :  ''}}
                                </textarea>

                            </div>



                            <div class="row col-md-12">
                                <div class="form-group col-md-6 col-lg-6 col-xs-6">
                                    <label for="f1">Product Name AR</label>
                                    <input type="text" id="f1" class="text_field"
                                    name="name_ar" value="{{isset($product) ? $product->name_ar :  ''}}"
                                    placeholder="Enter Product Name (AR)...">

                                    @error('name_ar')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>


                                <div class="form-group ol-md-6 col-lg-6 col-xs-6">
                                    <label for="textarea1">Details AR</label>
                                    <textarea
                                    class="text_field" name="description_ar" id="textarea1" placeholder="Your text here">
                                    {{isset($product) ? $product->description_ar :  ''}}
                                </textarea>

                            </div>


                            <div class="row col-md-12">
                                <div class="form-group col-md-6 col-lg-6 col-xs-6">
                                    <label for="f1">Product Name TR</label>
                                    <input type="text" id="f1" class="text_field"
                                    name="name_tr" value="{{isset($product) ? $product->name_tr :  ''}}"
                                    placeholder="Enter Product Name (TR)...">

                                    @error('name_tr')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>


                                <div class="form-group ol-md-6 col-lg-6 col-xs-6">
                                    <label for="textarea1">Details TR</label>
                                    <textarea
                                    class="text_field" name="description_tr" id="textarea1" placeholder="Your text here">
                                    {{isset($product) ? $product->description_tr :  ''}}
                                </textarea>

                            </div>
                            <div class="row col-md-12">
                            <div class="form-group col-md-6 col-lg-6 col-xs-6">
                                <label for="rlicense">Price</label>
                                <div class="input-group with--addon">
                                    <span class="input-group-addon">$</span>
                                    <input type="number" id="rlicense" class="text_field"
                                    name="price" value="{{isset($product) ? $product->price :  ''}}"
                                    placeholder="00.00">

                                    @error('price')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group col-md-6 col-lg-6 col-xs-6">
                                <label for="cv_upload">Product Image</label>
                                <label for="cv_upload" class="cv_upload">
                                    <span class="text ">Upload Product Image</span>
                                    <span class="lnr lnr-upload up_icon">{{isset($product) ? $product->image :  ''}}</span>
                                    <input value="{{isset($product) ? $product->image :  ''}}"
                                    id="cv_upload"  style="display:none;" name="image" type="file">
                                </label>
                            </div>
                            </div>
                            </div>
                        </form>
                            {{-- </div> --}}

                            <div class="col-md-12">
                                <div class="dashboard_setting_btn">
                                    <button type="submit" class="btn btn--round btn--md">Save Change</button>
                                </div>
                            </div>

                        </div>
                    {{-- </form> --}}
                    </div>
                </div>
            </div>
            <!-- end .col-md-6 -->
        </div>
        <!-- end .row -->
    </div>
    <!-- end .container -->
</section>

@endsection

@section("script")
<script>
    console.log("test");
$('#cv_upload').change(function() {
  var i = $(this).prev('span').clone();
  console.log("test" , i);
  var file = $('#cv_upload')[0].files[0].name;
  $(this).prev('span').text(file);
});

</script>
@endsection

