@extends('layouts.admin_layouts.admin_layout')
@section('admin_title','User List');
@section('content')

<div class="content">
            <div class="content-header">
                <div class="leftside-content-header">
                    <ul class="breadcrumbs">
                        <li><i class="fa fa-table" aria-hidden="true"></i><a href="#">User</a></li>
                        <li><a>List</a></li>
                    </ul>
                </div>
            </div>

            <div class="row animated fadeInRight">
                    <div class="col-sm-12">
                        <h4 style="background: white;padding: 13px;border-radius: 3px;margin-bottom: 1px;" class="section-subtitle"><b>User</b></h4><a href="{{ url('admin/brand-create')}}" class="btn btn-sm btn-success pull-right" style="margin-top: -40px; margin-right: 13px;">Create New User</a>
                        
                        <div class="panel">
                            <div class="panel-content">
                                <table id="responsive-table" class="data-table table table-striped table-hover table-bordered responsive nowrap" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Mobile</th>
                                        <th>Email</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $key => $user)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->mobile }}</td>
                                        <td>{{ $user->email }}</td>
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
