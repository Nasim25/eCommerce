<div class="left-sidebar">
    
    <div class="left-sidebar-header">
        <div class="left-sidebar-title">Navigation</div>
        <div class="left-sidebar-toggle c-hamburger c-hamburger--htla hidden-xs" data-toggle-class="left-sidebar-collapsed" data-target="html">
            <span></span>
        </div>
    </div>
    
    <div id="left-nav" class="nano">
        <div class="nano-content">
            <nav>
                <ul class="nav nav-left-lines" id="main-nav">
                    
                    @if(Session::get('page') == 'admin')
                        <?php $active = "active"; ?>
                    @else
                    <?php $active = "close"; ?>
                    @endif
                    <li class="{{$active}}-item"><a href="{{ url('admin/deshboard')}}"><i class="fa fa-home" aria-hidden="true"></i><span>Dashboard</span></a></li>
                    
                    @if(Session::get('page') == 'sections' || Session::get('page') == "category" || Session::get('page') == 'product' || Session::get('page') == "brand" || Session::get('page') == 'subcategory')
                        <?php $active = "open"; ?>
                    @else
                    <?php $active = "close"; ?>
                    @endif

                    <li class="has-child-item {{$active}}-item">
                        <a><i class="fa fa-cubes" aria-hidden="true"></i><span>Catalogues</span></a>
                        <ul class="nav child-nav level-1">
                            @if(Session::get('page')=='sections')
                            <?php $section = "open"; ?>
                            @else
                            <?php $section = "close"; ?>
                            @endif
                            @if(Auth::guard('admin')->user()->type ==1)
                            <li class="{{$section}}-item"><a href="{{ url('admin/section') }}">Section</a></li>
                            @endif
                            @if(Session::get('page')=='category')
                            <?php $category = "open"; ?>
                            @else
                            <?php $category = "close"; ?>
                            @endif
                            <li class="{{$category}}-item"><a href="{{ url('admin/category') }}">Category</a></li>
                            @if(Session::get('page')=='subcategory')
                            <?php $subcategory = "open"; ?>
                            @else
                            <?php $subcategory = "close"; ?>
                            @endif
                            <li class="{{$subcategory}}-item"><a href="{{ url('admin/sub-category') }}">Sub Category</a></li>
                            @if(Session::get('page')=='brand')
                            <?php $brand = "open"; ?>
                            @else
                            <?php $brand = "close"; ?>
                            @endif
                            <li class="{{$brand}}-item"><a href="{{ url('admin/brand') }}">Brand</a></li>
                            @if(Session::get('page')=='color')
                            <?php $brand = "open"; ?>
                            @else
                            <?php $brand = "close"; ?>
                            @endif
                            <li class="{{$brand}}-item"><a href="{{ url('admin/color') }}">Color</a></li>
                            @if(Session::get('page')=='color')
                            <?php $color = "open"; ?>
                            @else
                            <?php $color = "close"; ?>
                            @endif
                            <li class="{{$color}}-item"><a href="{{ url('admin/product') }}">Product</a></li>
                        </ul>
                    </li>
                    @if(Session::get('page')=='slider')
                        <?php $slider = "open"; ?>
                    @else
                        <?php $slider = "close"; ?>
                    @endif
                    <li class=" {{$slider}}-item">
                        <a href="{{url('admin/slider')}}"><i class="fa fa-pie-chart" aria-hidden="true"></i><span>Sliders</span></a>
                    </li>
                    @if(Session::get('page')=='order')
                        <?php $order = "open"; ?>
                    @else
                        <?php $order = "close"; ?>
                    @endif
                    <li class=" {{$order}}-item">
                        <a href="{{url('admin/order')}}"><i class="fa fa-pie-chart" aria-hidden="true"></i><span>Order</span></a>
                    </li>
                    
                    
                    
                    
                </ul>
            </nav>
        </div>
    </div>
</div>