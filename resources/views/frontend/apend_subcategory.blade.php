
<div class="form-group" style="margin-top: 10px;">
    <select style="height: 47px;font-family: 'Open Sans', sans-serif; " class="form-control" name="subcategory_id" id="subcategory_id" required>
        <option value="0">Select Subcategory</option>
        @if(!empty($getSubcategory))
            @foreach($getSubcategory as $subcategorys)
                <option value="{{$subcategorys['id']}}">&nbsp;&raquo;&nbsp;{{$subcategorys['subcategory_name']}}</option>
            @endforeach
        @endif
    </select>
 </div>


