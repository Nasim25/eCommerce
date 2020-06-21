@extends('layouts.admin_layouts.admin_layout')
@section('admin_title','Section List');
@section('content')

<div class="content">
            <div class="content-header">
                <div class="leftside-content-header">
                    <ul class="breadcrumbs">
                        <li><i class="fa fa-table" aria-hidden="true"></i><a href="#">Catalogues</a></li>
                        <li><a>Product List</a></li>
                    </ul>
                </div>
            </div>

            <div class="row animated fadeInRight">
                    <div class="col-sm-12">
                        <h4 style="background: white;padding: 13px;border-radius: 3px;margin-bottom: 1px;" class="section-subtitle"><b>Product</b>
                        <a href="{{ url('admin/add-edit-product')}}" class="btn btn-sm btn-success pull-right" style="margin-top:-6px;">Add Product</a>
                        </h4>
                        </h4>
                        <div class="panel">
                            <div class="panel-content">
                                <table id="responsive-table" class="data-table table table-striped table-hover table-bordered responsive nowrap" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Product Name</th>
                                        <th>Product Code</th>
                                        <th>Product Color</th>
                                        <th>Product Image</th>
                                        <th>Category</th>
                                        <th>Section</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($products as $key => $product)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $product->product_name }}</td>
                                        <td>{{ $product->product_code }}</td>
                                        <td>{{ $product->product_color }}</td>
                                        <td>
                                        <center><img src="{{ asset($product->main_image) }}" style="width:100px;height:100px;" /></center></td>
                                        <td>{{ $product->category->category_name }}</td>
                                        <td>{{ $product->section->name }}</td>
                                        <td>@if($product->status ==1)
                                            <a class="productUpdateStatus" href="javascript:void(0)" id="product-{{$product->id}}" product_id="{{$product->id}}">Active</a>
                                            @else
                                            <a class="productUpdateStatus" href="javascript:void(0)" id="product-{{$product->id}}" product_id="{{$product->id}}">Inactive</a>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{url('admin/add-attributes/'.$product->id)}}"><i class="fa fa-plus" aria-hidden="true"></i></a>
                                            <a href=""><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                            <a href=""><i class="fa fa-image"></i></a>
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
