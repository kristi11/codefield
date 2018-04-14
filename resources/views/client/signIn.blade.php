@extends('client.client')
@include('errors')
@section('signIn')
<div style="" class="container">
	<div class="login-container">
	@if($flash = session('message'))
    <div class="text-center"> @include('flashMessages.flashMessage')</div>
  @endif
  <div class="col-xs-12 col-sm-6 col-md-6 col-sm-offset-3">
	<div class="card card-profile">
    <div class="card-avatar">
        <a href="#pablo">
            <img class="img" src="storage/codefield_logo/signin_logo.png" alt="Codefield logo">
        </a>
    </div>
    <div class="content">
        <h4 class="card-title" style="font-family: 'Alfa Slab One', serif;font-size: 32px;">{{ config('app.name') }}</h4>
        <p class="card-content category">
            Sign in to {{config("app.name")}} to explore what we have to offer.If you dont have an account, one will be created automatically based on your provider
        </p>
                                    		
	<a href="auth/facebook" class="btn btn-flat btn-round btn-info">
		<i class="fa fa-facebook" aria-hidden="true"></i> sign in with facebook</a>
	<a href="auth/github" class="btn btn-flat btn-round btn-danger">
		<i class="fa fa-github" aria-hidden="true"></i> sign in with github</a>
        </div>
    </div>
</div>
</div>
</div>
<footer class="footer text-center md-space-up">
    <div class="container-fluid">
        <ul class="nav navbar-nav">
            <li>
                <a href="#">&copy; <script>document.write(new Date().getFullYear())</script></a>
            </li>
            <li>
                <a href="{{ url('/') }}">Codefield</a>
            </li>
            <li>
                <a href="{{ url('/privacyPolicy') }}" rel="noopener" target="_blank">Privacy</a>   
            </li>
            <li>
                <a href="{{ url('/termsAndConditions') }}" rel="noopener" target="_blank">Terms</a>   
            </li>
            <li>
                <a href="{{ url('/cookiePolicy') }}" rel="noopener" target="_blank">Cookies</a>   
            </li>
        </ul>
    </div>
</footer>
@endsection