@extends('client.home')
@section('userProfile')
<div class="col-xs-12">
	<div class="card text-center">
		<div class="card-content">
			<h2>{{ Auth::user()->name }}</h2>
			<a href="{{ url('editUserProfile/'.Auth::user()->slug) }}">Edit</a>
			<h5>{{ Auth::user()->website }}</h5>
			<h5>{{ Auth::user()->github_profile }}</h5>
			<a href="{{ url('/'.Auth::user()->slug.'/projects') }}" 
				class="btn btn-simple btn-default">Projects</a>
			<a href="{{ url(Auth::user()->slug.'/photos') }}"
			 class="btn btn-simple btn-default">Photos</a>
		</div>			
			@yield('userProjects')
			@yield('userPhotos')
	</div>
</div>
@endsection