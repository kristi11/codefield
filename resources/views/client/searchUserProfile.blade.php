@extends('client.home')
@section('userProfile')
<div class="col-xs-12">
	<div class="card text-center">
		<div class="card-content">
			<h2>{{ $data->name }}</h2>
			{{--<a href="{{ url(Auth::user()->slug.'/editProfile') }}">Edit</a>--}}			
 			{{-- <h5>{{ Auth::user()->website }}</h5> --}}
			<h5>{{ $data->email }}</h5>
			<a href="{{ url('/'.$data->slug.'/u/projects') }}" 
				class="btn btn-simple btn-default">Projects
				@if( $countUserProjects != 0 ) 
					<span class="label label-danger">{{$countUProjects}}</span>
				@endif
			</a>
			<a href="{{ url('/'.$data->slug.'/u/photos') }}"
			 class="btn btn-simple btn-default">Photos
			 @if( $countUserPhotos != 0 ) 
			 	<span class="label label-danger">{{$countUPhotos}}</span>
			 @endif
			</a>
		</div>			
			@yield('uProjects')
			@yield('uPhotos')
	</div>
</div>
@endsection