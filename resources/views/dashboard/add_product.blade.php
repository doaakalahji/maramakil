@extends("master.app")

@section("content")

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
                            <a href="#">Add Product</a>
                        </li>
                    </ul>
                </div>
                <h1 class="page-title">Add Product</h1>
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

<!--================================
        START SIGNUP AREA
=================================-->
<section class="section--padding2 bgcolor">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="shortcode_modules">
                    <div class="modules__title">
                        <h3>Add Product</h3>
                    </div>
                    <div class="modules__content">
                        <form method="POST" action="{{route("save_product")}}">
                           @csrf
                        <div class="row">
                            <div class="col-md-6 offset-md-1">
                                <form action="#">
                                    <div class="form-group">
                                        <label for="f1">Product Name</label>
                                        <input type="text" id="f1" class="text_field"
                                        name="name"
                                         placeholder="Enter Product Name...">
                                    </div>
                                    <div class="form-group">
                                        <label for="rlicense">Price</label>
                                        <div class="input-group with--addon">
                                            <span class="input-group-addon">$</span>
                                            <input type="number" id="rlicense" class="text_field"
                                             name="price"
                                             placeholder="00.00">
                                        </div>
                                    </div>
                                 
                            
                                    <div class="form-group">
                                        <label for="cv_upload">Product Image</label>
                                        <label for="cv_upload" class="cv_upload">
                                            <span class="text">Upload your Product</span>
                                            <span class="lnr lnr-upload up_icon"></span>
                                            <input id="cv_upload" name="image" type="file">
                                        </label>
                                    </div>
                              
                                    <div class="form-group">
                                        <label for="textarea1">Details</label>
                                        <textarea class="text_field" name="details" id="textarea1" placeholder="Your text here"></textarea>
                                    </div>

                                </form>
                            </div>

                            <div class="col-md-12">
                                <div class="dashboard_setting_btn">
                                    <button type="submit" class="btn btn--round btn--md">Save Change</button>
                                </div>
                            </div>
                            
                        </div>
                    </form>
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