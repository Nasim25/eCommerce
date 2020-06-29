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
                @error('subcategory_name')
                <div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Warning!</strong>{{ $message }}
                </div>
                @enderror
                @error('category_id')
                    <div class="alert alert-warning alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Warning!</strong>{{ $message }}
                    </div>
                @enderror
                @error('subcategory_image')
                    <div class="alert alert-warning alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Warning!</strong>{{ $message }}
                    </div>
                @enderror
                    <div class="panel">
                        <div class="panel-content">
                            <form method="post" id="categoryForm" name="categoryForm" action="{{ url('admin/add-sub-category')}}" enctype="multipart/form-data">@csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="panel-content">
                                            <div class="form-group">
                                                <label for="state-success" class="control-label">Subcategory Name</label>
                                                <input type="text" class="form-control" name="subcategory_name" id="subcategory_name" required >
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="state-error" class="control-label">Subcategory Discount</label>
                                                <input type="text" class="form-control" id="subcategory_discount" name="subcategory_discount">
                                            </div>
                                            <div class="form-group">
                                                <label for="description" class="control-label">Subcategory Discription</label>
                                                <textarea class="form-control" name="subcategory_discription" rows="3" id="subcategory_discription" placeholder="Write a comment" maxlength="100"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="meta_description" class="control-label">Meta Discription</label>
                                                <textarea class="form-control" rows="3" name="subcategory_meta_discription" id="subcategory_meta_discription" placeholder="Write a comment" maxlength="100"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="panel-content">
                                        <div class="form-group">
                                                <label for="state-warning" class="control-label">Select Catagory</label>
                                                <select class="form-control" name="category_id" id="category_id" required>
                                                    <option value="0">Select</option>
                                                        @foreach($getCategories as $category)
                                                            <option value="{{$category['id']}}">{{$category['category_name']}}</option>
                                                        @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group has-feedback">
                                                <label for="category_image" class="control-label">Subcategory Image</label>
                                                <input type="file" class="form-control" id="subcategory_image" name="subcategory_image">
                                            </div>
                                            <div class="form-group">
                                                <label for="meta_title" class="control-label">Meta Title</label>
                                                <textarea class="form-control" rows="3" id="subcategory_meta_title" name="subcategory_meta_title" placeholder="Write a comment" maxlength="100"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="meta_keywords" class="control-label">Meta Keywords</label>
                                                <textarea class="form-control" rows="3" name="subcategory_meta_keyword" id="subcategory_meta_keyword" placeholder="Write a comment" maxlength="100"></textarea>
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
