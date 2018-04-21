<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  @include('client.client_header')
    <body>
        
          @yield('home_content')

          @yield('signIn')

          @yield('client_sidebar')

          @include('client.client_footer')
          
          <script async>(function(s,u,m,o,j,v){j=u.createElement(m);v=u.getElementsByTagName(m)[0];j.async=1;j.src=o;j.dataset.sumoSiteId='725f2cfbfefd69b0567c105f4377efe0a73844b86ff6bbddf5acea5d5207ac68';v.parentNode.insertBefore(j,v)})(window,document,'script','//load.sumo.com/');</script>
    </body>
</html>