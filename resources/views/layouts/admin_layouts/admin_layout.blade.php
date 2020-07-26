<!doctype html>
<html lang="en" class="fixed left-sidebar-top">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>@yield('admin_title')</title>
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('admin')}}/favicon/apple-icon-120x120.png">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('admin')}}/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('admin')}}/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('admin')}}/favicon/favicon-16x16.png">
    <script src="{{asset('admin')}}/vendor/pace/pace.min.js"></script>
    <link href="{{asset('admin')}}/vendor/pace/pace-theme-minimal.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('admin')}}/vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('admin')}}/vendor/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="{{asset('admin')}}/vendor/animate.css/animate.css">
    <link rel="stylesheet" href="{{asset('admin')}}/vendor/toastr/toastr.min.css">
    <link rel="stylesheet" href="{{asset('admin')}}/vendor/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="{{asset('admin')}}/stylesheets/css/style.css">

    @yield('admin_css')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="{{asset('admin')}}/vendor/jquery/jquery-1.12.3.min.js"></script>
    <script src="{{asset('admin/js/admin_js.js')}}"></script>
    
</head>

<body>
    <div class="wrap">
        
        @include('layouts.admin_layouts.admin_header')
        
        <div class="page-body">
            
            @include('layouts.admin_layouts.admin_sidebar')
            
            @yield('content')
            
            <div class="right-sidebar">
                <div class="right-sidebar-toggle" data-toggle-class="right-sidebar-opened" data-target="html">
                    <i class="fa fa-cog fa-spin" aria-hidden="true"></i>
                </div>
                <div id="right-nav" class="nano">
                    <div class="nano-content">
                        <div class="template-settings">
                            <h4 class="text-center">Template Settings</h4>
                            <ul class="toggle-settings pv-xlg">
                                <li>
                                    <h6 class="text">Header fixed</h6>
                                    <label class="switch">
                                        <input id="header-fixed" type="checkbox" checked>
                                        <span class="slider round"></span>
                                    </label>
                                </li>
                                <li>
                                    <h6 class="text">Content header fixed</h6>
                                    <label class="switch">
                                        <input id="content-header-fixed" type="checkbox" checked>
                                        <span class="slider round"></span>
                                    </label>
                                </li>
                                <li>
                                    <h6 class="text">Left sidebar collapsed</h6>
                                    <label class="switch">
                                        <input id="left-sidebar-collapsed" type="checkbox">
                                        <span class="slider round"></span>
                                    </label>
                                </li>
                                <li>
                                    <h6 class="text">Left sidebar Top</h6>
                                    <label class="switch">
                                        <input id="left-sidebar-top" type="checkbox" checked>
                                        <span class="slider round"></span>
                                    </label>
                                </li>
                                <li>
                                    <h6 class="text">Left sidebar fixed</h6>
                                    <label class="switch">
                                        <input id="left-sidebar-fixed" type="checkbox" checked>
                                        <span class="slider round"></span>
                                    </label>
                                </li>
                                <li>
                                    <h6 class="text">Left sidebar over</h6>
                                    <label class="switch">
                                        <input id="left-sidebar-over" type="checkbox">
                                        <span class="slider round"></span>
                                    </label>
                                </li>
                                <li>
                                    <h6 class="text">Left sidebar nav left-lines</h6>
                                    <label class="switch">
                                        <input id="left-sidebar-left-lines" type="checkbox" checked>
                                        <span class="slider round"></span>
                                    </label>
                                </li>
                            </ul>
                            <h4 class="text-center">Template Colors</h4>

                            <div class="row toggle-colors">
                                <div class="col-xs-6">
                                    <a href="index.html" class="on-click"> <img alt="Helsinki-green" src="{{asset('admin')}}/images/theme/dark_green.png" /></a>
                                </div>
                                <div class="col-xs-6">
                                    <a href="#" class="on-click"> <img alt="Helsinki-green" src="images/theme/white_green.png" /></a>
                                </div>
                            </div>
                            <div class="row toggle-colors">
                                <div class="col-xs-6">
                                    <a href="#" class="on-click"> <img alt="Helsinki-green" src="images/theme/dark_white.png" /></a>
                                </div>
                                <div class="col-xs-6">
                                    <a href="#" class="on-click"> <img alt="Helsinki-green" src="images/theme/white_dark.png" /></a>
                                </div>
                            </div>
                            <div class="row toggle-colors">
                                <div class="col-xs-6">
                                    <a href="#" src="images/theme/dark_blue.png" /></a>
                                </div>
                                <div class="col-xs-6">
                                    <a href="#" class="on-click"> <img alt="Helsinki-green" src="images/theme/white_blue.png" /></a>
                                </div>
                            </div>
                            <div class="row mt-lg">
                                <div class="col-sm-12 text-center">
                                    <a  target="_blank" href="#"><h5> <i class="fa fa-book mr-sm"></i>Online Documentation</h5></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <a href="#" class="scroll-to-top"><i class="fa fa-angle-double-up"></i></a>
        </div>
    </div>
    
    <script src="{{asset('admin')}}/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{asset('admin')}}/vendor/nano-scroller/nano-scroller.js"></script>
    <script src="{{asset('admin')}}/javascripts/template-script.min.js"></script>
    <script src="{{asset('admin')}}/javascripts/template-init.min.js"></script>
    <script src="{{asset('admin')}}/vendor/toastr/toastr.min.js"></script>
    <script src="{{asset('admin')}}/vendor/chart-js/chart.min.js"></script>
    <script src="{{asset('admin')}}/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="{{asset('admin')}}/javascripts/examples/dashboard.js"></script>
    
    @yield('admin_js')
</body>

</html>