@extends('layouts.admin_layouts.admin_layout')
@section('admin_title','Order Details');
@section('content')

<div class="content">
            <!-- content HEADER -->
            <!-- ========================================================= -->
            <div class="content-header">
                <!-- leftside content header -->
                <div class="leftside-content-header">
                    <ul class="breadcrumbs">
                        <li><i class="fa fa-columns" aria-hidden="true"></i><a href="#">Order</a></li>
                        <li><a>Order Details</a></li>
                    </ul>
                </div>
            </div>
            <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
            <div class="row animated fadeInUp">
                <!--BASIC-->
                <div class="col-sm-12 col-md-6">
                    <h4 class="section-subtitle">Customer Information</h4>
                    <div class="panel">
                        <div class="panel-content">
                            <div class="row">
                                <div class="col-md-12">
                                <table class="table table-bordered">
                                    
                                    <tbody>
                                        <tr>
                                        <th scope="row">Name</th>
                                        <td>{{ $order->user->name}}</td>
                                        </tr>
                                        <tr>
                                        <th scope="row">Mobile</th>
                                        <td>{{ $order->user->mobile}}</td>
                                        </tr>
                                        <tr>
                                        <th scope="row">Email</th>
                                        <td>{{ $order->user->email}}</td>
                                        </tr>
                                        <tr>
                                        <th scope="row">Address</th>
                                        <td>{{ $order->user->address}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
                <!--HORIZONTAL-->
                <div class="col-sm-12 col-md-6">
                    <h4 class="section-subtitle">Shipping Information</h4>
                    <div class="panel">
                        <div class="panel-content">
                            <div class="row">
                                <div class="col-md-12">
                                <table class="table table-bordered">
                                
                                    <tbody>
                                        <tr>
                                            <th scope="row">Name</th>
                                            <td>{{$order->shipping->name}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Mobile</th>
                                            <td>{{$order->shipping->phone}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Alternate Mobile</th>
                                            <td>{{$order->shipping->alternet_phone}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Email</th>
                                            <td>{{$order->shipping->email}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">District</th>
                                            <td>{{$order->shipping->districts}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">State</th>
                                            <td>{{$order->shipping->state}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Address</th>
                                            <td>{{$order->shipping->address}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--STRIPE-->
                <div class="col-md-12">
                    <h4 class="section-subtitle">Product Details</h4>
                    <div class="panel">
                        <div class="panel-content">
                            <div class="row">
                                <div class="col-sm-12">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Code</th>
                                        <th scope="col">Color</th>
                                        <th scope="col">Size</th>
                                        <th scope="col">QTY</th>
                                        <th scope="col">Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($orderDetails as $orderDtail)
                                        <tr>
                                        <th scope="row">1</th>
                                        <td>{{$orderDtail->product->product_code}}</td>
                                        <td>{{$orderDtail->color_id}}</td>
                                        <td>{{$orderDtail->size}}</td>
                                        <td>{{$orderDtail->quantity}}</td>
                                            <?php $productprice = $orderDtail->product->price * $orderDtail->quantity; ?>
                                        <td>{{ $productprice }}</td>
                                        </tr>
                                    @endforeach
                                        <tr>
                                            <th colspan="5">Grand Total</th>
                                            <td>{{$order->order_total}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
           
        </div>

@endsection

@section('admin_css')

    <link rel="stylesheet" href="{{asset('admin')}}/vendor/data-table/media/css/dataTables.bootstrap.min.css">
@endsection
@section('admin_js')
    <script src="{{asset('admin')}}/vendor/jquery/jquery-1.12.3.min.js"></script>
    <script src="{{asset('admin')}}/vendor/data-table/media/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('admin')}}/vendor/data-table/media/js/dataTables.bootstrap.min.js"></script>
    <script src="{{asset('admin')}}/javascripts/examples/tables/data-tables.js"></script>
@endsection
