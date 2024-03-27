@extends('dashboard.layouts.header')
@section('content')
<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">
    <!-- Begin page -->

    <!-- fixed-top-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-semi-dark navbar-shadow">
        <div class="navbar-wrapper">
          <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
              <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
              <li class="nav-item"><a class="navbar-brand" href="/back_end/dashboard"><img class="brand-logo" alt="Omar Admin logo" src="{{asset('assets')}}/app-assets/images/logo/logo-light-sm.png">
                  <h3 class="brand-text">{{ $user->name }}</h3></a></li>
              <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a></li>
            </ul>
          </div>
          <div class="navbar-container content">
            <div class="collapse navbar-collapse" id="navbar-mobile">
              <ul class="nav navbar-nav mr-auto float-left">
                <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu">         </i></a></li>
                <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
              </ul>
              <ul class="nav navbar-nav float-right">
                <li class="dropdown dropdown-user nav-item">
                    <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"><span class="avatar avatar-online">
                    <img src="https://ui-avatars.com/api/?name={{ $user->name }}" alt="avatar"><i></i></span>
                    <span class="user-name">{{ $user->name }}</span></a>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="user-profile"><i class="ft-user"></i> Edit Profile</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item" href="/logout"><i class="ft-power"></i> Logout</a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>

         <!-- ////////////////////////////////////////////////////////////////////////////-->


    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow " data-scroll-to-active="true">
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="nav-item"><a href="/dashboard"><i class="fa fa-home"></i><span class="menu-title">Dashboard</span></a></li>

                <li class="nav-item has-sub">
                    <a href="#">
                        <i class="fa fa-cogs"></i>
                        <span class="menu-title" data-i18n="nav.datatable_extensions.main">Management</span>
                    </a>
                    <ul class="menu-content">
                        {{-- @can('view_users') --}}
                        <li><a class="menu-item" href="/dashboard/users">Users</a></li>
                        {{-- @endcan --}}

                        {{-- @can('view_roles') --}}
                        <li><a class="menu-item" href="/dashboard/roles">Roles</a></li>
                        {{-- @endcan --}}
                    </ul>
                </li>

                <!-- Show Categories -->
                <li class="nav-item has-sub">
                    <a href="#">
                        <i class="fa-solid fa-bars"></i>
                        <span class="menu-title" data-i18n="nav.datatable_extensions.main">services</span>
                    </a>
                    <ul class="menu-content">
                        {{-- @can('view_categories') --}}
                        <li><a class="menu-item" href="{{ route('services.index') }}">Show All</a></li>
                        <li><a class="menu-item" href="{{ route('services.create') }}">Create</a></li>
                        {{-- @endcan --}}
                    </ul>
                </li>

                <li><a class="menu-item" href="{{ route('orders.index') }}">orders</a></li>



                     <!-- Show Categories -->
                     <li class="nav-item has-sub">
                        <a href="#">
                            <i class="fa-solid fa-bars"></i>
                            <span class="menu-title" data-i18n="nav.datatable_extensions.main">Categories</span>
                        </a>
                        <ul class="menu-content">
                            {{-- @can('view_categories') --}}
                            <li><a class="menu-item" href="{{ route('categories.index') }}">Show All</a></li>
                            <li><a class="menu-item" href="{{ route('categories.create') }}">Create</a></li>
                            {{-- @endcan --}}
                        </ul>
                    </li>


                  <!-- Show sub Category -->
                  <li class="nav-item has-sub">
                    <a href="#">
                        <i class="fa-brands fa-medium"></i>
                                                <span class="menu-title" data-i18n="nav.datatable_extensions.main">Sub Category</span>
                    </a>
                    <ul class="menu-content">
                        {{-- @can('view_categories') --}}
                        <li><a class="menu-item" href="{{ route('subCategory.index') }}">Show All</a></li>
                        <li><a class="menu-item" href="{{ route('subCategory.create') }}">Create</a></li>
                        {{-- @endcan --}}
                    </ul>
                </li>


                <!-- Show Blog -->
                <li class="nav-item has-sub">
                    <a href="#">
                        <i class="fa-solid fa-blog"></i>
                        <span class="menu-title" data-i18n="nav.datatable_extensions.main">Blog</span>
                    </a>
                    <ul class="menu-content">
                        {{-- @can('view_blog') --}}
                        <li><a class="menu-item" href="{{ route('blog.index') }}">Show All</a></li>
                        <li><a class="menu-item" href="{{ route('blog.create') }}">Create</a></li>
                        {{-- @endcan --}}
                    </ul>
                </li>

                <!-- Our Team -->
                <li class="nav-item has-sub">
                    <a href="#">
                        <i class="fa-solid fa-people-group"></i>
                        <span class="menu-title" data-i18n="nav.datatable_extensions.main">Our Team</span>
                    </a>
                    <ul class="menu-content">
                        {{-- @can('view_ourTeam') --}}
                        <li><a class="menu-item" href="{{ route('ourTeam.index') }}">Home</a></li>
                        {{-- @endcan --}}

                        {{-- @can('create_ourTeam') --}}
                        <li><a class="menu-item" href="{{ route('ourTeam.create') }}">Create</a></li>
                        {{-- @endcan --}}
                    </ul>
                </li>

                {{-- <!-- Country -->
                <li class="nav-item has-sub">
                    <a href="#">
                        <i class="fa fa-flag"></i>
                        <span class="menu-title" data-i18n="nav.datatable_extensions.main">Country</span>
                    </a>
                    <ul class="menu-content">
                        @can('view_country')
                        <li><a class="menu-item" href="{{ route('country.index') }}">Home</a></li>
                        @endcan

                        @can('create_country')
                        <li><a class="menu-item" href="{{ route('country.create') }}">Create</a></li>
                        @endcan
                    </ul>
                </li> --}}

                <!-- Our Client -->
                <li class="nav-item has-sub">
                    <a href="#">
                        <i class="fa fa-users"></i>
                        <span class="menu-title" data-i18n="nav.datatable_extensions.main">Our Client</span>
                    </a>
                    <ul class="menu-content">
                        {{-- @can('view_ourClient') --}}
                        <li><a class="menu-item" href="{{ route('ourClient.index') }}">Home</a></li>
                        {{-- @endcan --}}

                        {{-- @can('create_ourClient') --}}
                        <li><a class="menu-item" href="{{ route('ourClient.create') }}">Create</a></li>
                        {{-- @endcan --}}
                    </ul>
                </li>

                <!-- Our Team -->
                <li class="nav-item has-sub">
                    <a href="#">
                        <i class="fa-solid fa-list-check"></i>
                        <span class="menu-title" data-i18n="nav.datatable_extensions.main">Projects</span>
                    </a>
                    <ul class="menu-content">
                        {{-- @can('view_projects') --}}
                        <li><a class="menu-item" href="{{ route('projects.index') }}">Home</a></li>
                        {{-- @endcan --}}

                        {{-- @can('create_projects') --}}
                        <li><a class="menu-item" href="{{ route('projects.create') }}">Create</a></li>
                        {{-- @endcan --}}
                    </ul>
                </li>
            </ul>

        </div>
      </div>

      <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
                  <h3 class="content-header-title mb-0 d-inline-block">@yield('page-title')</h3>
                  <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active"> @yield('page-title')</li>
                      </ol>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <div class="content-body"><!-- Sales stats -->


            @yield('body')




            @yield('footer')

        @endsection
