@extends('layouts.admin_layouts.admin_layout')
@section('admin_title','Product Attributes');
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
   <div class="panel panel-default">
        <div class="panel-heading">Add Product Attributes</div>
        <form action="{{url('/admin/add-attributes/'.$productDetails->id)}}" method="post">@csrf
        <div class="panel-body">
            
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Product Name</label>
                    <div class="col-sm-10">
                    <input type="text" readonly value="{{$productDetails->product_name}}" class="form-control-plaintext" desabled>
                    <input type="hidden" value="{{$productDetails->id}}" name="product_id">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Product Code</label>
                    <div class="col-sm-10">
                    <input type="text" readonly value="{{$productDetails->product_code}}" class="form-control-plaintext" id="staticEmail" value="email@example.com">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Product Color</label>
                    <div class="col-sm-10">
                    <input type="text" readonly value="{{$productDetails->product_color}}" class="form-control-plaintext" id="staticEmail" value="email@example.com">
                    </div>
                </div>
                <div class="field_wrapper">
                    
                    <div class="col-sm-10">
                        <input type="text" name="sku[]" placeholder="sku" id="sku" style="width:120px;margin:5px;" />
                        <input type="text" name="size[]" placeholder="size" id="size" style="width:120px;margin:5px;" />
                        <input type="text" name="price[]" placeholder="price" id="price" style="width:120px;margin:5px;" />
                        <input type="text" name="stock[]" placeholder="stock" id="stock" style="width:120px;margin:5px;" />
                        <a href="javascript:void(0);" class="add_button" title="Add field">Add</a>
                    </div>
                </div>
                
               
            
        </div>
        <div class="panel-footer"><input type="submit" value="Add Attributes"></div>
        </form>
    </div>

    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">Attributes List</div>
       

        <table class="table table-bordered">
            <thead>
                <th>Id</th>
                <th>SKU</th>
                <th>Size</th>
                <th>Price</th>
                <th>QTY</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach($attributeDetails as $attribute)
                <tr>
                    <td>{{$attribute->id}}</td>
                    <td>{{$attribute->sku}}</td>
                    <td>{{$attribute->size}}</td>
                    <td>{{$attribute->price}}</td>
                    <td>{{$attribute->stock}}</td>
                    <td><a class="confirmDelete" record="attributes" recordid="{{$attribute->id}}" href="javascript:void(0)">delete</a></td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection

@section('admin_css')

    <link rel="stylesheet" href="{{asset('admin')}}/vendor/data-table/media/css/dataTables.bootstrap.min.css">
@endsection
@section('admin_js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        var maxField = 10; //Input fields increment limitation
        var addButton = $('.add_button'); //Add button selector
        var wrapper = $('.field_wrapper'); //Input field wrapper
        var fieldHTML = '<div class="control-group"><div class="col-sm-10"><input type="text" name="sku[]" placeholder="sku" id="sku" style="width:120px;margin:5px;" /><input type="text" name="size[]" placeholder="size" id="size" style="width:120px;margin:11px;" /><input type="text" name="price[]" placeholder="price" id="price" style="width:120px;margin:5px;" /><input type="text" name="stock[]" placeholder="stock" id="stock" style="width:120px;margin:5px;" /><a href="javascript:void(0);" class="remove_button">remove</a></div></div>'; //New input field html 
        var x = 1; //Initial field counter is 1
        
        //Once add button is clicked
        $(addButton).click(function(){
            //Check maximum number of input fields
            if(x < maxField){ 
                x++; //Increment field counter
                $(wrapper).append(fieldHTML); //Add field html
            }
        });
        
        //Once remove button is clicked
        $(wrapper).on('click', '.remove_button', function(e){
            e.preventDefault();
            $(this).parent('div').remove(); //Remove field html
            x--; //Decrement field counter
        });
    });
    </script>
@endsection
