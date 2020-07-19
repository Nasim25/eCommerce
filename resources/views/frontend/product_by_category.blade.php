@extends('frontend.layout.frontend_layout')
@section('frontend_title','Product By Category')
@section('front_section')
<div class="content">

  <div class="page-heading">
    <div class="breadcrumbs">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <ul>
              <li class="home"> <a href="index-2.html" title="Go to Home Page">Home</a> <span>&rsaquo; </span> </li>
              <li class="category1599"> <a href="grid.html" title="">New Car</a> <span>&rsaquo; </span> </li>
              <li class="category1600"> <a href="grid.html" title="">Audi</a> <span>&rsaquo; </span> </li>
              <li class="category1601"> <strong>Sedans</strong> </li>
            </ul>
          </div>
          <!--col-xs-12-->
        </div>
        <!--row-->
      </div>
      <!--container-->
    </div>
    <div class="page-title">
      <h2>PRODUCT LISTING</h2>
    </div>
  </div>

  <section class="main-container col2-left-layout bounceInUp animated">

    <div class="container">
      <div class="row">
        <div class="col-main col-sm-9 col-sm-push-3 product-grid">
          <div class="pro-coloumn">
            <article class="col-main">
              <div class="toolbar">
                <div class="sorter">

                </div>
                <div id="sort-by">
                  <label class="left">Sort By: </label>
                  <ul>
                    <li><a href="#">Position<span class="right-arrow"></span></a>
                      <ul>
                        <li><a href="#">Name</a></li>
                        <li><a href="#">Price</a></li>
                        <li><a href="#">Position</a></li>
                      </ul>
                    </li>
                  </ul>
                  <a class="button-asc left" href="#" title="Set Descending Direction"><span class="top_arrow"></span></a>
                </div>
                <div class="pager">

                </div>
              </div>
              <div class="category-products">
                <ul class="products-grid">

                  @foreach($categories_product->products as $product)
                  <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                    <div class="item-inner">
                      <div class="item-img">
                        <div class="item-img-info"><a href="{{url('/product-view/'.$product->id)}}" title="Retis lapen casen" class="product-image"><img src="{{ asset($product->main_image)}}" alt="{{$product->product_name}}"></a>

                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"><a href="{{url('/product-view/'.$product->id)}}" title="{{$product->product_name}}">{{Str::limit($product->product_name,36)}}</a> </div>
                          <div class="item-content">
                            <div class="rating">
                              <div class="ratings">
                                <div class="rating-box">
                                  <div class="rating" style="width:80%"></div>
                                </div>
                                <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                              </div>
                            </div>
                            <div class="item-price">
                              <div class="price-box"><span class="regular-price"><span class="price">Tk {{ $product->product_price}}</span> </span> </div>
                            </div>
                            <div class="other-info">

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    @endforeach

                </ul>
              </div>
              <div class="toolbar bottom">

                <div id="sort-by">
                  <label class="left">Sort By: </label>
                  <ul>
                    <li><a href="#">Position<span class="right-arrow"></span></a>
                      <ul>
                        <li><a href="#">Name</a></li>
                        <li><a href="#">Price</a></li>
                        <li><a href="#">Position</a></li>
                      </ul>
                    </li>
                  </ul>
                  <a class="button-asc left" href="#" title="Set Descending Direction"><span class="top_arrow"></span></a>
                </div>
                <div class="pager">
                  <div id="limiter">
                    <label>View: </label>
                    <ul>
                      <li><a href="#">15<span class="right-arrow"></span></a>
                        <ul>
                          <li><a href="#">20</a></li>
                          <li><a href="#">30</a></li>
                          <li><a href="#">35</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                  <div class="pages">
                    <label>Page:</label>
                    <ul class="pagination">
                      <li><a href="#">&laquo;</a></li>
                      <li class="active"><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                      <li><a href="#">&raquo;</a></li>
                    </ul>
                  </div>
                </div>
              </div>

            </article>
          </div>

        </div>
        <aside class="col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9 wow bounceInUp animated">


          <div class="side-nav-categories">
            <div class="block-title"> Categories </div>

            <div class="box-content box-category">
              <ul>
              @foreach($sections as $section)
                <!--level 0-->
                <li> <a class="active">{{$section->name}}</a> <span class="subDropdown plus"></span>
                  @foreach($section->categories as $category)
                    <ul class="level0_482" style="display:none">
                      <li> <a href="{{url('product-by-category/'.$category['slug'])}}"> {{$category->category_name}} </a> <span class="subDropdown plus"></span>
                        <ul class="level0_482" style="display:block">
                        @foreach($category->subcategories as $subcategory)
                          <li> <a href="{{url('product-by-subcategory/'.$subcategory->id)}}"> {{$subcategory->subcategory_name}} </a> <span class=""></span></li>
                          @endforeach 
                        </ul>
                    
                      </li>    
                    </ul>
                  @endforeach
                </li>
              @endforeach

              </ul>
            </div>
            <!--box-content box-category-->
          </div>
          <!--side-nav-categories-->

          <div class="custom-slider">
            <div>
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li class="active" data-target="#carousel-example-generic" data-slide-to="0"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item active"><img src="{{asset('frontend/')}}/images/slide3.jpg" alt="slide3">
                    <div class="carousel-caption">
                      <h3><a title=" Sample Product" href="product-detail.html">50% OFF</a></h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      <a class="link" href="#">Buy Now</a>
                    </div>
                  </div>
                  <div class="item"><img src="{{asset('frontend/')}}/images/slide1.jpg" alt="slide1">
                    <div class="carousel-caption">
                      <h3><a title=" Sample Product" href="product-detail.html">Hot collection</a></h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                  </div>
                  <div class="item"><img src="{{asset('frontend/')}}/images/slide2.jpg" alt="slide2">
                    <div class="carousel-caption">
                      <h3><a title=" Sample Product" href="product-detail.html">Summer collection</a></h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                  </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#carousel-example-generic" data-slide="next"> <span class="sr-only">Next</span> </a>
              </div>
            </div>
          </div>

          <!-- <div class="block block-list block-cart">
            <div class="block-title"> My Cart </div>
            <div class="block-content">
              <div class="summary">
                <p class="amount">There is <a href="#">1 item</a> in your cart.</p>
                <p class="subtotal"> <span class="label">Cart Subtotal:</span> <span class="price">$299.00</span> </p>
              </div>
              <div class="ajax-checkout">
                <button type="button" title="Checkout" class="button button-checkout" onClick="#"> <span>Checkout</span> </button>
              </div>
              <p class="block-subtitle">Recently added item(s)</p>
              <ul id="cart-sidebar" class="mini-products-list">
                <li class="item">
                  <div class="item-inner"> <a href="#" class="product-image"><img src="products-images/p1.jpg" width="80" alt="product"></a>
                    <div class="product-details">
                      <div class="access"> <a href="#" class="btn-remove1">Remove</a>
                        <a href="#" title="Edit item" class="btn-edit">
                          <i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div>
                      

                      <strong>1</strong> x <span class="price">$299.00</span>
                      <p class="product-name"><a href="#">Gorgeous Mercedes-Benz E-Class All-Terrain Luxury</a></p>
                    </div>
                    
                  </div>
                </li>
                <li class="item  last1">
                  <div class="item-inner"> <a href="#" class="product-image"><img src="products-images/p2.jpg" width="80" alt="product"></a>
                    <div class="product-details">
                      <div class="access"> <a href="#" class="btn-remove1">Remove</a>
                        <a href="#" title="Edit item" class="btn-edit">
                          <i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div>
                      

                      <strong>1</strong> x <span class="price">$299.00</span>
                      <p class="product-name"><a href="#">Gorgeous Mercedes-Benz E-Class All-Terrain Luxury</a></p>
                    </div>
                    
                  </div>
                </li>
              </ul>
            </div>
          </div> -->

          <!-- <div class="block block-compare">
            <div class="block-title"> Compare Products </div>
            <div class="block-content">
              <ol id="compare-items">
                <li class="item odd">
                  <a href="#" class="btn-remove1" onClick="#"></a>
                  <a class="product-name" href="#">Gorgeous Mercedes-Benz E-Class All-Terrain Luxury</a> </li>
                <li class="item odd">
                  <a href="#" class="btn-remove1" onClick="#"></a>
                  <a class="product-name" href="#">Gorgeous Mercedes-Benz E-Class All-Terrain Luxury</a> </li>
                <li class="item odd">
                  <a href="#" class="btn-remove1" onClick="#"></a>
                  <a class="product-name" href="#">Gorgeous Mercedes-Benz E-Class All-Terrain Luxury</a> </li>

              </ol>

              <div class="ajax-checkout">
                <button type="button" title="Compare" class="button button-compare" onClick="#"><span>Compare</span></button>
                <button class="button button-clear" href="#"><span>Clear</span></button>
              </div>
            </div>

          </div> -->

        </aside>

      </div>

    </div>

  </section>

</div>
@endsection

@section('fontend_js')
<script src="{{asset('frontend/')}}/js/cloud-zoom.js"></script>
@endsection