<div id="mobile-menu">
  <ul>
        <li>
      <div class="mm-search">
        <form id="search1" name="search">
          <div class="input-group">
            <div class="input-group-btn">
              <button class="btn btn-default" type="submit"><i class="fa fa-search"></i> </button>
            </div>
            <input type="text" class="form-control simple" placeholder="Search ..." name="srch-term" id="srch-term">
          </div>
        </form>
      </div>
    </li>
     <li class="active"> <a class="level-top" href="#"><span>Home</span></a></li>
   
    @foreach($sections as $section)
    <li><a href="#">{{$section->name}}</a>
       <ul class="level1">
       @foreach($section->categories as $category)
          <li class="level1 first parent"><a href="#"><span>{{$category->category_name}}</span></a> 
                            
            <ul class="level2 right-sub">
                @foreach($category->subcategories as $subcategory)
                              <li class="level2 nav-2-1-1 first"><a href="#"><span>{{$subcategory->subcategory_name}}</span></a></li>
                @endforeach
            </ul>
                            
           </li>
        @endforeach
        </ul>
    </li>
    @endforeach

    <li><a href="#">Blog</a>
       <ul class="level1">
          <li class="level1 first"><a href=""><span>Blog List</span></a></li>
        </ul>
    </li>
    <li><a href="{{url('about')}}">About</a></li>
   </ul>
</div>