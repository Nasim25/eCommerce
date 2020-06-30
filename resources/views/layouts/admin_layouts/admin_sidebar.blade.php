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
                    
                    @if(Session::get('page') == 'sections' || Session::get('page') == "category" || Session::get('page') == 'product')
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
                            <li class="{{$section}}-item"><a href="{{ url('admin/section') }}">Section</a></li>
                            @if(Session::get('page')=='category')
                            <?php $category = "open"; ?>
                            @else
                            <?php $category = "close"; ?>
                            @endif
                            <li class="{{$category}}-item"><a href="{{ url('admin/category') }}">Category</a></li>
                            <li class="{{$category}}-item"><a href="{{ url('admin/sub-category') }}">Sub Category</a></li>
                            @if(Session::get('page')=='product')
                            <?php $product = "open"; ?>
                            @else
                            <?php $product = "close"; ?>
                            @endif
                            <li class="{{$product}}-item"><a href="{{ url('admin/product') }}">Product</a></li>
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
                    
                    <li class="has-child-item close-item">
                        <a><i class="fa fa-columns" aria-hidden="true"></i><span>Forms </span></a>
                        <ul class="nav child-nav level-1">
                            <li><a href="forms_layouts.html">Layouts</a></li>
                            <li><a href="forms_elements.html">Elements</a></li>
                            <li><a href="forms_advanced.html">Advanced</a></li>
                            <li><a href="forms_validation.html">Validation</a></li>
                            <li><a href="forms_wizard.html">Wizard</a></li>
                        </ul>
                    </li>
                    
                    <li class="has-child-item close-item">
                        <a><i class="fa fa-table" aria-hidden="true"></i><span>Tables</span></a>
                        <ul class="nav child-nav level-1">
                            <li><a href="tables_basic.html">Basic</a></li>
                            <li><a href="tables_data-tables.html">DataTable</a></li>
                            <li><a href="tables_responsive.html">Responsive</a></li>
                        </ul>
                    </li>
                    
                    <li class="has-child-item close-item">
                        <a><i class="fa fa-files-o" aria-hidden="true"></i><span>Pages</span></a>
                        <ul class="nav child-nav level-1">
                            <li><a href="pages_sign-in.html">Sign in</a></li>
                            <li><a href="pages_register.html">Register</a></li>
                            <li><a href="pages_lock-screen.html">Lock screen</a></li>
                            <li><a href="pages_forgot-password.html">Forgot password</a></li>
                            <li class="has-child-item close-item">
                                <a>Error pages</a>
                                <ul class="nav child-nav level-2 ">
                                    <li><a href="pages_error-404-content.html">Error 404 content</a></li>
                                    <li><a href="pages_error-404.html">Error 404 page</a></li>
                                    <li><a href="pages_error-500.html">Error 500</a></li>
                                </ul>
                            </li>
                            <li><a href="pages_faq.html">FAQ</a></li>
                            <li><a href="pages_user-profile.html">User profile</a></li>
                            <li class="has-child-item close-item">
                                <a>Search results<span></a>
                                <ul class="nav child-nav level-2 ">
                                    <li><a href="pages_search-results-list.html">List style</a></li>
                                    <li><a href="pages_search-results-grid.html">Grid Style</a></li>
                                </ul>
                            </li>
                            <li class="has-child-item close-item">
                                <a>Projects<span></a>
                                <ul class="nav child-nav level-2 ">
                                    <li><a href="pages_project-list.html">List</a></li>
                                    <li><a href="pages_project-detail.html">Detail</a></li>
                                </ul>
                            </li>

                        </ul>
                    </li>
                    
                    <li class="has-child-item close-item">
                        <a><i class="fa fa-paper-plane" aria-hidden="true"></i><span>Widgets</span></a>
                        <ul class="nav child-nav level-1">
                            <li><a href="widgets_boxes.html">Boxes</a></li>
                            <li><a href="widgets_lists.html">Lists</a></li>
                            <li><a href="widgets_posts.html">Posts</a></li>
                            <li><a href="widgets_timelines.html">Timelines</a></li>
                        </ul>
                    </li>
                    
                    <li class="has-child-item close-item">
                        <a><i class="fa fa-magic" aria-hidden="true"></i><span>Helpers</span></a>
                        <ul class="nav child-nav level-1">
                            <li><a href="helpers_background-border.html">Background & Border</a></li>
                            <li><a href="helpers_margin-padding.html">Margin & Padding</a></li>
                        </ul>
                    </li>
                    
                    <li class=" has-child-item close-item">
                        <a>
                            <i class="fa fa-sitemap" aria-hidden="true"></i>
                            <span>Menu levels</span>
                        </a>
                        <ul class="nav child-nav level-1">
                            <li><a>First Item</a></li>
                            <li class="has-child-item close-item">
                                <a>Second Item</a>
                                <ul class="nav child-nav level-2 ">
                                    <li><a href="#">Option 1</a></li>
                                    <li><a href="#">Option 2</a></li>
                                    <li class="has-child-item close-item">
                                        <a>Option 3</a>
                                        <ul class="nav child-nav level-3 ">
                                            <li><a href="#">Item 1</a></li>
                                            <li><a href="#">Item 2</a></li>
                                            <li><a href="#">Item 3</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a>Third Item</a></li>
                            <li class="has-child-item close-item">
                                <a>Fourth Item</a>
                                <ul class="nav child-nav level-2 ">
                                    <li><a href="#">Option 1</a></li>
                                    <li><a href="#">Option 2</a></li>
                                    <li class="has-child-item close-item">
                                        <a>Option 3</a>
                                        <ul class="nav child-nav level-3 ">
                                            <li><a href="#">Item 1</a></li>
                                            <li><a href="#">Item 2</a></li>
                                            <li><a href="#">Item 3</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>