@extends('layouts.admin_layouts.admin_layout')
@section('content')

<div class="content">
            <!-- content HEADER -->
            <!-- ========================================================= -->
            <div class="content-header">
                <!-- leftside content header -->
                <div class="leftside-content-header">
                    <ul class="breadcrumbs">
                        <li><i class="fa fa-columns" aria-hidden="true"></i><a href="#">Admin</a></li>
                        <li><a>Setting</a></li>
                    </ul>
                </div>
            </div>
            <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
            <div class="row animated fadeInUp">
                
                <div class="col-sm-12 col-md-8 col-md-offset-2">
                    <div class="panel">
                        <div class="panel-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <form id="updatePasswordForm" name="updatePasswordForm" class="form-horizontal form-stripe" action="{{ url('admin/setting-update') }}" method="post">@csrf
                                        <div class="form-group">
                                            <label for="email" class="col-sm-3 control-label">Admin Name<span class="required">*</span></label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" value="{{ $adminDetails->name}}" id="name" name="name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="email" class="col-sm-3 control-label">Admin Email<span class="required">*</span></label>
                                            <div class="col-sm-9">
                                                <input type="email" class="form-control" value="{{ $adminDetails->email}}" id="email" name="email" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="email" class="col-sm-3 control-label">Admin Type<span class="required">*</span></label>
                                            <div class="col-sm-9">
                                                <input class="form-control" value="{{ $adminDetails->type}}" name="type" id="type"  disabled>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="password" class="col-sm-3 control-label">Current Password<span class="required">*</span></label>
                                            <div class="col-sm-9">
                                                <input type="password" class="form-control" id="current_password" name="current_password" required>
                                                <span id="checkpassword_message" class="required"></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="cofirmation" class="col-sm-3 control-label">New Password<span class="required">*</span></label>
                                            <div class="col-sm-9">
                                                <input type="password" class="form-control" id="new_password" name="new_password" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="cofirmation" class="col-sm-3 control-label">Confirmation<span class="required">*</span></label>
                                            <div class="col-sm-9">
                                                <input type="password" class="form-control" id="cofirmation" name="cofirmation" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-3 col-sm-9">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                @if(Session::get('success_message'))
                                                <span class="required" style="color:green">{{Session::get('success_message')}}</span>
                                                @endif
                                                @if(Session::get('error_message'))
                                                    <span class="required">{{Session::get('error_message')}}</span>
                                                @endif
                                            </div>
                                            

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              
            </div>
            <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
        </div>

@endsection