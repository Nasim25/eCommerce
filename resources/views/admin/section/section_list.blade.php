@extends('layouts.admin_layouts.admin_layout')
@section('admin_title','Section List');
@section('content')

<div class="content">
            <div class="content-header">
                <div class="leftside-content-header">
                    <ul class="breadcrumbs">
                        <li><i class="fa fa-table" aria-hidden="true"></i><a href="#">Section</a></li>
                        <li><a>Section List</a></li>
                    </ul>
                </div>
            </div>

            <div class="row animated fadeInRight">
                    <div class="col-sm-12">
                        <h4 style="background: white;padding: 13px;border-radius: 3px;margin-bottom: 1px;" class="section-subtitle"><b>Section</b>
                        <a href="{{ url('admin/section-add')}}" class="btn btn-sm btn-success pull-right" style="margin-top:-6px;">Add Section</a>
                    </h4>
                        <div class="panel">
                            <div class="panel-content">
                                <table id="responsive-table" class="data-table table table-striped table-hover table-bordered responsive nowrap" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($sections as $key => $section)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $section->name }}</td>
                                        <td>@if($section->status ==1)
                                            <a class="sectionUpdateStatus" href="javascript:void(0)" id="section-{{$section->id}}" section_id="{{$section->id}}">Active</a>
                                            @else
                                            <a class="sectionUpdateStatus" href="javascript:void(0)" id="section-{{$section->id}}" section_id="{{$section->id}}">Inactive</a>
                                            @endif
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
