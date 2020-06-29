@extends('layouts.admin_layouts.admin_layout')
@section('admin_title','Category');
@section('content')

<div class="content">
            <div class="content-header">
                <div class="leftside-content-header">
                    <ul class="breadcrumbs">
                        <li><i class="fa fa-table" aria-hidden="true"></i><a href="#">Category</a></li>
                        <li><a>Category List</a></li>
                    </ul>
                </div>
            </div>

            <div class="row animated fadeInRight">
                    <div class="col-sm-12">
                        <h4 style="background: white;padding: 13px;border-radius: 3px;margin-bottom: 1px;" class="section-subtitle"><b>Category</b>
                        <a href="{{ url('admin/add-edit-category')}}" class="btn btn-sm btn-success pull-right" style="margin-top:-6px;">Add Category</a>
                        </h4>
                        
                        <div class="panel">
                            <div class="panel-content">
                                <table id="responsive-table" class="data-table table table-striped table-hover table-bordered responsive nowrap" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Category Name</th>
                                        <th>Section</th>
                                        <th>Slug</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($categoris as $key => $category)
                                    
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $category->category_name }}</td>
                                        <td>{{ $category->section->name }}</td>
                                        <td>{{ $category->slug }}</td>
                                        <td>@if($category->status ==1)
                                            <a class="categoryUpdateStatus" href="javascript:void(0)" id="category-{{$category->id}}" category_id="{{$category->id}}">Active</a>
                                            @else
                                            <a class="categoryUpdateStatus" href="javascript:void(0)" id="category-{{$category->id}}" category_id="{{$category->id}}">Inactive</a>
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
