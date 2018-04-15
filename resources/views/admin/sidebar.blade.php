@extends('admin.app')
@section('sidebar')

<div class="wrapper" id="app">

  @if (Auth::guest())
  
    <a class="" href="{{ route('login') }}"></a>
   
  @else
  @if($flash = session('message'))
    <div class="text-center"> @include('flashMessages.flashMessage')</div>
  @endif
{{-- <flash message="{{ session('flash') }}"></flash> --}}
<div class="sidebar" data-color="{{ $item->app_color }}" data-image="/img/sidebar-3.jpg">

  <div class="logo">
    <a href="" class="simple-text">
      <img alt="Codefield Brand" src="/storage/codefield_logo/menu_logo.png">
      <span style="position: relative;top: 2px;">{{ config('app.name') }}</span>
    </a>
  </div>

  <div class="sidebar-wrapper">

    <div class="user">
      <div class="adjust">

          @if(strlen(Auth::user()->profile)<10)
            <img class="photo" src="/storage/default_profile/default_profile_pic.png" alt="codefield admin">
          @else
            <img class="photo size" src="/storage/profiles/{{(Auth::user()->profile)}}" alt="codefield admin">
          @endif
      </div>
    <ul class="nav">
      <li>
        <a data-toggle="collapse" href="#profile" class="">
          {{Auth::user()->name}} <b class="caret"></b>
        </a>
      </li>
    <div class="collapse" id="profile">
      <li>
        <ul class="nav" style="margin:0px;padding: 0px;">
      <li>
        <a href="{{ url('/admin/administrators/'.Auth::user()->id.'/edit_admin') }}"> edit profile</a>
      </li>
        </ul>
      </li>
    </div>
    </ul>
    </div> 


    <ul class="nav">
      <li {{ setActive('admin/dashboard') }}>
        <a href="{{ url('/admin/dashboard') }}">
          <i class="material-icons">dashboard</i>
          <p>Dashboard</p>
        </a>
      </li>
@can('edit_projects')
      <li{{ setActive('admin/projects') }}>
        <a href="{{ asset('admin/projects') }}">
          <i class="material-icons">insert_drive_file</i>
          <p>Projects <span class="label label-{{$item->font_color}}">{{-- {{$countProjects}} --}}</span></p>
        </a>
      </li>
@endcan

@can('edit_projects')
      <li{{ setActive('admin/submitted_projects') }}>
        <a href="{{ asset('admin/submitted_projects') }}">
          <i class="material-icons">note_add</i>
          <p>Requests 
            @if ($pending_projects != 0)
              <span class="label label-danger">New</span>
            @endif
          </p>
        </a>
      </li>
@endcan

@can('edit_gallery')
       <li{{ setActive('admin/gallery') }}>
        <a href="{{ asset('admin/gallery') }}">
          <i class="material-icons">image</i>
          <p>Gallery <span class="label label-{{$item->font_color}}">{{ $countImages }}</span></p>
        </a>
      </li>
@endcan

@can('edit_settings')
      <li{{ setActive('admin/settings') }}>
        <a href="{{ asset('admin/settings') }}">
          <i class="material-icons">settings</i>
          <p>Settings</p>
        </a>
      </li>
@endcan

@can('edit_users')
      <li{{ setActive('admin/administrators') }}>
        <a href="{{ asset('admin/administrators') }}">
          <i class="material-icons">account_circle</i>
          <p>Administrators <span class="label label-{{$item->font_color}}">{{ $countAdmins }} </span></p>
        </a>
      </li>
@endcan

@can('edit_subscribers')
      <li{{ setActive('admin/subscribers') }}>
        <a href="{{ asset('admin/subscribers') }}">
          <i class="material-icons">group</i>
          <p>Subscribers <span class="label label-{{$item->font_color}}">{{ $countSubscribers }}</span></p>
        </a>
      </li>
@endcan

      <li>
        <a href="{{ asset('admin/trash/') }}">
          <i class="material-icons">delete</i>
          <p>Trash {{-- <b class="caret"></b> --}}
          </p>
        </a>
{{--       <ul>
        <div class="collapse" id="trash" aria-expanded="false">
          <ul class="nav">
            <li{{ setActive('admin/deleted_admins') }}>
              <a href="{{ asset('admin/deleted_admins/') }}"><i class="material-icons">account_box</i> <p>Administrators</p></a>
            </li>
            <li{{ setActive('admin/deleted_projects') }}>
              <a href="{{ asset('admin/deleted_projects/') }}"><i class="material-icons">insert_drive_file</i> <p>Projects</p></a>
            </li>
          </ul>
        </div>
      </ul> --}}
      </li>

      @can('edit_users')
        <li{{ setActive('admin/decompose') }}>
          <a target="_blank" href="{{ asset('admin/decompose') }}">
            <i class="material-icons">settings_input_component</i>
            <p>App Packages</p>
          </a>
        </li>
      @endcan

      @can('edit_users')
        <li{{ setActive('admin/adminer') }}>
          <a href="{{ asset('/adminer') }}" target="_blank" rel="noopener">
            <i class="material-icons">list</i>
            <p>Adminer <span class="label label-{{$item->font_color}}"></span></p>
          </a>
        </li>
      @endcan

    </ul>
  </div>
  <div class="sidebar-background" style="background-image: url('/img/sidebar-3.jpg') "></div>


