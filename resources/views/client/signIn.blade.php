@extends('client.client')
@include('errors')
@section('signIn')
<style type="text/css">
     .off-canvas-sidebar .nav {
        background-color: white;
        height: 100vh;
        margin-top: 0px;
    }
</style>
<nav class="navbar hidden-md hidden-lg">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="logo">
            <h4 style="font-weight: bold; padding-left: 10px;" class="simple-text">
              <img alt="Codefield" src="/storage/codefield_logo/menu_logo.png">
              <span style="position: relative;top: 2px;">{{ config('app.name') }}</span>
            </h4>
          </div>
        </div>
        </div>
        <div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
{{--             <img alt="Codefield Brand" src="{{asset('/public/img/whitebg.jpg')}}">
 --}}   <ul class="nav navbar-nav">
        <h1 class="card-title text-center" style="font-family: 'Alfa Slab One', serif;">Services</h1>
            <table class="table table-hover" >
                <tbody>
                    <tr>
                        
                        <td>
                            <h3><i class="fa fa-user fa-5x"></i> Portfolio</h3>
                            <h5>
                                Your profile works as a portfolio showing you latest work
                            </h5>
                        </td>
                    </tr>
                    <tr>                        
                        <td>
                            <h3><i class="fa fa-file-code-o fa-5x"></i> Submit Projects</h3>
                            <h5>
                                Have your work seen across fellow developers and designers
                            </h5>
                        </td>
                    </tr>
                    <tr>                      
                        <td>
                            <h3><i class="fa fa-camera fa-5x"></i> Upload Photos</h3>
                            <h5>
                                Share your photography with others like you
                            </h5>
                        </td>
                    </tr>
                    <tr>                       
                        <td>
                            <h3><i class="fa fa-download fa-5x"></i> Unlimited downloads</h3>
                            <h5>
                                Download everything accross the platform completely free
                            </h5>
                        </td>
                    </tr>
                    <tr>                       
                        <td>
                            <h3><i class="fa fa-font fa-5x"></i> Google Fonts</h3>
                            <h5>
                                Take advantage of the latest Google Fonts.Small descriptive tutorial available
                            </h5>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<div class="container">
    @if($flash = session('message'))
    <div class="text-center"> @include('flashMessages.flashMessage')</div>
  @endif
  <div  style="margin-bottom: 100px;" class="col-xs-12 col-sm-6 col-md-6 hidden-sm hidden-xs">
    <div  class="card card-profile">
    <div class="content">
        <h1 class="card-title" style="font-family: 'Alfa Slab One', serif;">What you get</h1>
            <div class="card-content table-responsive text-left ht">
                <table class="table table-hover" >
                    <tbody>
                        <tr>
                            <td><i class="fa fa-user fa-5x"></i></td>
                            <td>
                                <h3>Portfolio</h3>
                                <h5>
                                    Your profile works as a portfolio showing you latest work
                                </h5>
                            </td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-file-code-o fa-5x"></i></td>
                            <td>
                                <h3>Submit Projects</h3>
                                <h5>
                                    Have your work seen across fellow developers and designers
                                </h5>
                            </td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-camera fa-5x"></i></td>
                            <td>
                                <h3>Upload Photos</h3>
                                <h5>
                                    Share your photography with others like you
                                </h5>
                            </td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-download fa-5x"></i></td>
                            <td>
                                <h3>Unlimited downloads</h3>
                                <h5>
                                    Download everything accross the platform completely free
                                </h5>
                            </td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-font fa-5x"></i></td>
                            <td>
                                <h3>Google Fonts</h3>
                                <h5>
                                    Take advantage of the latest Google Fonts.Small descriptive tutorial available
                                </h5>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
  <div style="margin-bottom: 100px;"  class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-lg-6 col-lg-offset-0 col-md-offset-0">
    <div class="card card-profile">
    <div class="content">
        <h1 class="card-title" style="font-family: 'Alfa Slab One', serif;">{{ config('app.name') }}</h1>
        <h5 class="card-content">
            Codefield is a small new platform helping developers,designers and even photographers find tools that will make completing their next project a whole lot easier.

            From photos to simple html templates to different 
            more complex projects you'll find it all in here.
        </h5>
        <h5 class="card-content">
            Sign in to {{config("app.name")}} to explore what we have to offer.If you dont have an account, one will be created automatically based on your provider
        </h5>
                <div class="card-content">                          
    <a href="auth/facebook" class="btn  btn-block btn-info">
        <i class="fa fa-facebook" aria-hidden="true"></i> sign in with facebook</a>
    <a href="auth/github" class="btn  btn-block btn-danger">
        <i class="fa fa-github" aria-hidden="true"></i> sign in with github</a>
    </div>
        </div>
    </div>
</div>
</div>
    <nav class="scroll navbar-fixed-bottom">       
        <a class="btn btn-simple btn-default" 
            href="{{ url('/') }}">&copy; <script>document.write(new Date().getFullYear())</script> Codefield
        </a>               
        <a class="btn btn-simple btn-default" 
        href="{{ url('/privacyPolicy') }}" 
        rel="noopener" 
        target="_blank">
            Privacy
        </a>
        <a class="btn btn-simple btn-default" 
        href="{{ url('/termsAndConditions') }}" 
        rel="noopener" 
        target="_blank">
            Terms
        </a> 
        <a class="btn btn-simple btn-default" 
        href="{{ url('/cookiePolicy') }}" 
        rel="noopener" 
        target="_blank">
            Cookies
        </a>        
    </nav>
@endsection