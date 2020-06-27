@extends('layouts.admin_layouts.admin_layout')
@section('admin_title','Slider');
@section('content')

<div class="content">
            <div class="content-header">
                <div class="leftside-content-header">
                    <ul class="breadcrumbs">
                        <li><i class="fa fa-table" aria-hidden="true"></i><a href="#">Slider</a></li>
                        <li><a>Slider</a></li>
                    </ul>
                </div>
            </div>

            <div class="row animated fadeInRight">
                    <div class="col-sm-12">
                        <h4 style="background: white;padding: 13px;border-radius: 3px;margin-bottom: 1px;" class="section-subtitle"><b>Slider</b>
                        <a href="{{ url('admin/slider-add')}}" class="btn btn-sm btn-success pull-right" style="margin-top:-6px;">Add Slider</a>
                        </h4>
                        
                        <div class="panel">
                            <div class="panel-content">
                                <table id="responsive-table" class="data-table table table-striped table-hover table-bordered responsive nowrap" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Slider Name</th>
                                        <th>Category</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($sliders as $slider)
                                    <tr>
                                        <td>{{$slider->slide_name}}</td>
                                        <td>{{$slider->slide_name}}</td>
                                        <td>{{$slider->category->category_name}}</td>
                                        <td>{{$slider->slide_name}}</td>
                                        <td>@if($slider->status ==1)
                                            <a class="sliderUpdateStatus" href="javascript:void(0)" id="slider-{{$slider->id}}" slider_id="{{$slider->id}}">Active</a>
                                            @else
                                            <a class="sliderUpdateStatus" href="javascript:void(0)" id="slider-{{$slider->id}}" slider_id="{{$slider->id}}">Inactive</a>
                                            @endif
                                        </td>
                                        <td>
                                            <a href=""><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
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
