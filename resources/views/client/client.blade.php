<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  @include('client.client_header')
    <body>
        
          @yield('home_content')

          @yield('signIn')

          @yield('g_project')

          @yield('g_photo')

          @yield('client_sidebar')

          @include('client.client_footer')
          
    </body>
</html>