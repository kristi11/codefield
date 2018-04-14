<!DOCTYPE html>

<html lang="{{ config('app.locale') }}">

    @include('admin.admin_header')

    <body> 

        @yield('content')

        @yield('sidebar')

        @yield('email-reset')
     
    </body>

    @include('admin.admin_footer') 
   
</html>
