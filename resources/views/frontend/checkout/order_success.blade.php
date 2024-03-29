@extends('frontend.layout.frontend_layout')
@section('frontend_title','Customer Deshboard')
@section('front_section')

<div class="page-heading">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="page-title">
                    <h2>Dashboard</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- BEGIN Main Container col2-right -->
<section class="main-container col2-right-layout">
    <div class="main container">
        <div class="row">
            <section class="col-main col-sm-9 col-xs-12 wow bounceInUp animated animated" style="visibility: visible;">
                <div class="my-account">

                    <!--page-title-->
                    <!-- BEGIN DASHBOARD-->
                    <?php $message = Session::get('order_success'); ?>
                    <div class="dashboard">
                        @if($message)
                        <div class="welcome-msg">
                            <p class="hello" style="color:green;"><strong>{{$message}}</strong></p>
                        </div>
                        @endif
                        <div class="recent-orders">
                            <div class="title-buttons"> <strong>Recent Orders</strong> <a href="#">View All</a> </div>
                            <div class="table-responsive">
                                <table class="data-table table-striped" id="my-orders-table">
                                    <colgroup>
                                        <col width="">
                                        <col width="">
                                        <col>
                                        <col width="1">
                                        <col width="1">
                                        <col width="20%">
                                    </colgroup>
                                    <thead>
                                        <tr class="first last">
                                            <th>Order No # </th>
                                            <th>Date</th>
                                            <th>Ship To</th>
                                            <th><span class="nobr">Order Total</span></th>
                                            <th>Status</th>
                                            <th>&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($orders as $order)
                                        <tr class="first odd">
                                            <td>{{$order->id}}</td>
                                            <td><span class="nobr">{{$order->created_at}}</span></td>
                                            <td>{{$order->shipping->name}}</td>
                                            <td><span class="price">{{$order->total}}</span></td>
                                            <td><em>{{$order->total == 1?'Delivered':'Pending'}}</em></td>
                                            <td class="a-center last"><span class="nobr"> <a href="#">View Order</a> </span></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!--table-responsive-->
                        </div>
                       
                    </div>
                </div>
            </section>
            <!--col-main col-sm-9 wow bounceInUp animated-->
            <aside class="col-right sidebar col-sm-3 col-xs-12 wow bounceInUp animated animated" style="visibility: visible;">
                <div class="block block-account">
                    <div class="block-title"> My Account </div>
                    <div class="block-content">
                        <ul>
                            <li class="current"><a>Account Dashboard</a></li>
                            <li><a href="#"><span> Account Information</span></a></li>
                            <li><a href="#"><span> Address Book</span></a></li>
                            <li><a href="#"><span> My Orders</span></a></li>
                            <li><a href="#"><span> Billing Agreements</span></a></li>
                            <li><a href="#"><span> Recurring Profiles</span></a></li>
                            <li><a href="#"><span> My Product Reviews</span></a></li>
                            <li><a href="#"><span> My Wishlist</span></a></li>
                            <li><a href="#"><span> My Applications</span></a></li>
                            <li><a href="#"><span> Newsletter Subscriptions</span></a></li>
                            <li class="last"><a href="#"><span> My Downloadable Products</span></a></li>
                        </ul>
                    </div>
                    <!--block-content-->
                </div>
                <!--block block-account-->

                <div class="custom-slider">
                    <div>
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li class="active" data-target="#carousel-example-generic" data-slide-to="0"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active"><img src="images/slide3.jpg" alt="slide3">
                                    <div class="carousel-caption">
                                        <h3><a title=" Sample Product" href="#">50% OFF</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        <a class="link" href="#">Buy Now</a>
                                    </div>
                                </div>
                                <div class="item"><img src="images/slide1.jpg" alt="slide1">
                                    <div class="carousel-caption">
                                        <h3><a title=" Sample Product" href="#">Hot collection</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                                <div class="item"><img src="images/slide2.jpg" alt="slide2">
                                    <div class="carousel-caption">
                                        <h3><a title=" Sample Product" href="#">Summer collection</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </div>
                            <a class="left carousel-control" href="#" data-slide="prev"> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#" data-slide="next"> <span class="sr-only">Next</span> </a>
                        </div>
                    </div>
                </div>
            </aside>
            <!--col-right sidebar col-sm-3 wow bounceInUp animated-->
        </div>
        <!--row-->
    </div>
    <!--main container-->
</section>

@endsection

@section('fontend_js')
<script src="{{asset('frontend/')}}/js/cloud-zoom.js"></script>
@endsection