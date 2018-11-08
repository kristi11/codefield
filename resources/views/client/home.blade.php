
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
<div class="sidebar" data-color="{{ $item->app_color }}" {{-- data-image="/img/sidebar-1.jpg" --}}>
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
              href="{{ url('/'.Auth::user()->slug.'/products') }}">
               {{Auth::user()->name}}
           </a>
      </div>
    <ul class="nav">
      <li {{ setActive('/') }}>
        <a href="{{ url('/') }}">
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

      <li{{ setActive('products') }}>
        <a href="{{ asset('/products') }}">
          <i class="material-icons">widgets</i>
          <p>Products {{-- <span class="label label-{{$item->font_color}}">{{$countProjects}}</span> --}}</p>
        </a>
      </li>

       <li{{ setActive('photos') }}>
        <a href="{{ asset('/photos') }}">
          <i class="material-icons">image</i>
          <p>Photos {{-- <span class="label label-{{$item->font_color}}">{{ $countImages }}</span> --}}</p>
        </a>
      </li>

      <li{{ setActive('googlefonts') }}>
        <a href="{{ asset('/googlefonts') }}">
          <i class="material-icons">font_download</i>
          <p>Google fonts {{-- <span class="label label-{{$item->font_color}}">{{count($result->items)}}</span> --}}</p>
        </a>
      </li>

{{--       <li{{ setActive('favorites') }}>
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
      </li> --}}

      <li{{ setActive('license') }}>
        <a href="{{ asset('/license') }}">
          <i class="material-icons">book</i>
          <p>Licenses</p>
        </a>
      </li>

      <li{{ setActive('guidelines') }}>
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
  {{-- <div class="sidebar-background" style="background-image: url('/img/sidebar-1.jpg') "></div> --}}
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
            <a class="navbar-brand hidden-xs" href="#">{{$title}}</a>
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
               <li>
                <a href="{{ url('/addPhotos') }}" class="dropdown-toggle" rel="tooltip" data-placement="bottom" title="" data-original-title="Post photos">
                  <i class="material-icons">add_a_photo</i>
                  <p class="hidden-lg hidden-md">Post photos</p>
                </a>
              </li>
              {{-- <li>
                <a href="{{ url('submit_product') }}" class="dropdown-toggle" rel="tooltip" data-placement="bottom" title="" data-original-title="Submit a product">
                  <i class="material-icons">send</i>
                  <p class="hidden-lg hidden-md">Submit Product</p>
                </a>
              </li> --}}
              <li>
                <a href="{{ url('/post') }}" class="dropdown-toggle" rel="tooltip" data-placement="bottom" title="" data-original-title="Post a Product">
                  <i class="material-icons">subject</i>
                  <p class="hidden-lg hidden-md">Post a Product</p>
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
            <div class="aa-input-container" id="aa-input-container">
    <input type="search" id="aa-search-input" class="aa-input-search" placeholder="Search Products"
    name="query" autocomplete="off" />
    <svg class="aa-input-icon" viewBox="654 -372 1664 1664">
        <path d="M1806,332c0-123.3-43.8-228.8-131.5-316.5C1586.8-72.2,1481.3-116,1358-116s-228.8,43.8-316.5,131.5  C953.8,103.2,910,208.7,910,332s43.8,228.8,131.5,316.5C1129.2,736.2,1234.7,780,1358,780s228.8-43.8,316.5-131.5  C1762.2,560.8,1806,455.3,1806,332z M2318,1164c0,34.7-12.7,64.7-38,90s-55.3,38-90,38c-36,0-66-12.7-90-38l-343-342  c-119.3,82.7-252.3,124-399,124c-95.3,0-186.5-18.5-273.5-55.5s-162-87-225-150s-113-138-150-225S654,427.3,654,332  s18.5-186.5,55.5-273.5s87-162,150-225s138-113,225-150S1262.7-372,1358-372s186.5,18.5,273.5,55.5s162,87,225,150s113,138,150,225  S2062,236.7,2062,332c0,146.7-41.3,279.7-124,399l343,343C2305.7,1098.7,2318,1128.7,2318,1164z" />
    </svg>
</div>
</form>
{{--             <form class="navbar-form navbar-right" role="search" method="GET" action="{{ url('clientSearch') }}">
                <div class="form-group form-search is-empty">
                    <input type="text" name="query" id="query" class="form-control" placeholder="Search Products" required="" aria-label="search">
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
            </form> --}}
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
                @yield('edit_PAvatar')
                @yield('edit_PFile')
                @yield('edit_userProject')
                @yield('create_userProject')
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

