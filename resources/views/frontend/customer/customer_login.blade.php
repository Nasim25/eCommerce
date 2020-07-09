@extends('frontend.layout.frontend_layout')
@section('front_section')
<div class="content">

    <div class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title">
                        <h2>Login or Create an Account</h2>
                    </div>
                </div>
                <!--col-xs-12-->
            </div>
            <!--row-->
        </div>
        <!--container-->
    </div>


    <!-- BEGIN Main Container -->

    <div class="main-container col1-layout wow bounceInUp animated animated" style="visibility: visible;">

        <div class="main">
            <div class="account-login container">
                <!--page-title-->
                
                    <input name="form_key" type="hidden" value="EPYwQxF6xoWcjLUr">
                    <fieldset class="col2-set">
                        <div class="col-1 new-users">
                            <strong>New Customers</strong>
                            <div class="content">
                             <form method="POST" id="signup" action="" id="login-form">
                                @csrf
                                <!-- registration -->
                                <div class="col-main col-sm-9 wow bounceInUp animated animated animated" style="visibility: visible;">
                                    <div id="messages_product_view"></div>
                                    <form action="#" id="contactForm" method="post">
                                        <div class="static-contain">
                                            <fieldset class="group-select">
                                                <ul>
                                                    <li id="billing-new-address-form">
                                                        <fieldset class="">
                                                            <ul>
                                                                <li>
                                                                    <div class="customer-name">
                                                                        <div class="input-box name-firstname">
                                                                            <label for="name"><em class="required">*</em>Full Name</label>
                                                                            <br>
                                                                            <input name="name" id="name" title="Name" class="input-text required-entry" type="text">
                                                                        </div>
                                                                        <div class="input-box name-firstname">
                                                                            <label for="email"><em class="required">*</em>Email</label>
                                                                            <br>
                                                                            <input name="email" id="email" title="Email" class="input-text required-entry validate-email" type="text">
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <label for="telephone">Mobile Number</label>
                                                                    <br>
                                                                    <input name="telephone" id="telephone" title="Telephone" value="" class="input-text" type="text">
                                                                </li>
                                                                <li>
                                                                    <label for="comment"><em class="required">*</em>Address</label>
                                                                    <br>
                                                                    <textarea name="comment" id="comment" title="Comment" class="required-entry input-text" cols="5" rows="3"></textarea>
                                                                </li>
                                                            </ul>
                                                        </fieldset>
                                                    </li>

                                                    <div class="buttons-set">
                                                        <button type="submit" title="Create an Account" class="button create-account" onClick=""><span><span>Create an Account</span></span></button>
                                                    </div>
                                                </ul>
                                            </fieldset>
                                        </div>
                                    </form>

                                </div>
                                <!-- registration end -->
                                </form>
                            </div>
                        </div>
                


                <form method="POST" action="{{ url('customer-login') }}" id="login-form">
                    @csrf
                    <div class="col-2 registered-users">
                        <strong>Registered Customers</strong>
                        <div class="content">

                            <p>If you have an account with us, please log in.</p>
                            <ul class="form-list">
                                <li>
                                    <label for="email">Email Address<em class="required">*</em></label>
                                    <div class="input-box">
                                        <input type="email" name="email" id="email" class="input-text required-entry validate-email" title="Email Address" required >
                                    </div>
                                </li>
                                <li>
                                    <label for="pass">Password<em class="required">*</em></label>
                                    <div class="input-box">
                                        <input type="password" name="password" class="input-text required-entry validate-password" id="password" title="Password" required >
                                    </div>
                                </li>
                            </ul>
                            <div class="remember-me-popup">
                                <div class="remember-me-popup-head" style="display:none">
                                    <h3 id="text2">What's this?</h3>
                                    <a href="#" class="remember-me-popup-close" onClick="showDiv()" title="Close">Close</a>
                                </div>
                                <div class="remember-me-popup-body" style="display:none">
                                    <p id="text1">Checking "Remember Me" will let you access your shopping cart on this computer when
                                        you are logged out</p>
                                    <div class="remember-me-popup-close-button a-right">
                                        <a href="#" class="remember-me-popup-close button" title="Close" onClick="showDiv()"><span>Close</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        @if(Session::has('login_error'))
                            <div class="alert alert-warning alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong>Warning!</strong>{{Session::get('login_error')}}
                            </div>
                        @endif
                        @error('email')
                            <div class="alert alert-warning alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong>Warning!</strong>{{ $message }}
                            </div>
                        @enderror
                        @error('password')
                            <div class="alert alert-warning alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong>Warning!</strong>{{ $message }}
                            </div>
                        @enderror



                            <div class="buttons-set">

                                <button type="submit" class="button login" title="Login" name="send" id="send2"><span>Login</span></button>

                                <a href="#" class="forgot-word">Forgot Your Password?</a>
                            </div>
                            <!--buttons-set-->
                        </div>
                        <!--content-->
                    </div>
                    <!--col-2 registered-users-->
                    </fieldset>
                    <!--col2-set-->
                </form>

            </div>
            <!--account-login-->

        </div>
        <!--main-container-->

    </div>

</div>
@endsection

@section('fontend_js')
<script src="{{asset('frontend/')}}/js/cloud-zoom.js"></script>


@endsection