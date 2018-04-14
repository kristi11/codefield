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
{{-- 			@if(url() == url('/'.Auth::user()->provider_id.'/projects'))
 --}}			<div class="col-md-8 col-md-offset-2">
			<div class="card-content table-responsive">
{{-- 			@include('client.partials.userProjects')
 --}}			@yield('userProjects')
			</div>
			</div>
{{-- 			@elseif(url() == url('/'.Auth::user()->provider_id.'/photos'))
 --}}				{{-- @include('client.partials.userPhotos') --}}
 @yield('userPhotos')
{{-- 			@endif
 --}}		
	</div>
</div>
@endsection