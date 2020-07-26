<div class="page-header">
    <div class="leftside-header">
        <div class="logo">
            <a href="{{ url('admin/deshboard') }}" class="on-click">
                <img alt="logo" src="{{asset('admin')}}/images/techzone.png" />
            </a>
        </div>
        <div id="menu-toggle" class="visible-xs toggle-left-sidebar" data-toggle-class="left-sidebar-open" data-target="html">
            <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>
    <div class="rightside-header">
        <div class="header-middle"></div>
        <div class="header-section" id="search-headerbox">
            <input type="text" name="search" id="search" placeholder="Search...">
            <i class="fa fa-search search" id="search-icon" aria-hidden="true"></i>
            <div class="header-separator"></div>
        </div>
        <div class="header-section hidden-xs" id="notice-headerbox">
            
            <div class="notice" id="messages-notice">
                <i class="fa fa-comments-o" aria-hidden="true"><span class="badge badge-xs badge-top-right x-danger"><i class="fa fa-exclamation"></i></span>
                </i>
                <div class="dropdown-box basic">
                    <div class="drop-header ">
                        <h3><i class="fa fa-comments" aria-hidden="true"></i> Messages</h3>
                        <span class="badge x-danger b-rounded">120</span>
                    </div>
                    <div class="drop-content">
                        <div class="widget-list list-left-element">
                            <ul>
                                <li>
                                    <a href="#">
                                        <div class="left-element"><img alt="profile photo" src="{{asset('admin')}}/images/avatar/avatar_1.jpg" /></div>
                                        <div class="text">
                                            <span class="title">John Doe</span>
                                            <span class="subtitle">hello world</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="left-element"><img alt="profile photo" src="{{asset('admin')}}/images/avatar/avatar_2.jpg" /></div>
                                        <div class="text">
                                            <span class="title">Alice Smith</span>
                                            <span class="subtitle">hello world</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="left-element"><img alt="profile photo" src="{{asset('admin')}}/images/avatar/avatar_3.jpg" /></div>
                                        <div class="text">
                                            <span class="title">Klaus Wolf</span>
                                            <span class="subtitle">hello world</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="left-element"><img alt="profile photo" src="{{asset('admin')}}/images/avatar/avatar_4.jpg" /></div>
                                        <div class="text">
                                            <span class="title">Sun Li</span>
                                            <span class="subtitle">hello world</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="left-element"><img alt="profile photo" src="{{asset('admin')}}/images/avatar/avatar_5.jpg" /></div>
                                        <div class="text">
                                            <span class="title">Sonia Valera</span>
                                            <span class="subtitle">hello world</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="drop-footer">
                        <a>See all messages</a>
                    </div>
                </div>
            </div>
            <div class="notice" id="alerts-notice">
                <i class="fa fa-bell-o" aria-hidden="true"><span class="badge badge-xs badge-top-right x-danger">7</span></i>

                <div class="dropdown-box basic">
                    <div class="drop-header">
                        <h3><i class="fa fa-bell-o" aria-hidden="true"></i> Notifications</h3>
                        <span class="badge x-danger b-rounded">7</span>

                    </div>
                    <div class="drop-content">
                        <div class="widget-list list-left-element list-sm">
                            <ul>
                                <li>
                                    <a href="#">
                                        <div class="left-element"><i class="fa fa-warning color-warning"></i></div>
                                        <div class="text">
                                            <span class="title">8 Bugs</span>
                                            <span class="subtitle">reported today</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="left-element"><i class="fa fa-flag color-danger"></i></div>
                                        <div class="text">
                                            <span class="title">Error</span>
                                            <span class="subtitle">sevidor C down</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="left-element"><i class="fa fa-cog color-dark"></i></div>
                                        <div class="text">
                                            <span class="title">New Configuration</span>
                                            <span class="subtitle"></span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="left-element"><i class="fa fa-tasks color-success"></i></div>
                                        <div class="text">
                                            <span class="title">14 Task</span>
                                            <span class="subtitle">completed</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="left-element"><i class="fa fa-envelope color-primary"></i></div>
                                        <div class="text">
                                            <span class="title">21 Menssage</span>
                                            <span class="subtitle"> (see more)</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="drop-footer">
                        <a>See all notifications</a>
                    </div>
                </div>
            </div>
            <div class="header-separator"></div>
        </div>
        <div class="header-section" id="user-headerbox">
            <div class="user-header-wrap">
                <div class="user-photo">
                    <img alt="profile photo" src="{{asset('admin')}}/images/avatar/avatar_user.jpg" />
                </div>
                <div class="user-info">
                    <span class="user-name">{{Auth::guard('admin')->user()->name}}</span>
                    <span class="user-profile">Admin</span>
                </div>
                <i class="fa fa-plus icon-open" aria-hidden="true"></i>
                <i class="fa fa-minus icon-close" aria-hidden="true"></i>
            </div>
            <div class="user-options dropdown-box">
                <div class="drop-content basic">
                    <ul>
                        <li> <a href="{{ url('admin/setting') }}"><i class="fa fa-user" aria-hidden="true"></i> Profile</a></li>
                        <li> <a href="{{ url('admin/setting') }}"><i class="fa fa-user" aria-hidden="true"></i> Setting</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-separator"></div>
        <div class="header-section">
            <a href="{{url('admin/logout')}}" data-toggle="tooltip" data-placement="left" title="Logout"><i class="fa fa-sign-out log-out" aria-hidden="true"></i></a>
        </div>
    </div>
</div>