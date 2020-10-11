<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Analytics Dashboard - This is an example dashboard created using build-in elements and components.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <!--
    =========================================================
    * ArchitectUI HTML Theme Dashboard - v1.0.0
    =========================================================
    * Product Page: https://dashboardpack.com
    * Copyright 2019 DashboardPack (https://dashboardpack.com)
    * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    -->
<link href="{{ asset('./assets/main.css') }}" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('./assets/datepicker/tempusdominus-bootstrap-4.css') }}" />
<style>
    a{
        text-decoration:none;
        color:white;
    }
    a:hover{
        text-decoration:none;
        color:yellow;
    }
</style>

</head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>   
             <div class="app-header__content">
                <div class="app-header-left">
                    <ul class="header-menu nav">
                       
                    </ul>        
                </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="42" class="rounded-circle" src="{{ asset('assets/images/avatars/avatar.jpg') }}" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <button type="button" tabindex="0" class="dropdown-item"><a style="color:black;" href="{{route('logout')}}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">logout</a>
                                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>     
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                        {{Auth::user()->name}}
                                    </div>
                                    <div class="widget-subheading">
                                        Admin
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>        </div>
            </div>
        </div>
            <div class="app-main">
                <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading">Dashboards</li>
                                <li>
                                    <a href="{{ route('admin') }}" class="mm-active">
                                        <i class="metismenu-icon pe-7s-rocket"></i>
                                        Analytics Dashboard
                                    </a>
                                </li>
                                <li class="app-sidebar__heading">Settings</li>
                                <li
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                >
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-diamond"></i>
                                        Age
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                    >
                                        <li>
                                            <a href="{{ route('age-create') }}">
                                                <i class="metismenu-icon"></i>
                                                Create age group
                                            </a>
                                        </li>
                            
                                        <li>
                                            <a href="{{ route('age-view') }}">
                                                <i class="metismenu-icon">
                                                </i>View age groups
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                               
                                <li
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                >
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-car"></i>
                                        Service
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                    >
                                        <li>
                                            <a href="{{ route('service-create') }}">
                                                <i class="metismenu-icon">
                                                </i>Create a service
                                            </a>
                                        </li>
                    
                                        <li>
                                            <a href="{{ route('service-view') }}">
                                                <i class="metismenu-icon">
                                                </i>View services
                                            </a>
                                        </li>

                                        

                                    </ul>
                                </li>

                                <li
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    >
                                        <a href="#">
                                            <i class="metismenu-icon pe-7s-diamond"></i>
                                                type
                                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                        </a>
                                        <ul
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                        >
                                
                                            <li>
                                                <a href="{{ route('type-view') }}">
                                                    <i class="metismenu-icon">
                                                    </i>View type groups
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('type-create') }}">
                                                    <i class="metismenu-icon">
                                                    </i>Create type groups
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                            </ul>
                        </div>
                    </div>
                </div>   
                 <div class="app-main__outer">
                        @yield('content')
                    <div class="app-wrapper-footer">
                        <div class="app-footer">
                            <div class="app-footer__inner">
                                <div class="app-footer-right">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <a href="" class="nav-link">
                                                <div class="badge badge-success mr-1 ml-0">
                                                    <small>Admin</small>
                                                </div>
                                                Admin Panel
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>    </div>
                <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>
<script src="{{ asset('./assets/scripts/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('./assets/datepicker/moment.js') }}"></script>
<script src="{{ asset('./assets/datepicker/tempusdominus-bootstrap-4.js') }}"></script>
<script src="{{ asset('./assets/datepicker/datepicker.js') }}"></script>
<script type="text/javascript" src="{{ asset('./assets/scripts/main.js') }}"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    @if(Session::has('success'))
        toastr.success("{{Session::get('success')}}")
    @endif
    @if(Session::has('info'))
        toastr.info("{{Session::get('info')}}")
    @endif
    @if(Session::has('warning'))
        toastr.warning("{{Session::get('warning')}}")
    @endif
 </script>
</body>
</html>
