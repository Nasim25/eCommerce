@extends('frontend.layout.frontend_layout')
@section('frontend_title','Product View')
@section('front_section')
<div class="content">

    <div class="main-container col1-layout wow bounceInUp animated">
        <div class="main">
            <div class="col-main">

                <div class="product-view wow bounceInUp animated" itemscope="" itemtype="" itemid="#product_base">
                    <div id="messages_product_view"></div>

                    <div class="product-essential container">
                        <div class="row">

                            <form action="{{url('add-to-cart')}}" method="post" id="product_addtocart_form">@csrf

                                <div class="product-img-box col-lg-5 col-sm-5 col-xs-12">
                                    <div class="new-label new-top-left">Hot</div>
                                    <div class="sale-label sale-top-left">-15%</div>
                                    <div class="product-image">
                                        <div class="product-full"> <img id="product-zoom" src="{{asset($product->view_image)}}" data-zoom-image="{{asset($product->view_image)}}" alt="product-image" /> </div>
                                        <div class="more-views">
                                            <div class="slider-items-products">
                                                <div id="gallery_01" class="product-flexslider hidden-buttons product-img-thumb">
                                                    <div class="slider-items slider-width-col4 block-content">


                                                        @foreach($product->productImages as $pImage)

                                                        <div class="more-views-items"> <a href="#" data-image="{{asset($pImage->product_image)}}" data-zoom-image="{{asset($pImage->product_image)}}"> <img id="product-zoom3" src="{{asset($pImage->product_image)}}" alt="product-image" /> </a> </div>
                                                        @endforeach

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end: more-images -->
                                </div>
                                <!--End For version 1,2,6-->
                                <!-- For version 3 -->
                                <div class="product-shop col-lg- col-sm-7 col-xs-12">

                                    <div class="brand">{{$product->brand->brand_name}}</div>
                                    <div class="product-name">
                                        <h1>{{$product->product_name}}</h1>
                                    </div>
                                    <div class="ratings">
                                        <div class="rating-box">
                                            <div style="width:60%" class="rating"></div>
                                        </div>
                                        <p class="rating-links"> <a href="#">{{$reviews->count('id')}} Review</a> </p>
                                    </div>
                                    <div class="price-block">
                                        <div class="price-box">
                                            <p class="availability in-stock"><span>In Stock</span></p>
                                            <p class="special-price"> <span class="price-label">Special Price</span> <span id="product-price-48" class="price"> Tk {{$product->product_price}} </span> </p>


                                        </div>
                                        <div class="price-box">
                                            <input type="hidden" value="{{$product->id}}" name="product_id">
                                            <select name="product_color" required>
                                                <option value="1">Color</option>

                                            </select>
                                            <select name="size" required>
                                                <option value="1">size</option>

                                            </select>

                                        </div>
                                    </div>
                                    <div class="add-to-box">
                                        <div class="add-to-cart">
                                            <div class="pull-left">
                                                <div class="custom pull-left">
                                                    <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty > 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="fa fa-minus">&nbsp;</i></button>
                                                    <input type="text" class="input-text qty" title="Qty" value="1" maxlength="12" id="qty" name="qty" required>
                                                    <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items-count" type="button"><i class="fa fa-plus">&nbsp;</i></button>
                                                </div>
                                            </div>
                                            <button class="button btn-cart" title="Add to Cart" type="submit">Add to Cart</button>
                                        </div>

                                    </div>
                                    <div class="short-description">
                                        <p></p>
                                    </div>
                                    <div class="email-addto-box">
                                        <!-- <ul class="add-to-links">
                                            <li> <a class="link-wishlist" href="#"><span>Add to Wishlist</span></a></li>
                                            <li><a class="link-compare" href="#"><span>Add to Compare</span></a></li>
                                        </ul> -->
                                        <p class="email-friend"></p>
                                    </div>
                                    <div class="social">
                                        <ul class="link">
                                            <li class="fb"><a href="#"></a></li>
                                            <li class="tw"><a href="#"></a></li>
                                            <li class="googleplus"><a href="#"></a></li>
                                            <li class="rss"><a href="#"></a></li>
                                            <li class="pintrest"><a href="#"></a></li>
                                            <li class="linkedin"><a href="#"></a></li>
                                            <li class="youtube"><a href="#"></a></li>
                                        </ul>
                                    </div>

                                    <ul class="shipping-pro">
                                        <li>Wordwide Shipping</li>
                                        <li>5 Days Return</li>
                                        <li>Member Discount</li>
                                    </ul>
                                </div>
                                <!--product-shop-->
                                <!--Detail page static block for version 3-->
                            </form>
                        </div>
                    </div>
                    <!--product-essential-->
                    <div class="product-collateral container">
                        <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
                            <li class="active"> <a href="#product_tabs_description" data-toggle="tab"> Product Description </a> </li>
                            <li> <a href="#reviews_tabs" data-toggle="tab">Reviews</a> </li>
                        </ul>
                        <div id="productTabContent" class="tab-content">
                            <div class="tab-pane fade in active" id="product_tabs_description">
                                <div class="std">
                                    {!! $product->description !!}
                                </div>
                            </div>

                            <div class="tab-pane fade" id="reviews_tabs">
                                <div class="woocommerce-Reviews">
                                    <div>
                                        <h2 class="woocommerce-Reviews-title">{{$reviews->count('id')}} reviews for <span>{{$product->product_name}}</span></h2>
                                        <ol class="commentlist">
                                            @foreach($reviews as $review)
                                            <li class="comment">
                                                <div>
                                                    <div class="comment-text">
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div style="width:100%" class="rating"></div>
                                                            </div>

                                                        </div>
                                                        <p class="meta">
                                                            <strong>{{$review->name}}</strong>
                                                            <span>–</span> {{$review->created_at}}
                                                        </p>
                                                        <div class="description">
                                                            {!! $review->review !!}
                                                        </div>
                                                    </div>
                                                </div>
                                            </li><!-- #comment-## -->
                                            @endforeach
                                        </ol>
                                    </div>
                                    <div>
                                        <div>
                                            <div class="comment-respond">
                                                <span class="comment-reply-title">Add a review </span>
                                                <form action="{{url('product-review')}}" method="post" class="comment-form" novalidate>@csrf

                                                    <input type="hidden" name="product_id" value="{{$product->id}}" required>
                                                    <p class="comment-notes"><span id="email-notes">Your Phone Number will not be published.</span> Required fields are marked <span class="required">*</span></p>
                                                    
                                                    <p class="comment-form-comment">
                                                        <label>Your review <span class="required">*</span></label>
                                                        <textarea id="review" name="review" placeholder="Enter Your Review" cols="45" rows="8" required></textarea>
                                                    </p>
                                                    <p class="comment-form-author">
                                                        <label for="author">Name <span class="required">*</span></label>
                                                        <input id="name" name="name" placeholder="Enter Your Name" type="text" value="" size="30" required></p>
                                                    <p class="comment-form-email">
                                                        <label for="email">Phone <span class="required">*</span></label>
                                                        <input id="phone" name="phone" type="number" placeholder="Enter Your Phone Number" size="30" required></p>
                                                    <p class="form-submit">
                                                        <input name="submit" type="submit" id="submit" class="submit" value="Submit">
                                                    </p>
                                                </form>
                                            </div><!-- #respond -->
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="product_tabs_custom">
                                <div class="product-tabs-content-inner clearfix">
                                    d
                                </div>
                            </div>
                            <div class="tab-pane fade" id="product_tabs_custom1">
                                <div class="product-tabs-content-inner clearfix">
                                    <p>nn</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!--product-collateral-->
                    <div class="box-additional">
                        <!-- BEGIN RELATED PRODUCTS -->
                        <div class="related-pro container">
                            <div class="slider-items-products">
                                <div class="new_title center">
                                    <h2>Related Products</h2>
                                </div>
                                <div id="related-slider" class="product-flexslider hidden-buttons">
                                    <div class="slider-items slider-width-col4 products-grid">
                                        @foreach($reletedProduct as $relatedP)
                                        <div class="item">
                                            <div class="item-inner">
                                                <div class="item-img">
                                                    <div class="item-img-info"><a href="{{url('/product-view/'.$relatedP->id)}}" title="{{$relatedP->product_name}}" class="product-image"><img src="{{asset($relatedP->main_image)}}" alt="{{$relatedP->product_name}}"></a>
                                                        <div class="new-label new-top-left">Used</div>
                                                        <div class="sale-label sale-top-left">-15%</div>

                                                    </div>
                                                </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title"><a href="{{url('/product-view/'.$relatedP->id)}}" title="Retis lapen casen">{{Str::limit($relatedP->product_name,36)}}</a> </div>
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
                                                                <div class="price-box"><span class="regular-price"><span class="price">{{$relatedP->product_price}}</span> </span> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end related product -->

                    </div>
                    <!-- end related product -->
                </div>
                <!--box-additional-->
                <!--product-view-->
            </div>
        </div>
        <!--col-main-->
    </div>

</div>
@endsection

@section('fontend_js')
<script src="{{asset('frontend/')}}/js/cloud-zoom.js"></script>
@endsection