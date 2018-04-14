@extends('client.home')
@section('userProfile')
<div class="col-xs-12">
	<div class="card text-center">
		<div class="card-content">
			<span><h2>{{ Auth::user()->name }}</h2> <a href="">Edit</a></span>
			<h5>{{ Auth::user()->website }}</h5>
			<h5>{{ Auth::user()->github_profile }}</h5>
			<a href="{{ url('/'.Auth::user()->provider_id.'/projects') }}" 
				class="btn btn-simple btn-default">Projects</a>
			<a href="{{ url(Auth::user()->provider_id.'/photos') }}"
			 class="btn btn-simple btn-default">Photos</a>
		</div>			
			@yield('userProjects')
			@yield('userPhotos')
	</div>
</div>
@endsection