</div>


<div class="main-panel">

      <nav class="navbar navbar-transparent navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand">{{-- {{$title}} --}}</a>
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li>
                <a href="{{ asset('/register') }}" class="dropdown-toggle" rel="tooltip" data-placement="bottom" title="" data-original-title="Add administrator">
                  <i class="material-icons">person_add</i>
                  <p class="hidden-lg hidden-md">Add administrator</p>
                </a>
              </li>
              <li>
                <a href="{{ url('/admin/projects/create') }}" class="dropdown-toggle" rel="tooltip" data-placement="bottom" title="" data-original-title="Create project">
                  <i class="material-icons">subject</i>
                  <p class="hidden-lg hidden-md">Create project</p>
                </a>
              </li>
              <li>
                <a href="{{ url('/admin/gallery/add') }}" class="dropdown-toggle" rel="tooltip" data-placement="bottom" title="" data-original-title="Add tags">
                  <i class="material-icons">label</i>
                  <p class="hidden-lg hidden-md">Add tags</p>
                </a>
              </li>
              <li>
                <a href="https://us15.admin.mailchimp.com/campaigns/wizard/neapolitan?id=134033" target="_blank" class="dropdown-toggle" rel="tooltip" data-placement="bottom" title="" data-original-title="Create campaign">
                  <i class="material-icons">contact_mail</i>
                  <p class="hidden-lg hidden-md">Create campaign</p>
                </a>
              </li>
               <li>
                <a target="_blank" href="{{ url('/') }}" class="dropdown-toggle" rel="tooltip" data-placement="bottom" title="" data-original-title="Go to website">
                  <i class="material-icons">web</i>
                  <p class="hidden-lg hidden-md">Go to website</p>
                </a>
              </li>
               <li>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();" class="dropdown-toggle" rel="tooltip" data-placement="bottom" title="" data-original-title="Logout">
                  <i class="material-icons">power</i>
                  <p class="hidden-lg hidden-md">Logout</p>
                </a>
              </li>
              <li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
              </li>
              {{-- <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="material-icons">notifications</i>
                    <span class="notification">5</span>
                    <p class="hidden-lg hidden-md">Notifications</p>
                  </a>
                  <ul class="dropdown-menu">
                  <li><a href="#">Mike John responded to your email</a></li>
                  <li><a href="#">You have 5 new tasks</a></li>
                  <li><a href="#">You're now friend with Andrew</a></li>
                  <li><a href="#">Another Notification</a></li>
                  <li><a href="#">Another One</a></li>
                  </ul>
              </li> --}}
            </ul>

            <form class="navbar-form navbar-right" role="search" method="GET" action="{{ url('search') }}">
                <div class="form-group form-search is-empty">
                    <input type="text" name="query" id="query" class="form-control" placeholder="Search" required="">
                    <span class="material-input"></span>
                <span class="material-input"></span></div>
                <button type="submit" class="btn btn-white btn-round btn-just-icon hidden-xs" id="search_btn">
                    <i class="material-icons">search</i>
                </button>
            </form>
          </div>
        </div>
      </nav>

          <div class="content">
              <div class="row">
                @yield('admin_dashboard')
                @yield('projects')
                @yield('main_banner')
                @yield('Subscribers')
                @yield('trash')
                @yield('administrators')
                @yield('edit_admin')
                @yield('edit_project')
                @yield('Skills')
                @yield('register')
                @yield('create_project')
                @yield('empty_trash')
                @yield('empty_projects')
                @yield('gallery')
                @yield('add')
                @yield('edit_tag')
                @yield('edit_category')
                @yield('search_results')
                @yield('checkForPermission')
                @yield('pending_projects')
             </div>
          </div>
      {{-- <footer class="footer">
              <div class="container-fluid">
                  <nav class="pull-left">
                      <ul>
                          <li>
                              <a href="#">
                                  Home
                              </a>
                          </li>

                      </ul>
                  </nav>
                  <p class="copyright pull-right">
                      &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                  </p>
              </div>
          </footer> --}}
      </div>




</div>

@endif
@endsection
