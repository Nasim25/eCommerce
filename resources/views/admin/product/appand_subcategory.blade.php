<div class="form-group">
    <label for="state-warning" class="control-label">Sub-Category</label>
    <select class="form-control" name="subcategory_id" id="subcategory_id" required>
        <option value="0">Select</option>
        @if(!empty($getSubcategory))
            @foreach($getSubcategory as $subcategorys)
                <option value="{{$subcategorys['id']}}">&nbsp;&raquo;&nbsp;{{$subcategorys['subcategory_name']}}</option>
            @endforeach
        @endif
    </select>
 </div>