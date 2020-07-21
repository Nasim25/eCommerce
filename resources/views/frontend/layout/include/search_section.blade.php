<div class="section-filter">
  
  <div class="b-filter__inner bg-grey container">
  
    <h2>Find your Product</h2>
    <form class="b-filter" action="{{url('serch-products')}}" method="post">@csrf
      <div class="btn-group bootstrap-select">
        <select class="selectpicker" id="category_id" data-width="100%" tabindex="-98" required>
          <option value="">Select Category</option>
          @foreach($categories as $category)
          <option value="{{$category['id']}}">{{$category['category_name']}}</option>
          @endforeach
        </select>
      </div>
      <div class="btn-group bootstrap-select" id="appandCatagoryL">
        @include('frontend.apend_subcategory')
      </div>
      <div class="ui-filter-slider">
        <div class="sidebar-widget-body m-t-10">
          <div class="price-range-holder"> <span class="min-max"> <span class="pull-left">TK 100</span> <span class="pull-right">Tk 100000</span> </span>
            <input type="text" class="price-slider" value="" style="display:block">
          </div>
        </div>
      </div>
      <div>
        <div class="b-filter__btns">
          <button type="submit" class="btn btn-lg btn-primary">search</button>
        </div>
      </div>
    </form>
  </div>
</div>