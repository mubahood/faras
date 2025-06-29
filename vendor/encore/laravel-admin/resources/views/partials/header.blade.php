<?php
use App\Models\Utils;

?>
<!-- Main Header -->
<header class="main-header" style="background-color: #222D33!important;">

    <!-- Logo -->
    <a href="{{ admin_url('/') }}" class="logo"  style="background-color: #189A47!important;">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        {{-- <span class="logo-mini">{!! env('SHORT_NAME') !!}</span> --}}
        <img class="logo-mini" src="{{ url('public/assets/images/logo.jpg') }}" alt="Logo">
        <img class="logo-lg img img-fluid" style="height: 50px;" src="{{ url('public/assets/images/logo.jpg') }}"
            alt="Logo">
        <!-- logo for regular state and mobile devices -->
        {{--     <span class="logo-lg">{!! env('SHORT_NAME') !!}</span> --}}
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top d-block p-0" role="navigation" style="background-color: #189A47!important;">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <ul class="nav navbar-nav hidden-sm visible-lg-block">
            {!! Admin::getNavbar()->render('left') !!}
        </ul>

        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav ">

                {!! Admin::getNavbar()->render() !!}

                <!-- User Account Menu -->
                <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <!-- The user image in the navbar-->
                        <img src="{{ Admin::user()->avatar }}" class="user-image" alt="User Image">
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class="hidden-xs">{{ Admin::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- The user image in the menu -->
                        <li class="user-header">
                            <img src="{{ Admin::user()->avatar }}" class="img-circle" alt="User Image">

                            <p>
                                {{ Admin::user()->name }}
                                <small>Member since admin {{ Admin::user()->created_at }}</small>
                            </p>
                        </li>
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="{{ admin_url('auth/setting') }}"
                                    class="btn btn-default btn-flat">{{ trans('admin.setting') }}</a>
                            </div>
                            <div class="pull-right">
                                <a href="{{ admin_url('auth/logout') }}"
                                    class="btn btn-default btn-flat">{{ trans('admin.logout') }}</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                {{-- <li> --}}
                {{-- <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a> --}}
                {{-- </li> --}}
            </ul>
        </div>
    </nav>
</header>
