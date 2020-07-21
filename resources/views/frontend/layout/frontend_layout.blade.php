<!DOCTYPE html>
<html lang="en">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>@yield('frontend_title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Techzone">
<meta name="keywords" content="fashion, store, E-commerce, CCTV, CCTV Camera, HD Camera, IP Camera,">
<meta name="robots" content="*">
<link rel="icon" href="#" type="image/x-icon">
<link rel="shortcut icon" href="#" type="image/x-icon">

<!-- CSS Style -->
<link rel="stylesheet" type="text/css" href="{{asset('frontend/')}}/stylesheet/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/')}}/stylesheet/font-awesome.css" media="all">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/')}}/stylesheet/bootstrap-select.css">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/')}}/stylesheet/revslider.css" >
<link rel="stylesheet" type="text/css" href="{{asset('frontend/')}}/stylesheet/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/')}}/stylesheet/owl.theme.css">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/')}}/stylesheet/jquery.bxslider.css">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/')}}/stylesheet/jquery.mobile-menu.css">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/')}}/stylesheet/style.css" media="all">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/')}}/stylesheet/responsive.css" media="all">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700,800' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Teko:300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Saira+Condensed:300,400,500,600,700,800" rel="stylesheet">
<link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
@yield('fontend_css')
</head>
<body>
<div id="page">
  <!-- header -->
  @include('frontend.layout.include.header')
  <!--container-->
  
  @yield('front_section')
  
  <!-- footer -->
  @include('frontend.layout.include.footer')
  <!-- End For version 1,2,3,4,6 --> 
  
</div>

<!-- Mobile Menu-->
@include('frontend.layout.include.mobile_menue')

<!-- JavaScript --> 

<script type="text/javascript" src="{{asset('frontend/')}}/js/bootstrap.min.js"></script> 
<script src="{{asset('frontend/')}}/js/bootstrap-slider.min.js"></script> 
<script src="{{asset('frontend/')}}/js/bootstrap-select.min.js"></script> 
<script type="text/javascript" src="{{asset('frontend/')}}/js/parallax.js"></script> 
<script type="text/javascript" src="{{asset('frontend/')}}/js/revslider.js"></script> 
<script type="text/javascript" src="{{asset('frontend/')}}/js/common.js"></script> 
<script type="text/javascript" src="{{asset('frontend/')}}/js/jquery.bxslider.min.js"></script> 
<script type="text/javascript" src="{{asset('frontend/')}}/js/owl.carousel.min.js"></script> 
<script type="text/javascript" src="{{asset('frontend/')}}/js/jquery.mobile-menu.min.js"></script> 
<script src="{{asset('frontend/')}}/js/countdown.js"></script> 
<script src="{{asset('frontend/')}}/js/frontend.js"></script> 


<script>
        jQuery(document).ready(function(){
            jQuery('#rev_slider_4').show().revolution({
                dottedOverlay: 'none',
                delay: 5000,
                startwidth: 1170,
	            startheight:650,

                hideThumbs: 200,
                thumbWidth: 200,
                thumbHeight: 50,
                thumbAmount: 2,

                navigationType: 'thumb',
                navigationArrows: 'solo',
                navigationStyle: 'round',

                touchenabled: 'on',
                onHoverStop: 'on',
                
                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,
            
                spinner: 'spinner0',
                keyboardNavigation: 'off',

                navigationHAlign: 'center',
                navigationVAlign: 'bottom',
                navigationHOffset: 0,
                navigationVOffset: 20,

                soloArrowLeftHalign: 'left',
                soloArrowLeftValign: 'center',
                soloArrowLeftHOffset: 20,
                soloArrowLeftVOffset: 0,

                soloArrowRightHalign: 'right',
                soloArrowRightValign: 'center',
                soloArrowRightHOffset: 20,
                soloArrowRightVOffset: 0,

                shadow: 0,
                fullWidth: 'on',
                fullScreen: 'off',

                stopLoop: 'off',
                stopAfterLoops: -1,
                stopAtSlide: -1,

                shuffle: 'off',

                autoHeight: 'off',
                forceFullWidth: 'on',
                fullScreenAlignForce: 'off',
                minFullScreenHeight: 0,
                hideNavDelayOnMobile: 1500,
            
                hideThumbsOnMobile: 'off',
                hideBulletsOnMobile: 'off',
                hideArrowsOnMobile: 'off',
                hideThumbsUnderResolution: 0,

                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                startWithSlide: 0,
                fullScreenOffsetContainer: ''
            });
        });
        </script> 
<script type="text/javascript">
    function HideMe()
    {
        jQuery('.popup1').hide();
        jQuery('#fade').hide();
    }
</script> 
<script>
      var dthen1 = new Date("12/25/17 11:59:00 PM");
      start = "08/04/15 03:02:11 AM";
      start_date = Date.parse(start);
      var dnow1 = new Date(start_date);
      if (CountStepper > 0)
      ddiff = new Date((dnow1) - (dthen1));
      else
      ddiff = new Date((dthen1) - (dnow1));
      gsecs1 = Math.floor(ddiff.valueOf() / 1000);
      
      var iid1 = "countbox_1";
      CountBack_slider(gsecs1, "countbox_1", 1);
    </script>

<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        {!! Toastr::message() !!}
        <script>
        @if($errors->any())
        @foreach($errors->all() as $error)
        toastr.error('{{ $error }}','Error',{
            closeButton:true,
            progressBar:true,
        });
        @endforeach
        @endif
    </script>

    @yield('fontend_js')
</body>

</html>
