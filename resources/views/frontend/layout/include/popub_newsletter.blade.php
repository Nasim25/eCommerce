<div class="popup1" style="display: block;">
  <div class="newsletter-sign-box">
    <h3>Newsletter Sign up</h3>
     <img src="{{asset('frontend/')}}/images/close-icon.png" alt="close" class="x" onClick="HideMe();">@csrf
    <div class="newsletter">
      <div class="newsletter_img"> <img alt="newsletter" src="{{asset('TECH.png')}}"></div>
      <form action="{{url('subscribe')}}" method="post" id="popup-newsletter" name="popup-newsletter" class="email-form">
        <h4>sign up for our exclusive email list and be the first to hear of special offers.</h4>
        <div class="newsletter-form">
          <div class="input-box">
            <input type="email" name="email" id="newsletter2" title="Sign up for our newsletter" placeholder="Enter your email address" class="input-text required-entry validate-email">
            <button type="submit" title="Subscribe" class="button subscribe"><span>Subscribe</span></button>
          </div>
          <!--input-box--> 
        </div>
        <!--newsletter-form-->
        <label class="subscribe-bottom">
          <input type="checkbox" name="notshowpopup" id="notshowpopup">
          Don’t show this popup again</label>
      </form>
    </div>
    <!--newsletter--> 
    
  </div>
</div>
<div id="fade" style="display: block;"></div>