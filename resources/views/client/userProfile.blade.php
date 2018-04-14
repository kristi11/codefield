@extends('client.home')
@section('userProfile')
<div class="col-xs-12">
	<div class="card text-center">
		<div class="card-content">
			<h2>{{ Auth::user()->name }}</h2>
			<h5>{{ Auth::user()->website }}</h5>
			<h5>{{ Auth::user()->github_profile }}</h5>
			<a href="{{ url('/'.Auth::user()->provider_id.'/projects') }}" 
				class="btn btn-simple btn-default">Projects</a>
			<a href="{{ url(Auth::user()->provider_id.'/photos') }}"
			 class="btn btn-simple btn-default">Photos</a>
		</div>
			<div class="col-md-8 col-md-offset-2">
			<div class="card-content table-responsive">
			@yield('userProjects')
			</div>
			</div>
			<div class="col-xs-12">@yield('userPhotos')</div>	
	</div>
</div>
@endsection