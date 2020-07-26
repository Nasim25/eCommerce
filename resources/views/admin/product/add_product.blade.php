@extends('layouts.admin_layouts.admin_layout')
@section('admin_title','Product');
@section('content')

<div class="content">
    <div class="content-header">
        <!-- leftside content header -->
        <div class="leftside-content-header">
            <ul class="breadcrumbs">
                <li><i class="fa fa-columns" aria-hidden="true"></i><a href="#">Catalogues</a></li>
                <li><a>Product</a></li>
            </ul>
        </div>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="row animated fadeInUp">
        <div class="col-sm-12 col-md-12 ">
            <h4 class="section-subtitle"><b>{{$title}}</b></h4>
            <div class="panel">
                <div class="panel-content">
                    <form method="post" id="categoryForm" name="categoryForm" action="{{ url('admin/add-edit-product')}}" enctype="multipart/form-data">@csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="panel-content">
                                    <div class="form-group">
                                        <label class="control-label">Select Category</label>
                                        <select class="form-control" name="category_id" id="category_id" required>
                                            <option value="">Select</option>
                                            @foreach($category as $categories)

                                            <option value="{{$categories->id}}" @if(!empty($productOld->id)) {{$productOld->category_id == $categories->id?"selected":""}} @else  @endif >{{$categories->category_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="state-success" class="control-label">Product Name</label>
                                        <input type="text" @if(!empty($productOld->id)) value="{{$productOld->product_name}}"@else Value="" @endif class="form-control" name="product_name" id="product_name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="state-success" class="control-label">Product Price</label>
                                        <input type="text" class="form-control" name="product_price" id="product_price"  required @if(!empty($productOld->id)) value="{{$productOld->product_price}}"@else Value="" @endif>
                                    </div>
                                    <div class="form-group">
                                        <label for="state-success" class="control-label">Product Discount</label>
                                        <input type="text" class="form-control" name="product_descount" id="product_descount" @if(!empty($productOld->id)) value="{{$productOld->product_descount}}"@else Value="" @endif>
                                    </div>

                                    
                                    <div class="form-group">
                                        <label for="meta_title" class="control-label">Meta Title</label>
                                        <textarea class="form-control" rows="3" id="meta_title" name="meta_title" placeholder="Write a comment" maxlength="100">
                                        @if(!empty($productOld->id)) {{$productOld->meta_title}}@else  @endif
                                        </textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="meta_keywords" class="control-label">Meta Keywords</label>
                                        <textarea class="form-control" rows="3" name="meta_keywords" id="meta_keywords" placeholder="Write a comment" maxlength="100">@if(!empty($productOld->id)) {{$productOld->meta_keywords}} @else  @endif</textarea>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="panel-content">
                                    <div class="form-group" id="appandCatagoryLavel">
                                        @include('admin.product.appand_subcategory')
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Brand</label>
                                        <select class="form-control" name="brand_id" id="brand_id" required>
                                            <option value="">Select</option>
                                            @foreach($brands as $brand)
                                            <option value="{{$brand->id}}" @if(!empty($productOld->id)) {{$productOld->brand_id == $brand->id?"selected":""}}@else  @endif >{{$brand->brand_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="state-success" class="control-label">Product Code</label>
                                        <input type="text" class="form-control"  name="product_code" id="product_code" required @if(!empty($productOld->id)) value="{{$productOld->product_code}}"@else Value="" @endif >
                                    </div>

                                    <div  class="form-group">
                                        <label class="control-label">Color</label>
                                        <select class="form-control" name="product_color[]" id="product_color" required>
                                            <option value="">Select</option>
                                            @foreach($colors as $color)
                                            <option value="{{$color->id}}" @if(!empty($productOld->id)) {{$productOld->category_id == $color->id?"selected":""}} @else  @endif >{{$color->color_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group has-feedback">
                                        <label for="category_image" class="control-label">Product Main Image (width:294,height:247)</label>
                                        <input type="file" class="form-control" id="main_image" name="main_image" required @if(!empty($productOld->id)) value="{{$productOld->main_image}}"@else Value="" @endif>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label for="view_image" class="control-label">Product View Image (width:700,height:700)</label>
                                        <input type="file" class="form-control" id="view_image" name="view_image" required @if(!empty($productOld->id)) value="{{$productOld->view_image}}"@else Value="" @endif>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Featured Item</label>
                                        <select class="form-control" name="is_featured" id="is_featured">
                                            <option @if(!empty($productOld->id)) {{$productOld->is_featured == "No"?"selected":""}} @else  @endif value="No">No</option>
                                            <option value="Yes" @if(!empty($productOld->id)) {{$productOld->is_featured == "Yes"?"selected":""}} @else  @endif>Yes</option>

                                        </select>
                                    </div>



                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="panel-content">
                                    <label for="meta_description" class="control-label">Product Discription</label>
                                    <textarea class="form-control" name="description" rows="3" id="description" placeholder="Write a comment" maxlength="100">@if(!empty($productOld->id)) {{$productOld->description}}@else  @endif </textarea>
                                </div>
                                <input style="width:83px;margin-left:10px;" class="btn btn-md btn-success" type="submit" value="Submit">
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
<script src="//cdn.ckeditor.com/4.14.1/full/ckeditor.js"></script>
@endsection
@section('admin_js')
<script src="{{asset('admin')}}/vendor/jquery/jquery-1.12.3.min.js"></script>
<script src="{{asset('admin')}}/vendor/bootstrap_max-lenght/bootstrap-maxlength.js"></script>
<script src="{{asset('admin')}}/vendor/select2/js/select2.min.js"></script>
<script src="{{asset('admin')}}/javascripts/examples/forms/advanced.js"></script>

<script>
    CKEDITOR.replace('description');
</script>
@endsection