@extends('frontend.layout.frontend_layout')
@section('frontend_title','Techzone')
@section('front_section')
<div class="content">
    <!-- slider -->
    @include('frontend.layout.include.slider')
    <!--Category slider Start-->
    @include('frontend.layout.include.search_section')
    <!--Banner Ads silder End-->
    @include('frontend.layout.include.banner_ads')
    <!-- best Pro Slider -->
    <section class=" wow bounceInUp animated">
        <div class="hot_deals slider-items-products container">
            <div class="new_title">
                <h2>Deals of the Day</h2>
                <div class="box-timer">
                    <!-- <div class="countbox_1 timer-grid"></div> -->
                </div>
            </div>

            <div id="hot_deals" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col4 products-grid">
                    @foreach($products as $product)
                    <div class="item">
                        <div class="item-inner">
                            <div class="item-img">
                                <div class="item-img-info"><a href="{{url('/product-view/'.$product->id)}}" title="{{$product->product_name}}" class="product-image"><img src="{{asset($product->main_image)}}" alt="{{$product->product_name}}"></a>
                                    <!-- <div class="new-label new-top-left">Used</div>
                                <div class="sale-label sale-top-left">-15%</div> -->
                                    <!-- <div class="item-box-hover"> -->
                                    <!-- <div class="box-inner">
                                    <div class="add_cart">
                                    <button class="button btn-cart" type="button"></button>
                                    </div>
                                    <div class="product-detail-bnt"><a class="button detail-bnt"><span>Quick View</span></a></div>
                                    <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> </span> </div>
                                </div> -->
                                    <!-- </div> -->
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
                                            <div class="price-box"><span class="regular-price"><span class="price">Tk {{$product->product_price}}</span> </span> </div>
                                        </div>
                                        <!-- <div class="other-info"> -->
                                        <!-- <div class="col-km"><i class="fa fa-tachometer"></i> 4875km</div>
                                    <div class="col-engine"><i class="fa fa-gear"></i> Automatic</div>
                                    <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> 2018</div> -->
                                        <!-- </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!-- category show -->
    <section class=" wow bounceInUp animated">
        <div class="hot_deals slider-items-products container">
            <div class="new_title">
                <h2>Category </h2>
                <div class="box-timer">
                    <!-- <div class="countbox_1 timer-grid"></div> -->
                </div>
            </div>

            <div id="hot_deals" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col4 products-grid">
                    @foreach($categories as $category)
                    <div class="item">
                        <div class="item-inner">
                            <div class="item-img">
                                <div class="item-img-info"><a href="{{url('product-by-category/'.$category['slug'])}}" title="{{$category['category_name']}}" class="product-image"><img src="{{asset($category['category_image'])}}" alt="{{$category['category_name']}}"></a>

                                </div>
                            </div>
                            <div class="item-info">
                                <div class="info-inner">
                                    <div class="item-title"><a href="{{url('product-by-category/'.$category['slug'])}}" title="{{$category['category_name']}}">{{Str::limit($category['category_name'],36)}}</a> </div>
                                    <div class="item-content">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!-- end category -->

    <!-- category product show -->
    @foreach($categories as $category)
    @if(!empty($category['products']))

    <section class=" wow bounceInUp animated">
        <div class="hot_deals slider-items-products container">
            <div class="new_title">
                <h2>{{ $category['category_name'] }} </h2>
                <div class="box-timer">
                    <!-- <div class="countbox_1 timer-grid"></div> -->
                </div>
            </div>

            <div id="hot_deals" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col4 products-grid">
                    @foreach($category['products'] as $product)
                    <div class="item">
                        <div class="item-inner">
                            <div class="item-img">
                                <div class="item-img-info"><a href="{{url('/product-view/'.$product['id'])}}" title="{{$product['product_name']}}" class="product-image"><img src="{{asset($product['main_image'])}}" alt="{{$product['product_name']}}"></a>
                                    <!-- <div class="new-label new-top-left">Used</div>
                                        <div class="sale-label sale-top-left">-15%</div> -->
                                    <!-- <div class="item-box-hover"> -->
                                    <!-- <div class="box-inner"> -->
                                    <!-- <div class="add_cart">
                                            <button class="button btn-cart" type="button"></button>
                                            </div> -->
                                    <!-- <div class="product-detail-bnt"><a class="button detail-bnt"><span>Quick View</span></a></div>
                                            <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> </span> </div> -->
                                    <!-- </div>
                                        </div> -->
                                </div>
                            </div>
                            <div class="item-info">
                                <div class="info-inner">
                                    <div class="item-title"><a href="{{url('/product-view/'.$product['id'])}}" title="{{$product['product_name']}}">{{Str::limit($product['product_name'],36)}}</a> </div>
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
                                            <div class="price-box"><span class="regular-price"><span class="price">Tk {{$product['product_price']}}</span> </span> </div>
                                        </div>
                                        <!-- <div class="other-info">
                                            <div class="col-km"><i class="fa fa-tachometer"></i> 4875km</div>
                                            <div class="col-engine"><i class="fa fa-gear"></i> Automatic</div>
                                            <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> 2018</div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    @endif
    @endforeach
    
    <div class="latest-blog wow bounceInUp animated animated container">
        <div class="blog-home-inner">
            <div class="blog-title">
                <h2>Latest Blog post</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12 col-sm-4 blog-post">
                    <div class="blog_inner">
                        <div class="blog-img"> <a href="#"> <img src="{{asset('frontend/')}}/images/blog-img1.jpg" alt="blog image"> </a> </div>
                        <div class="blog-info">
                            <div class="post-date"> <span class="entry-date">14 Jan, 2019</span> </div>
                            <ul class="post-meta">
                                <li><i class="fa fa-user"></i>Posted by <a href="#">admin</a> </li>
                                <li><i class="fa fa-comments"></i><a href="#">4 comments</a> </li>
                            </ul>
                            <h3><a href="#">Powerful and flexible premium Ecommerce themes</a></h3>
                            <p>Fusce ac pharetra urna. Duis non lacus sit amet lacus interdum facilisis sed non est. Ut mi metus, semper eu dictum nec...</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12 col-sm-4 blog-post">
                    <div class="blog_inner">
                        <div class="blog-img"> <a href="#"> <img src="{{asset('frontend/')}}/images/blog-img2.jpg" alt="blog image"> </a> </div>
                        <!--blog-img-->
                        <div class="blog-info">
                            <div class="post-date"> <span class="entry-date">23 Dec, 2018</span> </div>
                            <ul class="post-meta">
                                <li><i class="fa fa-user"></i>Posted by <a href="#">admin</a> </li>
                                <li><i class="fa fa-comments"></i><a href="#">8 comments</a> </li>
                            </ul>
                            <h3><a href="#">Awesome template with lot's of features on the board!</a></h3>
                            <p>Aliquam laoreet consequat malesuada. Integer vitae diam sed dolor euismod laoreet eget ac felis erat sed elit bibendum ...</p>
                        </div>
                    </div>
                    <!--blog_inner-->
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12 col-sm-4 blog-post">
                    <div class="blog_inner">
                        <div class="blog-img"> <a href="#"> <img src="{{asset('frontend/')}}/images/blog-img3.jpg" alt="blog image"> </a> </div>
                        <!--blog-img-->
                        <div class="blog-info">
                            <div class="post-date"> <span class="entry-date">23 Dec, 2018</span> </div>
                            <ul class="post-meta">
                                <li><i class="fa fa-user"></i>Posted by <a href="#">admin</a> </li>
                                <li><i class="fa fa-comments"></i><a href="#">8 comments</a> </li>
                            </ul>
                            <h3><a href="#">Awesome template with lot's of features on the board!</a></h3>
                            <p>Aliquam laoreet consequat malesuada. Integer vitae diam sed dolor euismod laoreet eget ac felis erat sed elit bibendum ...</p>
                        </div>
                    </div>
                    <!--blog_inner-->
                </div>
            </div>
        </div>
        <!--END For version 1,2,3,4,5,6,8 -->
        <!--exclude For version 6 -->
        <!--container-->
    </div>
    <!-- logo brand -->
    <div class="logo-brand container">
        <div class="brand-title">
            <h2>Popular Brands</h2>
        </div>
        <div class="slider-items-products">
            <div id="brand-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col6">
                    @foreach($brands as $brand)
                    <div class="item">
                        <div class="logo-item"><a href="#"><img src="{{asset($brand->brand_image)}}" alt="Image"></a></div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- popup newsletter -->
    
</div>
@endsection