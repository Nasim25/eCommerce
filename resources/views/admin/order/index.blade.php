@extends('layouts.admin_layouts.admin_layout')
@section('admin_title','Order');
@section('content')

<div class="content">
            <div class="content-header">
                <div class="leftside-content-header">
                    <ul class="breadcrumbs">
                        <li><i class="fa fa-table" aria-hidden="true"></i><a href="#">Order</a></li>
                        <li><a>Order List</a></li>
                    </ul>
                </div>
            </div>

            <div class="row animated fadeInRight">
                    <div class="col-sm-12">
                        <h4 style="background: white;padding: 13px;border-radius: 3px;margin-bottom: 1px;" class="section-subtitle"><b>Order</b>
                        
                        </h4>
                        
                        <div class="panel">
                            <div class="panel-content">
                                <table id="responsive-table" class="data-table table table-striped table-hover table-bordered responsive nowrap" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Customer Name</th>
                                        <th>Payment By</th>
                                        <th>Total</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($order as $key => $orders)
                                    
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{$orders->user->name}}</td>
                                        <td>{{$orders->payment->payment_method}}</td>
                                        <td>{{$orders->order_total}}</td>
                                        <td>@if($orders->status ==1)
                                            <a class="ordersUpdateStatus" href="javascript:void(0)" id="orders-{{$orders->id}}" category_id="{{$orders->id}}">Active</a>
                                            @else
                                            <a class="ordersUpdateStatus" href="javascript:void(0)" id="orders-{{$orders->id}}" category_id="{{$orders->id}}">Pending</a>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{url('admin/order-details/'.$orders->id)}}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a href=""><i style="color:red;" class="fa fa-trash" aria-hidden="true"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
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
