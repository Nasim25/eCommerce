@extends('layouts.admin_layouts.admin_layout')
@section('admin_title','Brand');
@section('content')

        <div class="content">
            <div class="content-header">
                <!-- leftside content header -->
                <div class="leftside-content-header">
                    <ul class="breadcrumbs">
                        <li><i class="fa fa-columns" aria-hidden="true"></i><a href="{{url('admin/slider')}}">Section</a></li>
                        <li><a>Add Section</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="row animated fadeInUp">
                <div class="col-sm-6 col-md-6 ">
                    
                    <div class="panel">
                        <div class="panel-content">
                            <form method="post" id="categoryForm" name="categoryForm" action="{{ url('admin/section-store')}}" enctype="multipart/form-data">@csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel-content">
                                            <div class="form-group">
                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                                <label for="state-success" class="control-label">Section Name</label>
                                                <input type="text" class="form-control" name="name" id="name" required >
                                            </div>
                                          
                                            <div class="form-group">
                                                <input type="submit" class="btn btn-sm btn-success" value="Save" >
                                            </div>

                                            
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

@endsection

@section('admin_css')
    <link rel="stylesheet" href="{{asset('admin')}}/vendor/select2/css/select2.min.css">
    <link rel="stylesheet" href="{{asset('admin')}}/vendor/select2/css/select2-bootstrap.min.css">
@endsection
@section('admin_js')
    <script src="{{asset('admin')}}/vendor/jquery/jquery-1.12.3.min.js"></script>
    <script src="{{asset('admin')}}/vendor/bootstrap_max-lenght/bootstrap-maxlength.js"></script>
    <script src="{{asset('admin')}}/vendor/select2/js/select2.min.js"></script>
    <script src="{{asset('admin')}}/javascripts/examples/forms/advanced.js"></script>
    
@endsection
