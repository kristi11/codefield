
@extends('client.client')
@section('client_sidebar')
<style>
  a:active, a:hover {
   color: #4caf50;
   opacity: 0.8;
}

a {
    color: #4caf50;
}
</style>
<div class="wrapper" id="app">
  @if (Auth::guest())
    <a class="" href="{{ route('notLoggedIn') }}"></a>
  @else
  @if($flash = session('message'))
    <div class="text-center"> @include('flashMessages.flashMessage')</div>
  @endif
<div class="sidebar" data-color="{{ $item->app_color }}" data-image="/img/sidebar-1.jpg">
  <div class="logo">
    <a href="" class="simple-text">
      <img alt="Codefield Brand" src="/storage/codefield_logo/menu_logo.png">
      <span style="position: relative;top: 2px;">{{ config('app.name') }}</span>
    </a>
  </div>
  <div class="sidebar-wrapper">
    <div class="user">
      <div class="">
            <img class="photo" src="{{ url(Auth::user()->avatar) }}" alt="{{Auth::user()->name}}">
      </div>
            <a class="btn btn-simple btn-sm btn-{{ $item->font_color }}" 
              type="button" 
              href="{{ url('/'.Auth::user()->slug.'/projects') }}">
               {{Auth::user()->name}}
           </a> 
      </div> 
    <ul class="nav">
      <li {{ setActive('/dashboard') }}>
        <a href="{{ url('/dashboard') }}">
          <i class="material-icons">dashboard</i>
          <p>Dashboard</p>
        </a>
      </li>
{{--       <li {{ setActive('/submits') }}>
        <a href="{{ url('/submits') }}">
          <i class="material-icons">work</i>
          <p>Submits
          @if( $submitted_projects != 0 )  
          <span class="label label-{{$item->font_color}}">
            {{ $submitted_projects }}
          </span>
          @endif
          </p>
        </a>
      </li> --}}

      <li{{ setActive('/projects') }}>
        <a href="{{ asset('/projects') }}">
          <i class="material-icons">widgets</i>
          <p>Projects <span class="label label-{{$item->font_color}}">{{$countProjects}}</span></p>
        </a>
      </li>

       <li{{ setActive('/photos') }}>
        <a href="{{ asset('/photos') }}">
          <i class="material-icons">image</i>
          <p>Photos <span class="label label-{{$item->font_color}}">{{-- {{ $countImages }} --}}</span></p>
        </a>
      </li>

      <li{{ setActive('/googlefonts') }}>
        <a href="{{ asset('/googlefonts') }}">
          <i class="material-icons">font_download</i>
          <p>Google fonts <span class="label label-{{$item->font_color}}">{{count($result->items)}}</span></p>
        </a>
      </li>

      <li{{ setActive('/favorites') }}>
        <a href="{{ asset('/favorites') }}">
          <i class="material-icons">favorite</i>
          <p>Favorites
          @if( $countFavorites != 0 ) 
          
          <span class="label label-{{$item->font_color}}">
            {{ $countFavorites }}
          </span>
          @endif
      </p>
        </a>
      </li>

      <li{{ setActive('/license') }}>
        <a href="{{ asset('/license') }}">
          <i class="material-icons">book</i>
          <p>Licenses</p>
        </a>
      </li>

      <li{{ setActive('/guidelines') }}>
        <a href="{{ asset('/guidelines') }}">
          <i class="material-icons">subject</i>
          <p>Guidelines</p>
        </a>
      </li>

      <li class="active">
        <a href="#">
        <p>Contact us at support@codefield.io</p>
      </a>
      </li>
  </div>
  <div class="sidebar-background" style="background-image: url('/img/sidebar-1.jpg') "></div>
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
            <a class="navbar-brand" href="#">{{$title}}</a>
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
               <li>
                <a href="{{ url('/addPhotos') }}" class="dropdown-toggle" rel="tooltip" data-placement="bottom" title="" data-original-title="Add images">
                  <i class="material-icons">add_a_photo</i>
                  <p class="hidden-lg hidden-md">Add photos</p>
                </a>
              </li>
              <li>
                <a href="{{ url('submit_project') }}" class="dropdown-toggle" rel="tooltip" data-placement="bottom" title="" data-original-title="Submit a project">
                  <i class="material-icons">send</i>
                  <p class="hidden-lg hidden-md">Submit Project</p>
                </a>
              </li>
               <li>
                <a href="" hidden="">
                <form style="padding: 0px;margin: 0px;" class="" action="{{ url('emailNotifications/'.Auth::id()) }}" method="POST" >
                  {{ csrf_field() }}
                  <input class="" type="hidden" name="email_notifications" />
                  @if(Auth::user()->email_notifications == 0)
                <button style="padding: 0px;margin: 0px;text-transform: capitalize;" type="submit" class="dropdown-toggle btn btn-simple btn-xs" rel="tooltip" data-placement="bottom" title="" data-original-title="Enable email notifications">
                  <i class="material-icons">notifications_off</i>
                  <p class="hidden-lg hidden-md">{{strtolower('Email notifications Off')}}</p>
                </button>
                @else
                   <button style="padding: 0px;margin: 0px;text-transform: capitalize;" type="submit" class="dropdown-toggle btn btn-simple btn-xs btn-info" rel="tooltip" data-placement="bottom" title="" data-original-title="Disable email notifications">
                  <i class="material-icons">notifications_active</i>
                  <p class="hidden-lg hidden-md">{{strtolower('Email notifications On')}}</p>
                </button>
                @endif
              </form>
              </a>
              </li>
               <li>
                <a href="{{ url('clientLogout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();" class="dropdown-toggle " rel="tooltip" data-placement="bottom" title="" data-original-title="Logout">
                  <i class="material-icons">power</i>
                  <p class="hidden-lg hidden-md">Logout</p>
                </a>
              </li>
              <li>
                <form id="logout-form" action="{{ url('clientLogout') }}" method="POST" style="display: none;">
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
            <form class="navbar-form navbar-right" role="search" method="GET" action="{{ url('clientSearch') }}">
                <div class="form-group form-search is-empty">
                    <input type="text" name="query" id="query" class="form-control" placeholder="Search" required="" aria-label="search">
                    <span class="material-input"></span>
                <span class="material-input"></span></div>
                <button type="submit" class="btn btn-white btn-round btn-just-icon hidden-xs reksearchloader" id="search_btn">
                    <i class="material-icons">search</i>
                </button>
                <div style="margin-left: 0px;" class="row">
                <div style="width: 30%;">
                    <a href="https://www.algolia.com/" target="_blank" rel="noopener">
                  <img src="/storage/algolia_logo/algolia-logo-light.svg" alt="codefield algolia logo">
                </a>
              </div>
            </div>
            </form>
          </div>
        </div>
      </nav>
          <div class="content">
              <div class="row">
                @yield('dashboard')
                @yield('widgets')
                @yield('empty')
                @yield('showWidget')
                @yield('gallery')
                @yield('showImage')
                @yield('googleFonts')
                @yield('favorites')
                @yield('noCategories')
                @yield('noProjectCategories')
                @yield('clientSearchResults')
                @yield('license')
                @yield('submit_request')
                @yield('submits')
                @yield('addPhotos')
                @yield('userProfile')
                @yield('editClient')
                @yield('guidelines')
              </div>
          </div>
      </div>
@endif
</div>
<!-- Load Facebook SDK for JavaScript -->
{{-- <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
  page_id="200471593898409"
  theme_color="#13cf13"
  greeting_dialog_display="hide">
</div> --}}
@endsection

