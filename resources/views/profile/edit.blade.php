{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}

@extends("master.app")
@section("style")
 <style>
    .cover_photo {
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
                            <a href="{{ route('dashboard') }}">@lang('app.dashboard')</a>
                        </li>
                        <li class="active">
                            <a href="{{ LaravelLocalization::localizeURL('/profile') }}">@lang('app.settings')</a>
                        </li>
                        </ul>
                    </ul>
                </div>
                <h1 class="page-title">@lang('app.settings')</h1>
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
                        <li  >
                            <a href="{{route('manage_products')}}">
                                <span class="lnr lnr-briefcase"></span>@lang('app.manage_products')</a>
                        </li>
                        <li>
                            <a href="">
                                <span class="lnr lnr-briefcase"></span>@lang('app.manage_gallery')</a>
                        </li>
                        <li class="active">
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
                    <div class="dashboard_title_area">
                        <div class="dashboard__title">
                            <h3>@lang('app.profile_settings')</h3>
                        </div>
                    </div>
                </div>
            </div>

            <form method="post" action="{{ route('profile.update') }}" enctype="multipart/form-data" class="setting_form">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-lg-6">
                        <div class="information_module">
                            <a class="toggle_title" href="#collapse2" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapse1">
                                <h4>@lang('app.personal_information')
                                    <span class="lnr lnr-chevron-down"></span>
                                </h4>
                            </a>

                            <div class="information__set toggle_module collapse show" id="collapse2">
                                <div class="information_wrapper form--fields">
                                    <div class="form-group">
                                        {{-- <p>Update your account's profile information and email address.</p> --}}
                                    </div>
                                    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                                        @csrf
                                    </form>
                            
                                       
                                   <div class="form-group">
                                        <label for="name">@lang('app.profile_name')
                                            <sup>*</sup>
                                        </label>
                                        <input id="name" required autofocus autocomplete="name" 
                                        value="{{isset($user) ? $user->name :  ''}}"
                                         type="text" class="text_field" name="name" placeholder="First Name">
                                        <x-input-error class="mt-2" :messages="$errors->get('name')" />
                                    </div>

                                    <div class="form-group">
                                        <label for="emailad">@lang('app.profile_email')
                                            <sup>*</sup>
                                        </label>
                                        <input id="email" required autocomplete="username"  type="email" id="emailad" class="text_field" name="email" placeholder="Email address"
                                        value="{{isset($user) ? $user->email :  ''}}">
                                        <x-input-error class="mt-2" :messages="$errors->get('email')" />

                                            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                                            <div>
                                                <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                                                    {{ __('Your email address is unverified.') }}
                            
                                                    <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                                        {{ __('Click here to re-send the verification email.') }}
                                                    </button>
                                                </p>
                            
                                                @if (session('status') === 'verification-link-sent')
                                                    <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                                                        {{ __('A new verification link has been sent to your email address.') }}
                                                    </p>
                                                @endif
                                            </div>
                                        @endif

                                    </div>
                                   
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="password">@lang('app.current_password')
                                                    <sup>*</sup>
                                                </label>
                                                <input name="current_password" type="password" id="current_password" class="text_field" placeholder="">
                                                <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="conpassword">@lang('app.new_password')
                                                    <sup>*</sup>
                                                </label>
                                                <input type="password"  name="password" id="password" class="text_field" placeholder="re-enter password">
                                                <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="website">@lang('app.confirm_password')
                                            <sup>*</sup>
                                        </label>
                                        <input id="password_confirmation" type="password" name="password_confirmation" id="website" class="text_field" placeholder="Website">
                                        <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                                    </div>

                                    <div class="form-group">
                                        <label for="authbio">@lang('app.bio')</label>
                                        <textarea name="bio" id="authbio" class="text_field" placeholder="Short brief about yourself or your account...">
                                            {{isset($user->profile) ? $user->profile->bio :  ''}}
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    

                    <div class="col-lg-6">
                        <div class="information_module">
                            <a class="toggle_title" href="#collapse3" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapse1">
                                <h4>@lang('app.profile_image')
                                    <span class="lnr lnr-chevron-down"></span>
                                </h4>
                            </a>

                            <div class="information__set profile_images toggle_module collapse" id="collapse3">
                                <div class="information_wrapper">
                                    <div class="profile_image_area">
                                        <img src="{{isset($user->profie->image) ? asset('img/'.$user->profie->image) : asset('images/avatar_person.png') }}" alt="Author profile area" width="100px">
                                        <div class="img_info">
                                            <p class="bold">@lang('app.profile_image')</p>
                                            <p class="subtitle">JPG, GIF or PNG 100x100 px</p>
                                        </div>

                                        {{-- <div class="form-group ">
                                            <label for="cover_photo">@lang('app.product_image')</label>
                                            <label for="cover_photo" class="cover_photo">
                                                <span class="text ">@lang('app.upload_image')</span>
                                                <span class="lnr lnr-upload up_icon">{{isset($user) ? $user->image :  ''}}</span>
                                                <input value="{{isset($user) ? $user->image :  ''}}"
                                                id="cover_photo" name="image" type="file">
                                            </label>
                                        </div> --}}

                                        <label for="cover_photo" class="cover_photo">
                                         {{-- <span class="">{{isset($user->profile) ? $user->profile->image :  ''}}</span> --}}
                                         <span class="btn btn--sm btn--round" aria-hidden="true">
                                            {{isset($user->profile->image) ? $user->profile->image : 'Upload image'}}
                                           </span>
                                         <input 
                                         id="cover_photo" style="display:none;" name="image" type="file">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="information_module">
                            <a class="toggle_title collapsed" href="#collapse5" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapse1">
                                <h4>@lang('app.social_profiles')
                                    <span class="lnr lnr-chevron-down"></span>
                                </h4>
                            </a>

                            <div class="information__set social_profile toggle_module collapse" id="collapse5" style="">
                                <div class="information_wrapper">
                                    <div class="social__single">
                                        <div class="social_icon">
                                            <span class="fa fa-facebook"></span>
                                        </div>

                                        <div class="link_field">
                                            <input name="facebook" type="text" class="text_field" placeholder="facebook"
                                            value="{{isset($user->profile) ? $user->profile->facebook :  ''}}">
                                        </div>
                                    </div>
                                    <!-- end /.social__single -->

                                    <div class="social__single">
                                        <div class="social_icon">
                                            <span class="fa fa-twitter"></span>
                                        </div>

                                        <div class="link_field">
                                            <input name="instagram" type="text" class="text_field" placeholder="instagram"
                                            value="{{isset($user->profile) ? $user->profile->instagram :  ''}}">
                                        </div>
                                    </div>
                                    <!-- end /.social__single -->

                                    <div class="social__single">
                                        <div class="social_icon">
                                            <span class="fa fa-google-plus"></span>
                                        </div>

                                        <div class="link_field">
                                            <input name="whatsup" type="text" class="text_field" placeholder="phone"
                                            value="{{isset($user->profile) ? $user->profile->whatsup :  ''}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="information_module">
                            <a class="toggle_title" href="#collapse4" role="button" data-toggle="collapse" aria-expanded="true" aria-controls="collapse1">
                                <h4>Email Settings
                                    <span class="lnr lnr-chevron-down"></span>
                                </h4>
                            </a>

                            <div class="information__set mail_setting toggle_module collapse show" id="collapse4" style="">
                                <div class="information_wrapper">
                                    <div class="custom_checkbox">
                                        <input type="checkbox" id="opt1" class="" name="mail_rating_reminder" checked="">
                                        <label for="opt1">
                                            <span class="shadow_checkbox"></span>
                                            <span class="radio_title">Rating Reminders</span>
                                            <span class="desc">Send an email reminding me to rate an item after purchase</span>
                                        </label>
                                    </div>
                                    <!-- end /.custom-radio -->

                                    <div class="custom_checkbox">
                                        <input type="checkbox" id="opt2" class="" name="mail_update_noti" checked="">
                                        <label for="opt2">
                                            <span class="shadow_checkbox"></span>
                                            <span class="radio_title">Item Update Notifications</span>
                                            <span class="desc">Send an email when an item I've purchased is updated</span>
                                        </label>
                                    </div>
                                    <!-- end /.custom_checkbox -->

                                    <div class="custom_checkbox">
                                        <input type="checkbox" id="opt3" class="" name="mail_comment_noti" checked="">
                                        <label for="opt3">
                                            <span class="shadow_checkbox"></span>
                                            <span class="radio_title">Item Comment Notifications</span>
                                            <span class="desc">Send me an email when someone comments on one of my items</span>
                                        </label>
                                    </div>
                                    <!-- end /.custom_checkbox -->

                                    <div class="custom_checkbox">
                                        <input type="checkbox" id="opt4" class="" name="mail_item_review_noti" checked="">
                                        <label for="opt4">
                                            <span class="shadow_checkbox"></span>
                                            <span class="radio_title">Item Review Notifications</span>
                                            <span class="desc">Send me an email when my items are approved or rejected</span>
                                        </label>
                                    </div>
                                    <!-- end /.custom_checkbox -->

                                    <div class="custom_checkbox">
                                        <input type="checkbox" id="opt5" class="" name="mail_review_noti" checked="">
                                        <label for="opt5">
                                            <span class="shadow_checkbox"></span>
                                            <span class="radio_title">Buyer Review Notifications</span>
                                            <span class="desc">Send me an email when someone leaves a review with their rating</span>
                                        </label>
                                    </div>
                                    <!-- end /.custom_checkbox -->

                                    <div class="custom_checkbox">
                                        <input type="checkbox" id="opt6" class="" name="mail_support_noti" checked="">
                                        <label for="opt6">
                                            <span class="shadow_checkbox"></span>
                                            <span class="radio_title">Support Notifications</span>
                                            <span class="desc">Send me emails showing my soon to expire support entitlements</span>
                                        </label>
                                    </div>
                                    <!-- end /.custom_checkbox -->

                                    <div class="custom_checkbox">
                                        <input type="checkbox" id="opt7" class="" name="mail_weekly">
                                        <label for="opt7">
                                            <span class="shadow_checkbox"></span>
                                            <span class="radio_title">Weekly Summary Emails</span>
                                            <span class="desc">Send me emails showing my soon to expire support entitlements</span>
                                        </label>
                                    </div>
                                    <!-- end /.custom_checkbox -->

                                    <div class="custom_checkbox">
                                        <input type="checkbox" id="opt8" class="" name="mail_newsletter">
                                        <label for="opt8">
                                            <span class="shadow_checkbox"></span>
                                            <span class="radio_title">MartPlace Newsletter</span>
                                            <span class="desc">Get update about latest news, update and more.</span>
                                        </label>
                                    </div>
                                    <!-- end /.custom_checkbox -->
                                </div>
                                <!-- end /.information_wrapper -->
                            </div>
                            <!-- end /.information_module -->
                        </div> --}}
                        <!-- end /.information_module -->
                    </div>

                    <div class="col-md-12">
                        <div class="dashboard_setting_btn">
                            <button type="submit" class="btn btn--round btn--md">@lang('app.save_changes')</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>


@endsection

@section("script")
<script>
    console.log("test");
$('#cover_photo').change(function() {
    console.log("testrrrr");
  var i = $(this).prev('span').clone();
  console.log("test" , i);
  var file = $('#cover_photo')[0].files[0].name;
  console.log(file);
  $(this).prev('span').text(file);
});
</script>
@endsection


