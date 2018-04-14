@extends('client.home')
@section('userProfile')
<div class="col-xs-12">
	<div class="card text-center">
		<div class="card-content">
			<h2>{{ Auth::user()->name }}</h2>
			{{--<a href="{{ url(Auth::user()->slug.'/editProfile') }}">Edit</a>--}}			
 			{{-- <h5>{{ Auth::user()->website }}</h5> --}}
			<h5>{{ Auth::user()->email }}</h5>
			<a href="{{ url('/'.Auth::user()->slug.'/projects') }}" 
				class="btn btn-simple btn-default">Projects
				@if( $countUserProjects != 0 ) 
					<span class="label label-danger">{{$countUserProjects}}</span>
				@endif
			</a>
			<a href="{{ url(Auth::user()->slug.'/photos') }}"
			 class="btn btn-simple btn-default">Photos
			 @if( $countUserPhotos != 0 ) 
			 	<span class="label label-danger">{{$countUserPhotos}}</span>
			 @endif
			</a>
		</div>			
			@yield('userProjects')
			@yield('userPhotos')
	</div>
</div>
@endsection