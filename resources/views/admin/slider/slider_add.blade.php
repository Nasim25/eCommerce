@extends('layouts.admin_layouts.admin_layout')
@section('admin_title','Slider');
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
                <div class="col-sm-12 col-md-12 ">
                    
                    <div class="panel">
                        <div class="panel-content">
                            <form method="post" id="categoryForm" name="categoryForm" action="{{ url('admin/slider-add')}}" enctype="multipart/form-data">@csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="panel-content">
                                            <div class="form-group">
                                                <label for="state-success" class="control-label">Slider Name</label>
                                                <input type="text" class="form-control" name="slide_name" id="slide_name" required >
                                            </div>
                                            
                                            <div class="form-group has-feedback">
                                                <label for="category_image" class="control-label">Slider Image</label>
                                                <input type="file" class="form-control" id="slide_image" name="slide_image">
                                            </div>
                                            <div class="form-group">
                                                <label for="state-warning" class="control-label">Select Catagory</label>
                                                <select class="form-control" name="category_id" id="category_id" required>
                                                    <option value="0">Select</option>
                                                    @foreach($getCategory as $category)
                                                        <option value="{{$category['id']}}" > {{$category['category_name']}}</option>
                                                        @foreach($category['subcategories'] as $subcategory)
                                                        <option value="{{$category['id']}}">&nbsp;&raquo;&nbsp;{{$subcategory['category_name']}}</option>
                                                        @endforeach
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" class="btn btn-sm btn-success" value="Submit" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="panel-content">
                                            <div class="form-group">
                                                <label for="state-success" class="control-label">First Line</label>
                                                <input type="text" class="form-control" name="slide_firs_line" id="slide_firs_line" required >
                                            </div>
                                            <div class="form-group">
                                                <label for="state-success" class="control-label">Second Line</label>
                                                <input type="text" class="form-control" name="slide_second_line" id="slide_second_line" required >
                                            </div>
                                            <div class="form-group">
                                                <label for="state-success" class="control-label">Third Line</label>
                                                <input type="text" class="form-control" name="slide_third_line" id="slide_third_line" required >
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
