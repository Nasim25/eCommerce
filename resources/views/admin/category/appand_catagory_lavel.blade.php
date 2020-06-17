<div class="form-group">
    <label for="state-warning" class="control-label">Select Catagory Level</label>
    <select class="form-control" name="parent_id" id="parent_id" required>
        <option value="0">Main Category</option>
        @if(!empty($getCategory))
            @foreach($getCategory as $getCategorys)
                <option value="{{$getCategorys['id']}}">{{$getCategorys['category_name']}}</option>
                @if(!empty($getCategorys['subcategories']))
                    @foreach($getCategorys['subcategories'] as $subCategorys)
                        <option value="{{$subCategorys['id']}}">&nbsp;&raquo;&nbsp;{{$subCategorys['category_name']}}</option>
                    @endforeach
                @endif
            @endforeach
        @endif
    </select>
 </div>