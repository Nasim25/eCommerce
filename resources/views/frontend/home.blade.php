@extends('frontend.layout.frontend_layout')
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
                <h2>Deals of the Week</h2>
                <div class="box-timer">
                    <div class="countbox_1 timer-grid"></div>
                </div>
                </div>
                
                <div id="hot_deals" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col4 products-grid">
                    <div class="item">
                    <div class="item-inner">
                        <div class="item-img">
                        <div class="item-img-info"><a href="accessories-detail.html" title="Retis lapen casen" class="product-image"><img src="{{asset('frontend/')}}/products-images/p1.jpg" alt="Retis lapen casen"></a>
                            <div class="new-label new-top-left">Used</div>
                            <div class="sale-label sale-top-left">-15%</div>
                            <div class="item-box-hover">
                            <div class="box-inner">
                                <div class="add_cart">
                                <button class="button btn-cart" type="button"></button>
                                </div>
                                <div class="product-detail-bnt"><a class="button detail-bnt"><span>Quick View</span></a></div>
                                <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> </span> </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="item-info">
                        <div class="info-inner">
                            <div class="item-title"><a href="accessories-detail.html" title="Retis lapen casen">Gorgeous Mercedes-Benz E-Class All-Terrain Luxury</a> </div>
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
                                <div class="price-box"><span class="regular-price"><span class="price">$49000.00</span> </span> </div>
                            </div>
                            <div class="other-info">
                                <div class="col-km"><i class="fa fa-tachometer"></i> 4875km</div>
                                <div class="col-engine"><i class="fa fa-gear"></i> Automatic</div>
                                <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> 2018</div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    
                    <!-- Item -->
                    <div class="item">
                    <div class="item-inner">
                        <div class="item-img">
                        <div class="item-img-info"><a href="accessories-detail.html" title="Retis lapen casen" class="product-image"><img src="{{asset('frontend/')}}/products-images/p2.jpg" alt="Retis lapen casen"></a>
                            <div class="item-box-hover">
                            <div class="box-inner">
                                <div class="add_cart">
                                <button class="button btn-cart" type="button"></button>
                                </div>
                                <div class="product-detail-bnt"><a class="button detail-bnt"><span>Quick View</span></a></div>
                                <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> </span> </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="item-info">
                        <div class="info-inner">
                            <div class="item-title"><a href="accessories-detail.html" title="Retis lapen casen">Gorgeous Mercedes-Benz E-Class All-Terrain Luxury</a> </div>
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
                                <div class="price-box"><span class="regular-price"><span class="price">$39000.00</span> </span> </div>
                            </div>
                            <div class="other-info">
                                <div class="col-km"><i class="fa fa-tachometer"></i> 847km</div>
                                <div class="col-engine"><i class="fa fa-gear"></i> Manual</div>
                                <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> 2018</div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <!-- End Item --> 
                    
                    <!-- Item -->
                    <div class="item">
                    <div class="item-inner">
                        <div class="item-img">
                        <div class="item-img-info"> <a href="accessories-detail.html" title="Retis lapen casen" class="product-image"><img src="{{asset('frontend/')}}/products-images/p3.jpg" alt="Retis lapen casen"></a>
                            <div class="item-box-hover">
                            <div class="box-inner">
                                <div class="add_cart">
                                <button class="button btn-cart" type="button"></button>
                                </div>
                                <div class="product-detail-bnt"><a class="button detail-bnt"><span>Quick View</span></a></div>
                                <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> </span> </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="item-info">
                        <div class="info-inner">
                            <div class="item-title"><a href="accessories-detail.html" title="Retis lapen casen">Gorgeous Mercedes-Benz E-Class All-Terrain Luxury</a> </div>
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
                                <div class="price-box"><span class="regular-price"><span class="price">$99000.00</span> </span> </div>
                            </div>
                            <div class="other-info">
                                <div class="col-km"><i class="fa fa-tachometer"></i>687km</div>
                                <div class="col-engine"><i class="fa fa-gear"></i> Manual</div>
                                <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> 2019</div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <!-- End Item -->
                    
                    <div class="item">
                    <div class="item-inner">
                        <div class="item-img">
                        <div class="item-img-info"><a href="accessories-detail.html" title="Retis lapen casen" class="product-image"><img src="{{asset('frontend/')}}/products-images/p12.jpg" alt="Retis lapen casen"></a>
                            <div class="item-box-hover">
                            <div class="box-inner">
                                <div class="add_cart">
                                <button class="button btn-cart" type="button"></button>
                                </div>
                                <div class="product-detail-bnt"><a class="button detail-bnt"><span>Quick View</span></a></div>
                                <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> </span> </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="item-info">
                        <div class="info-inner">
                            <div class="item-title"><a href="accessories-detail.html" title="Retis lapen casen">Gorgeous Mercedes-Benz E-Class All-Terrain Luxury</a> </div>
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
                                <div class="price-box"><span class="regular-price"><span class="price">$59000.00</span> </span> </div>
                            </div>
                            <div class="other-info">
                                <div class="col-km"><i class="fa fa-tachometer"></i> 10587km</div>
                                <div class="col-engine"><i class="fa fa-gear"></i> Manual</div>
                                <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> 2017</div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    
                    <!-- Item -->
                    <div class="item">
                    <div class="item-inner">
                        <div class="item-img">
                        <div class="item-img-info"><a href="accessories-detail.html" title="Retis lapen casen" class="product-image"><img src="{{asset('frontend/')}}/products-images/p8.jpg" alt="Retis lapen casen"></a>
                            <div class="new-label new-top-left">New</div>
                            <div class="item-box-hover">
                            <div class="box-inner">
                                <div class="add_cart">
                                <button class="button btn-cart" type="button"></button>
                                </div>
                                <div class="product-detail-bnt"><a class="button detail-bnt"><span>Quick View</span></a></div>
                                <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> </span> </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="item-info">
                        <div class="info-inner">
                            <div class="item-title"><a href="accessories-detail.html" title="Retis lapen casen">Gorgeous Mercedes-Benz E-Class All-Terrain Luxury</a> </div>
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
                                <div class="price-box"><span class="regular-price"><span class="price">$47000.00</span> </span> </div>
                            </div>
                            <div class="other-info">
                                <div class="col-km"><i class="fa fa-tachometer"></i> 0km</div>
                                <div class="col-engine"><i class="fa fa-gear"></i> Manual</div>
                                <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> 2019</div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <!-- End Item --> 
                    
                    <!-- Item -->
                    <div class="item">
                    <div class="item-inner">
                        <div class="item-img">
                        <div class="item-img-info"><a href="accessories-detail.html" title="Retis lapen casen" class="product-image"><img src="{{asset('frontend/')}}/products-images/p6.jpg" alt="Retis lapen casen"></a>
                            <div class="new-label new-top-left">New</div>
                            <div class="item-box-hover">
                            <div class="box-inner">
                                <div class="add_cart">
                                <button class="button btn-cart" type="button"></button>
                                </div>
                                <div class="product-detail-bnt"><a class="button detail-bnt"><span>Quick View</span></a></div>
                                <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> </span> </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="item-info">
                        <div class="info-inner">
                            <div class="item-title"><a href="accessories-detail.html" title="Retis lapen casen">Gorgeous Mercedes-Benz E-Class All-Terrain Luxury</a> </div>
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
                                <div class="price-box"><span class="regular-price"><span class="price">$67000.00</span> </span> </div>
                            </div>
                            <div class="other-info">
                                <div class="col-km"><i class="fa fa-tachometer"></i> 847km</div>
                                <div class="col-engine"><i class="fa fa-gear"></i> Semi</div>
                                <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> 2016</div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <!-- End Item --> 
                </div>
                </div>
            </div>
        </section>
        <!-- Logo Brand Block -->
        <div class="brand-logo wow bounceInUp animated">
            <div class="container">
                <div class="row">
                <div class="home-banner col-lg-2 hidden-md col-xs-12 hidden-sm"> </div>
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <div class="testimonials-section">
                    <div class="offer-slider parallax parallax-2">
                        <ul class="bxslider">
                        <li>
                            <div class="avatar"><img src="{{asset('frontend/')}}/images/member1.png" alt="Image"></div>
                            <div class="testimonials">Perfect Themes and the best of all that you have many options to choose! Very fast responding! I highly recommend this theme and these people!</div>
                            <div class="clients_author">Smith John <span>Happy Customer</span> </div>
                        </li>
                        <li>
                            <div class="avatar"><img src="{{asset('frontend/')}}/images/member2.png" alt="Image"></div>
                            <div class="testimonials">Code, template and others are very good. The support has served me immediately and solved my problems when I need help. Are to be congratulated.</div>
                            <div class="clients_author">Sahara Anderson <span>Happy Customer</span> </div>
                        </li>
                        <li>
                            <div class="avatar"><img src="{{asset('frontend/')}}/images/member3.png" alt="Image"></div>
                            <div class="testimonials">Our support and response has been amazing, helping me with several issues I came across and got them solved almost the same day. A pleasure to work with them! </div>
                            <div class="clients_author">Stephen Smith <span>Happy Customer</span> </div>
                        </li>
                        </ul>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <!-- best Pro Slider -->
        <section class=" wow bounceInUp animated">
            <div class="best-pro slider-items-products container">
            <div class="new_title">
                <h2>Best Seller Cars</h2>
            </div>
            <div id="best-seller" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col4 products-grid">
                <div class="item">
                    <div class="item-inner">
                    <div class="item-img">
                        <div class="item-img-info"><a href="accessories-detail.html" title="Retis lapen casen" class="product-image"><img src="{{asset('frontend/')}}/products-images/p13.jpg" alt="Retis lapen casen"></a>
                        <div class="new-label new-top-left">Hot</div>
                        <div class="sale-label sale-top-left">-15%</div>
                        <div class="item-box-hover">
                            <div class="box-inner">
                            <div class="add_cart">
                                <button class="button btn-cart" type="button"></button>
                            </div>
                            <div class="product-detail-bnt"><a class="button detail-bnt"><span>Quick View</span></a></div>
                            <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> </span> </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="item-info">
                        <div class="info-inner">
                        <div class="item-title"><a href="accessories-detail.html" title="Retis lapen casen">Gorgeous Mercedes-Benz E-Class All-Terrain Luxury</a> </div>
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
                            <div class="price-box"><span class="regular-price"><span class="price">$49000.00</span> </span> </div>
                            </div>
                            <div class="other-info">
                            <div class="col-km"><i class="fa fa-tachometer"></i> 4875km</div>
                            <div class="col-engine"><i class="fa fa-gear"></i> Automatic</div>
                            <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> 2018</div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                
                <!-- Item -->
                <div class="item">
                    <div class="item-inner">
                    <div class="item-img">
                        <div class="item-img-info"><a href="accessories-detail.html" title="Retis lapen casen" class="product-image"><img src="{{asset('frontend/')}}/products-images/p14.jpg" alt="Retis lapen casen"></a>
                        <div class="item-box-hover">
                            <div class="box-inner">
                            <div class="add_cart">
                                <button class="button btn-cart" type="button"></button>
                            </div>
                            <div class="product-detail-bnt"><a class="button detail-bnt"><span>Quick View</span></a></div>
                            <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> </span> </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="item-info">
                        <div class="info-inner">
                        <div class="item-title"><a href="accessories-detail.html" title="Retis lapen casen">Gorgeous Mercedes-Benz E-Class All-Terrain Luxury</a> </div>
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
                            <div class="price-box"><span class="regular-price"><span class="price">$39000.00</span> </span> </div>
                            </div>
                            <div class="other-info">
                            <div class="col-km"><i class="fa fa-tachometer"></i> 847km</div>
                            <div class="col-engine"><i class="fa fa-gear"></i> Manual</div>
                            <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> 2018</div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- End Item --> 
                
                <!-- Item -->
                <div class="item">
                    <div class="item-inner">
                    <div class="item-img">
                        <div class="item-img-info"> <a href="accessories-detail.html" title="Retis lapen casen" class="product-image"><img src="{{asset('frontend/')}}/products-images/p15.jpg" alt="Retis lapen casen"></a>
                        <div class="item-box-hover">
                            <div class="box-inner">
                            <div class="add_cart">
                                <button class="button btn-cart" type="button"></button>
                            </div>
                            <div class="product-detail-bnt"><a class="button detail-bnt"><span>Quick View</span></a></div>
                            <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> </span> </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="item-info">
                        <div class="info-inner">
                        <div class="item-title"><a href="accessories-detail.html" title="Retis lapen casen">Gorgeous Mercedes-Benz E-Class All-Terrain Luxury</a> </div>
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
                            <div class="price-box"><span class="regular-price"><span class="price">$99000.00</span> </span> </div>
                            </div>
                            <div class="other-info">
                            <div class="col-km"><i class="fa fa-tachometer"></i>687km</div>
                            <div class="col-engine"><i class="fa fa-gear"></i> Manual</div>
                            <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> 2019</div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- End Item -->
                
                <div class="item">
                    <div class="item-inner">
                    <div class="item-img">
                        <div class="item-img-info"><a href="accessories-detail.html" title="Retis lapen casen" class="product-image"><img src="{{asset('frontend/')}}/products-images/p16.jpg" alt="Retis lapen casen"></a>
                        <div class="item-box-hover">
                            <div class="box-inner">
                            <div class="add_cart">
                                <button class="button btn-cart" type="button"></button>
                            </div>
                            <div class="product-detail-bnt"><a class="button detail-bnt"><span>Quick View</span></a></div>
                            <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> </span> </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="item-info">
                        <div class="info-inner">
                        <div class="item-title"><a href="accessories-detail.html" title="Retis lapen casen">Gorgeous Mercedes-Benz E-Class All-Terrain Luxury</a> </div>
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
                            <div class="price-box"><span class="regular-price"><span class="price">$59000.00</span> </span> </div>
                            </div>
                            <div class="other-info">
                            <div class="col-km"><i class="fa fa-tachometer"></i> 10587km</div>
                            <div class="col-engine"><i class="fa fa-gear"></i> Manual</div>
                            <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> 2017</div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                
                <!-- Item -->
                <div class="item">
                    <div class="item-inner">
                    <div class="item-img">
                        <div class="item-img-info"><a href="accessories-detail.html" title="Retis lapen casen" class="product-image"><img src="{{asset('frontend/')}}/products-images/p17.jpg" alt="Retis lapen casen"></a>
                        <div class="new-label new-top-left">New</div>
                        <div class="item-box-hover">
                            <div class="box-inner">
                            <div class="add_cart">
                                <button class="button btn-cart" type="button"></button>
                            </div>
                            <div class="product-detail-bnt"><a class="button detail-bnt"><span>Quick View</span></a></div>
                            <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> </span> </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="item-info">
                        <div class="info-inner">
                        <div class="item-title"><a href="accessories-detail.html" title="Retis lapen casen">Gorgeous Mercedes-Benz E-Class All-Terrain Luxury</a> </div>
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
                            <div class="price-box"><span class="regular-price"><span class="price">$47000.00</span> </span> </div>
                            </div>
                            <div class="other-info">
                            <div class="col-km"><i class="fa fa-tachometer"></i> 0km</div>
                            <div class="col-engine"><i class="fa fa-gear"></i> Manual</div>
                            <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> 2019</div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- End Item --> 
                
                <!-- Item -->
                <div class="item">
                    <div class="item-inner">
                    <div class="item-img">
                        <div class="item-img-info"><a href="accessories-detail.html" title="Retis lapen casen" class="product-image"><img src="{{asset('frontend/')}}/products-images/p18.jpg" alt="Retis lapen casen"></a>
                        <div class="new-label new-top-left">New</div>
                        <div class="item-box-hover">
                            <div class="box-inner">
                            <div class="add_cart">
                                <button class="button btn-cart" type="button"></button>
                            </div>
                            <div class="product-detail-bnt"><a class="button detail-bnt"><span>Quick View</span></a></div>
                            <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> </span> </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="item-info">
                        <div class="info-inner">
                        <div class="item-title"><a href="accessories-detail.html" title="Retis lapen casen">Gorgeous Mercedes-Benz E-Class All-Terrain Luxury</a> </div>
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
                            <div class="price-box"><span class="regular-price"><span class="price">$67000.00</span> </span> </div>
                            </div>
                            <div class="other-info">
                            <div class="col-km"><i class="fa fa-tachometer"></i> 847km</div>
                            <div class="col-engine"><i class="fa fa-gear"></i> Semi</div>
                            <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> 2016</div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- End Item --> 
                </div>
            </div>
            </div>
        </section>
        <!-- Home Lastest Blog Block -->
        <div class="latest-blog wow bounceInUp animated animated container"> 
            <!--exclude For version 6 -->
            <div class="blog-home-inner">
            <div class="blog-title">
                <h2>Latest Blog post</h2>
            </div>
            <!--For version 1,2,3,4,5,6,8 -->
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12 col-sm-4 blog-post">
                <div class="blog_inner">
                    <div class="blog-img"> <a href="blog-detail.html"> <img src="{{asset('frontend/')}}/images/blog-img1.jpg" alt="blog image"> </a> </div>
                    <!--blog-img-->
                    <div class="blog-info">
                    <div class="post-date"> <span class="entry-date">14  Jan, 2019</span> </div>
                    <ul class="post-meta">
                        <li><i class="fa fa-user"></i>Posted by <a href="#">admin</a> </li>
                        <li><i class="fa fa-comments"></i><a href="#">4 comments</a> </li>
                    </ul>
                    <h3><a href="blog-detail.html">Powerful and flexible premium Ecommerce themes</a></h3>
                    <p>Fusce ac pharetra urna. Duis non lacus sit amet lacus interdum facilisis sed non est. Ut mi metus, semper eu dictum nec...</p>
                    </div>
                </div>
                <!--blog_inner--> 
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12 col-sm-4 blog-post">
                <div class="blog_inner">
                    <div class="blog-img"> <a href="blog-detail.html"> <img src="{{asset('frontend/')}}/images/blog-img2.jpg" alt="blog image"> </a> </div>
                    <!--blog-img-->
                    <div class="blog-info">
                    <div class="post-date"> <span class="entry-date">23  Dec, 2018</span> </div>
                    <ul class="post-meta">
                        <li><i class="fa fa-user"></i>Posted by <a href="#">admin</a> </li>
                        <li><i class="fa fa-comments"></i><a href="#">8 comments</a> </li>
                    </ul>
                    <h3><a href="blog-detail.html">Awesome template with lot's of features on the board!</a></h3>
                    <p>Aliquam laoreet consequat malesuada. Integer vitae diam sed dolor euismod laoreet eget ac felis erat sed elit bibendum ...</p>
                    </div>
                </div>
                <!--blog_inner--> 
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12 col-sm-4 blog-post">
                <div class="blog_inner">
                    <div class="blog-img"> <a href="blog-detail.html"> <img src="{{asset('frontend/')}}/images/blog-img3.jpg" alt="blog image"> </a> </div>
                    <!--blog-img-->
                    <div class="blog-info">
                    <div class="post-date"> <span class="entry-date">23  Dec, 2018</span> </div>
                    <ul class="post-meta">
                        <li><i class="fa fa-user"></i>Posted by <a href="#">admin</a> </li>
                        <li><i class="fa fa-comments"></i><a href="#">8 comments</a> </li>
                    </ul>
                    <h3><a href="blog-detail.html">Awesome template with lot's of features on the board!</a></h3>
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
                        <div class="item">
                            <div class="logo-item"><a href="#"><img src="{{asset('frontend/')}}/images/brand1.png" alt="Image"></a></div>
                        </div>
                        <div class="item">
                            <div class="logo-item"><a href="#"><img src="{{asset('frontend/')}}/images/brand2.png" alt="Image"></a></div>
                        </div>
                        <div class="item">
                            <div class="logo-item"><a href="#"><img src="{{asset('frontend/')}}/images/brand3.png" alt="Image"></a></div>
                        </div>
                        <div class="item">
                            <div class="logo-item"><a href="#"><img src="{{asset('frontend/')}}/images/brand4.png" alt="Image"></a></div>
                        </div>
                        <div class="item">
                            <div class="logo-item"><a href="#"><img src="{{asset('frontend/')}}/images/brand5.png" alt="Image"></a></div>
                        </div>
                        <div class="item">
                            <div class="logo-item"><a href="#"><img src="{{asset('frontend/')}}/images/brand6.png" alt="Image"></a></div>
                        </div>
                        <div class="item">
                            <div class="logo-item"><a href="#"><img src="{{asset('frontend/')}}/images/brand1.png" alt="Image"></a></div>
                        </div>
                        <div class="item">
                            <div class="logo-item"><a href="#"><img src="{{asset('frontend/')}}/images/brand2.png" alt="Image"></a></div>
                        </div>
                        <div class="item">
                            <div class="logo-item"><a href="#"><img src="{{asset('frontend/')}}/images/brand3.png" alt="Image"></a></div>
                        </div>
                        <div class="item">
                            <div class="logo-item"><a href="#"><img src="{{asset('frontend/')}}/images/brand4.png" alt="Image"></a></div>
                        </div>
                        <div class="item">
                            <div class="logo-item"><a href="#"><img src="{{asset('frontend/')}}/images/brand5.png" alt="Image"></a></div>
                        </div>
                        <div class="item">
                            <div class="logo-item"><a href="#"><img src="{{asset('frontend/')}}/images/brand6.png" alt="Image"></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- popup newsletter -->
        @include('frontend.layout.include.popub_newsletter')  
    </div>
@endsection