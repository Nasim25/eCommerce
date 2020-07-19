@extends('layouts.admin_layouts.admin_layout')
@section('admin_title','Brand');
@section('content')

        <div class="content">
            <div class="content-header">
                <!-- leftside content header -->
                <div class="leftside-content-header">
                    <ul class="breadcrumbs">
                        <li><i class="fa fa-columns" aria-hidden="true"></i><a href="{{url('admin/slider')}}">Slider</a></li>
                        <li><a>Add Slider</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="row animated fadeInUp">
                <div class="col-sm-6 col-md-6 ">
                    
                    <div class="panel">
                        <div class="panel-content">
                            <form method="post" id="categoryForm" name="categoryForm" action="{{ url('admin/brand-store')}}" enctype="multipart/form-data">@csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel-content">
                                            <div class="form-group">
                                                <label for="state-success" class="control-label">Brand Name</label>
                                                <input type="text" class="form-control" name="brand_name" id="brand_name" required >
                                            </div>
                                            
                                            <div class="form-group has-feedback">
                                                <label for="brand_image" class="control-label">Brand Image</label>
                                                <input type="file" class="form-control" id="brand_image" name="brand_image" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" class="btn btn-sm btn-success" value="Submit" >
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
