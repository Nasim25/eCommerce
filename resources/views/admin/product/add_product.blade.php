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
                    <h4 class="section-subtitle"><b>Add Product</b></h4>
                    <div class="panel">
                        <div class="panel-content">
                            <form method="post" id="categoryForm" name="categoryForm" action="{{ url('admin/add-edit-product')}}" enctype="multipart/form-data">@csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="panel-content">
                                            <div class="form-group">
                                                <label  class="control-label">Select Category</label>
                                                <select class="form-control" name="category_id" id="category_id" >
                                                    <option value="">Select</option>
                                                        @foreach($category as $categories)
                                                        <optgroup label="{{ $categories['category_name']}}"></optgroup>
                                                            @foreach($categories['subcategories'] as $subcategory)
                                                                <option value="{{$subcategory['id']}}">&nbsp;&nbsp;&nbsp;&raquo;&nbsp;{{ $subcategory['category_name']}}{{$subcategory['id']}}</option>
                                                            @endforeach
                                                        @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="state-success" class="control-label">Product Name</label>
                                                <input type="text" class="form-control" name="product_name" id="product_name"  >
                                            </div>
                                            <div class="form-group">
                                                <label for="state-success" class="control-label">Product Price</label>
                                                <input type="text" class="form-control" name="product_price" id="product_price"  >
                                            </div>
                                            <div class="form-group">
                                                <label for="state-success" class="control-label">Product Discount</label>
                                                <input type="text" class="form-control" name="product_descount" id="product_descount"  >
                                            </div>
                                            
                                            <div class="form-group has-feedback">
                                                <label for="category_image" class="control-label">Product Video</label>
                                                <input type="file" class="form-control" id="product_video" name="product_video">
                                            </div>
                                            <div class="form-group">
                                                <label for="description" class="control-label">Product Discription</label>
                                                <textarea class="form-control" name="description" rows="3" id="description" placeholder="Write a comment" maxlength="100"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label  class="control-label">Select Sleeve</label>
                                                <select class="form-control" name="sleeve" id="sleeve" >
                                                    <option value="">Select Sleeve</option>
                                                    @foreach($sleeveArray as $sleeves)
                                                    <option value="{{$sleeves}}">{{$sleeves}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label  class="control-label">Select Pattern</label>
                                                <select class="form-control" name="pattern" id="pattern" >
                                                    <option value="">Select Pattern</option>
                                                    @foreach($patternArray as $patterns)
                                                    <option value="{{$patterns}}">{{$patterns}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="meta_description" class="control-label">Meta Discription</label>
                                                <textarea class="form-control" rows="3" name="meta_description" id="meta_description" placeholder="Write a comment" maxlength="100"></textarea>
                                            </div>

                                            <div class="form-group">
                                                <label for="meta_keywords" class="control-label">Meta Keywords</label>
                                                <textarea class="form-control" rows="3" name="meta_keywords" id="meta_keywords" placeholder="Write a comment" maxlength="100"></textarea>
                                            </div>
                                            
                                            

                                        </div>
                                        <input style="width:83px;margin-left:10px;" class="btn btn-md btn-success" type="submit" value="Submit">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="panel-content">
                                            <div class="form-group">
                                                <label for="state-success" class="control-label">Product Code</label>
                                                <input type="text" class="form-control" name="product_code" id="product_code"  >
                                            </div>
                                            <div class="form-group">
                                                <label for="state-success" class="control-label">Product Color</label>
                                                <input type="text" class="form-control" name="product_color" id="product_color"  >
                                            </div>
                                            <div class="form-group">
                                                <label for="state-success" class="control-label">Product Weight</label>
                                                <input type="text" class="form-control" name="product_weight" id="product_weight"  >
                                            </div>
                                            <div class="form-group has-feedback">
                                                <label for="category_image" class="control-label">Product Image</label>
                                                <input type="file" class="form-control" id="main_image" name="main_image">
                                            </div>
                                            <div class="form-group">
                                                <label for="meta_title" class="control-label">Wash Care</label>
                                                <textarea class="form-control" rows="3" id="wash_care" name="wash_care" placeholder="Write a comment" maxlength="100"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label  class="control-label">Select Fabric</label>
                                                <select class="form-control" name="fabric" id="fabric" >
                                                    <option value="">Select</option>
                                                    @foreach($fabricArray as $fabrics)
                                                    <option value="{{$fabrics}}">{{$fabrics}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label  class="control-label">Select Fit</label>
                                                <select class="form-control" name="fit" id="fit" >
                                                    <option value="">Select</option>
                                                    @foreach($fitArray as $fits)
                                                    <option value="{{$fits}}">{{$fits}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label  class="control-label">Select Occasion</label>
                                                <select class="form-control" name="occassion" id="occassion" >
                                                    <option value="">Select</option>
                                                    @foreach($occasionArray as $occasions)
                                                    <option value="{{$occasions}}">{{$occasions}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label  class="control-label">Featured Item</label>
                                                <select class="form-control" name="is_featured" id="is_featured" >
                                                    <option value="No">No</option>
                                                    <option value="Yes">Yes</option>
                                                    
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="meta_title" class="control-label">Meta Title</label>
                                                <textarea class="form-control" rows="3" id="meta_title" name="meta_title" placeholder="Write a comment" maxlength="100"></textarea>
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
