@extends('layouts.admin_layouts.admin_layout')
@section('content')

<div class="content">
    <!-- content HEADER -->
    <!-- ========================================================= -->
    <div class="content-header">
        <!-- leftside content header -->
        <div class="leftside-content-header">
            <ul class="breadcrumbs">
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="#">Dashboard</a></li>
            </ul>
        </div>
    </div>
    <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
    <div class="row animated fadeInUp">
        <div class="col-sm-12 col-lg-9">
            <div class="row">
                <div class="col-sm-12 col-md-12">

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="panel widgetbox wbox-2 bg-darker-2 color-light">
                                <a href="#">
                                    <div class="panel-content">
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <span class="icon color-lighter-1"><i class="fa fa-archive" aria-hidden="true"></i></span>
                                            </div>
                                            <div class="col-xs-8">
                                                <h4 class="subtitle color-lighter-1">Total Active Product</h4>
                                                <h1 class="title color-light">
                                                    @if(!empty($products))
                                                        {{$products->count('id')}}
                                                    @endif
                                                </h1>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="panel widgetbox wbox-2 bg-darker-2 color-light">
                                <a href="#">
                                    <div class="panel-content">
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <span class="icon color-lighter-1"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                                            </div>
                                            <div class="col-xs-8">
                                                <h4 class="subtitle color-lighter-1">Active Category</h4>
                                                <h1 class="title color-light">
                                                    @if(!empty($categories))
                                                        {{$categories->where('status',1)->count('id')}}
                                                    @endif
                                                </h1>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="panel widgetbox wbox-2 bg-darker-2 color-light">
                                <a href="#">
                                    <div class="panel-content">
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <span class="icon color-lighter-1"><i class="fa fa-shopping-basket" aria-hidden="true"></i></span>
                                            </div>
                                            <div class="col-xs-8">
                                                <h4 class="subtitle color-lighter-1">Active Sub-Category</h4>
                                                <h1 class="title color-light">
                                                    @if(!empty($subcategories))
                                                        {{$subcategories->where('subcategory_status',1)->count('id')}}
                                                    @endif
                                                </h1>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="panel widgetbox wbox-2 bg-darker-2 color-light">
                                <a href="#">
                                    <div class="panel-content">
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <span class="icon color-lighter-1"><i class="fa fa-user"></i></span>
                                            </div>
                                            <div class="col-xs-8">
                                                <h4 class="subtitle color-lighter-1">Total Users</h4>
                                                <h1 class="title color-light">
                                                    @if(!empty($users))
                                                        {{$users->count('id')}}
                                                    @endif
                                                </h1>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="panel widgetbox wbox-2 bg-darker-2 color-light">
                                <a href="#">
                                    <div class="panel-content">
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <span class="icon color-lighter-1"><i class="fa fa-users" aria-hidden="true"></i></span>
                                            </div>
                                            <div class="col-xs-8">
                                                <h4 class="subtitle color-lighter-1">Total Customers</h4>
                                                <h1 class="title color-light">
                                                    @if(!empty($customer))
                                                        {{$customer->count('id')}}
                                                    @endif
                                                </h1>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="panel widgetbox wbox-2 bg-darker-2 color-light">
                                <a href="#">
                                    <div class="panel-content">
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <span class="icon color-lighter-1"><i class="fa fa-spinner" aria-hidden="true"></i></span>
                                            </div>
                                            <div class="col-xs-8">
                                                <h4 class="subtitle color-lighter-1">Pending Orders</h4>
                                                <h1 class="title color-light">
                                                    @if(!empty($orders))
                                                        {{$orders->where('status',0)->count('id')}}
                                                    @endif
                                                </h1>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="panel widgetbox wbox-2 bg-darker-2 color-light">
                                <a href="#">
                                    <div class="panel-content">
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <span class="icon color-lighter-1"><i class="fa fa-check" aria-hidden="true"></i></span>
                                            </div>
                                            <div class="col-xs-8">
                                                <h4 class="subtitle color-lighter-1">Delevered Orders</h4>
                                                <h1 class="title color-light">
                                                    @if(!empty($orders))
                                                        {{$orders->where('status',1)->count('id')}}
                                                    @endif
                                                </h1>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="panel widgetbox wbox-2 bg-darker-2 color-light">
                                <a href="#">
                                    <div class="panel-content">
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <span class="icon fa fa-envelope color-lighter-1"></span>
                                            </div>
                                            <div class="col-xs-8">
                                                <h4 class="subtitle color-lighter-1">Total Reviews</h4>
                                                <h1 class="title color-light">
                                                    @if(!empty($reviews))
                                                        {{$reviews->count('id')}}
                                                    @endif
                                                </h1>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                </div>

            <div class="col-sm-12 col-md-12">
                    <div class="tabs mt-none">
                        <!-- Tabs Header -->
                        <ul class="nav nav-tabs nav-justified">
                            <li class="active"><a href="#home" data-toggle="tab">Recent Orders</a></li>
                            <li><a href="#profile" data-toggle="tab">Recent Orders Delevered</a></li>
                            <!-- <li><a href="#messages" data-toggle="tab">Messages</a></li>
                            <li><a href="#settings" data-toggle="tab"><i class="fa fa-cog" aria-hidden="true"></i> Settings</a></li> -->
                        </ul>
                        <!-- Tabs Content -->
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="home">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>Customer Name</th>
                                                <th>Payment By</th>
                                                <th>Total</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($orders->where('status',0)->take(10) as $key =>$order)
                                            <tr>
                                                <td>{{$key +1}}</td>
                                                <td>{{$order->user->name}}</td>
                                                <td>{{$order->payment->payment_method}}</td>
                                                <td>{{$order->order_total}}</td>
                                                <td><a href="{{url('admin/order-details/'.$order->id)}}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile">
                            <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>Customer Name</th>
                                                <th>Payment By</th>
                                                <th>Total</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($orders->where('status',1)->take(10) as $key =>$order)
                                            <tr>
                                                <td>{{$key +1}}</td>
                                                <td>{{$order->user->name}}</td>
                                                <td>{{$order->payment->payment_method}}</td>
                                                <td>{{$order->order_total}}</td>
                                                <td><a href="{{url('admin/order-details/'.$order->id)}}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="messages">
                                <p><b>Message</b> content</p>
                                <p>Lorem 
                                </p>
                            </div>
                            <div class="tab-pane fade" id="settings">
                                <p><b>Settings</b> content</p>
                                <p>Lorem ipsum 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
        </div>
        <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
        <!--TIMELINE left-->
        <div class="col-sm-12 col-lg-3">
            <div class="timeline">
                @foreach($reviews->take(6) as $review)
                <div class="timeline-box">
                    <div class="timeline-icon bg-primary">
                        <img src="{{asset($review->preview->main_image)}}" style="width: 120%;border-radius: inherit;">
                    </div>
                    <div class="timeline-content">
                        <a href="{{url('product-view',$review->preview->id)}}" target="blanck" ><h4 class="tl-title">{{$review->name}}</h4></a> 
                        {{$review->review}}
                    </div>
                    <div class="timeline-footer">
                        <span>{{$review->created_at->diffForHumans()}}</span>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
</div>

@endsection