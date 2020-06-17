@extends('layouts.admin_layouts.admin_layout')
@section('admin_title','Category');
@section('content')

        <div class="content">
            <div class="content-header">
                <!-- leftside content header -->
                <div class="leftside-content-header">
                    <ul class="breadcrumbs">
                        <li><i class="fa fa-columns" aria-hidden="true"></i><a href="#">Catalogues</a></li>
                        <li><a>Catagory</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="row animated fadeInUp">
                <div class="col-sm-12 col-md-12 ">
                    <h4 class="section-subtitle"><b>Add Category</b></h4>
                    <div class="panel">
                        <div class="panel-content">
                            <form method="post" id="categoryForm" name="categoryForm" action="{{ url('admin/add-edit-category')}}" enctype="multipart/form-data">@csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="panel-content">
                                            <div class="form-group">
                                                <label for="state-success" class="control-label">Category Name</label>
                                                <input type="text" class="form-control" name="category_name" id="category_name" required >
                                            </div>
                                            <div id="appandCatagoryLavel">
                                                @include('admin/category/appand_catagory_lavel')
                                            </div>
                                            <div class="form-group">
                                                <label for="state-error" class="control-label">Category Discount</label>
                                                <input type="text" class="form-control" id="category_discount" name="category_discount">
                                            </div>
                                            <div class="form-group">
                                                <label for="description" class="control-label">Category Discription</label>
                                                <textarea class="form-control" name="description" rows="3" id="description" placeholder="Write a comment" maxlength="100"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="meta_description" class="control-label">Meta Discription</label>
                                                <textarea class="form-control" rows="3" name="meta_description" id="meta_description" placeholder="Write a comment" maxlength="100"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="panel-content">
                                            <div class="form-group">
                                                <label  class="control-label">Select Section</label>
                                                <select class="form-control" name="section_id" id="section_id" required>
                                                    <option value="">Select Section</option>
                                                    @foreach ($sections as $section)
                                                    <option value="{{$section->id}}">{{$section->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group has-feedback">
                                                <label for="category_image" class="control-label">Category Image</label>
                                                <input type="file" class="form-control" id="category_image" name="category_image">
                                            </div>
                                            <div class="form-group">
                                                <label for="url" class="control-label">Category URL</label>
                                                <input type="text" class="form-control" id="url" name="url">
                                            </div>
                                            <div class="form-group">
                                                <label for="meta_title" class="control-label">Meta Title</label>
                                                <textarea class="form-control" rows="3" id="meta_title" name="meta_title" placeholder="Write a comment" maxlength="100"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="meta_keywords" class="control-label">Meta Keywords</label>
                                                <textarea class="form-control" rows="3" name="meta_keywords" id="meta_keywords" placeholder="Write a comment" maxlength="100"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <input style="width:83px;margin-left:27px;" class="btn btn-md btn-success" type="submit" value="Submit">
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
