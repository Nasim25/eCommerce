<header>
  <div class="container">
    <div class="row">
      <div id="header">
        <div class="header-container">
          <div class="header-logo"> <a href="{{url('/')}}" title="Car HTML" class="logo">
              <div><img src="{{asset('public/TECH.png')}}" style="margin-top: -33px;margin-left: -6px;" alt="Car Store"></div>
            </a> </div>
          <div class="header__nav">
            <div class="header-banner">
              <div class="col-lg-6 col-xs-12 col-sm-6 col-md-6">
                <div class="assetBlock">
                  <div style="height: 20px; overflow: hidden;" id="slideshow">
                    <p style="display: block;">Hot days! - <span>50%</span> Get ready for summer! </p>
                    <p style="display: none;">Save up to <span>40%</span> Hurry limited offer!</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-lg-6 col-xs-12 col-sm-6 col-md-6 call-us"><i class="fa fa-clock-o"></i> Everyday : 09am to 06pm <i class="fa fa-phone"></i> +880 1972727020</div>
            </div>
            <div class="fl-header-right">
              <div class="fl-links">
                <div class="no-js"> <a title="" class="clicker"></a>
                  <div class="fl-nav-links">
                    <div class="language-currency">
                      <div class="fl-language">
                        <h3>Language</h3>
                        <ul class="lang">
                          <li><a href="#"> <img src="{{asset('frontend/')}}/images/english.png" alt="English"> <span>English</span> </a></li>
                          <li><a href="#"> <img src="{{asset('frontend/')}}/images/francais.png" alt="French"> <span>French</span> </a></li>
                          <li><a href="#"> <img src="{{asset('frontend/')}}/images/german.png" alt="German"> <span>German</span> </a></li>
                        </ul>
                      </div>
                      <!--fl-language-->
                      <!-- END For version 1,2,3,4,6 -->
                      <!-- For version 1,2,3,4,6 -->
                      <!-- <div class="fl-currency">
                         <h3>Currency</h3>
                          <ul class="currencies_list">
                            <li><a href="#" title="EGP"> <strong>£</strong> Pound Sterling</a></li>
                            <li><a href="#" title="EUR"> <strong>€</strong> Euro</a></li>
                            <li><a href="#" title="USD"> <strong>$</strong> US Dollar</a></li>
                          </ul>
                        </div> -->
                      <!--fl-currency-->
                      <!-- END For version 1,2,3,4,6 -->
                    </div>
                    <h3>My Acount</h3>
                    <ul class="links">
                    @if(auth::user())
                    <li><a href="{{url('user-deshboard')}}" title="My Account">Profile</a></li>
                    @endif
                      @if(auth::user())
                      <li><a title="My Account" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form> 
                                                    </li>
                      @else
                      <li><a href="{{url('customer/login')}}" title="My Account">Login</a></li>
                      <li><a href="{{url('customer/login')}}" title="Wishlist">Register</a></li>
                      @endif

                      
                    </ul>
                  </div>
                </div>
              </div>
              <div class="fl-cart-contain">
                <div class="mini-cart">

                  <div class="basket"> <a href="{{url('cart')}}"><span> {{Cart::count()}} </span></a> </div>
                  <div class="fl-mini-cart-content" style="display: none;">
                    <div class="block-subtitle">
                      <div class="top-subtotal">{{Cart::count()}} items, <span class="price">TK {{Cart::total()}}</span> </div>
                      <!--top-subtotal-->
                      <!--pull-right-->
                    </div>
                    <!--block-subtitle-->
                    <ul class="mini-products-list" id="cart-sidebar">
                      @foreach(Cart::content() as $cartData)
                      <li class="item first">
                        <div class="item-inner"><a class="product-image" title="timi &amp; leslie Sophia Diaper Bag, Lemon Yellow/Shadow White" href="#l"><img alt="timi &amp; leslie Sophia Diaper Bag, Lemon Yellow/Shadow White" src="{{asset($cartData->options->image)}}"></a>
                          <div class="product-details">
                            <div class="access"><a class="btn-remove1" title="Remove This Item" href="{{url('cart-item-delete/'.$cartData->rowId)}}">Remove</a> <a class="btn-edit" title="Edit item" href="#"><i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div>
                            <!--access-->
                            <strong>{{ $cartData->qty }}</strong> x <span class="price">Tk {{ $cartData->price }}</span>
                            <p class="product-name"><a>{{ $cartData->name }}</a></p>
                          </div>
                        </div>
                      </li>
                      @endforeach
                    </ul>
                    <div class="actions">
                      <a class="btn-checkout" title="Checkout" type="button" href="{{url('checkout')}}"><span>Checkout</span></a>
                    </div>
                    <!--actions-->
                  </div>
                  <!--fl-mini-cart-content-->
                </div>
              </div>
              <!--mini-cart-->
              <div class="collapse navbar-collapse">
                <form class="navbar-form" role="search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-btn">
                      <button type="submit" class="search-btn"> <span class="glyphicon glyphicon-search"> <span class="sr-only">Search</span> </span> </button>
                    </span> </div>
                </form>
              </div>
              <!--links-->
            </div>
            <div class="fl-nav-menu">
              <nav>
                <div class="mm-toggle-wrap">
                  <div class="mm-toggle"><i class="fa fa-bars"></i><span class="mm-label">Menu</span> </div>
                </div>
                <div class="nav-inner">
                  <!-- BEGIN NAV -->
                  <ul id="nav" class="hidden-xs">
                    <li class="active"> <a class="level-top" href="{{url('/')}}"><span>Home</span></a></li>
                    @foreach($sections as $section)

                    <li class="level0 parent drop-menu"><a href="#"><span>{{$section->name}}</span> </a>
                      <!--sub sub category-->
                      <ul class="level1">
                      @foreach($section->categories as $category)
                        <li class="level1 first parent"><a href="{{url('product-by-category/'.$category['slug'])}}"><span>{{$category->category_name}}</span></a>
                          <ul class="level2 right-sub">
                            @foreach($category->subcategories as $subcategory)
                            <li class="level2 nav-2-1-1 first"><a href="{{url('product-by-subcategory/'.$subcategory->id)}}"><span>{{$subcategory->subcategory_name}}</span></a></li>
                            @endforeach
                          </ul>
                        </li>
                      @endforeach
                      </ul>
                    </li>

                    @endforeach

                    <li class="level0 parent drop-menu"> <a class="level-top" href="#"><span>Blog</span></a>
                      <!-- <ul class="level1">
                        <li class="level1 first"><a href="blog.html"><span>Blog List</span></a></li>
                        <li class="level1 nav-10-2"> <a href="blog-detail.html"> <span>Blog Detail</span> </a> </li>
                      </ul> -->
                    </li>
                    <li class="mega-menu hidden-sm"> <a class="level-top" href="{{url('about')}}"><span>About</span></a> </li>
                  </ul>
                  <!--nav-->
                </div>
              </nav>
            </div>
          </div>

          <!--row-->

        </div>
      </div>
    </div>
  </div>
</header>