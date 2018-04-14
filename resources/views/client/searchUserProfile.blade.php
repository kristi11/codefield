@extends('client.home')
@section('userProfile')
<div class="col-xs-12">
	<div class="card text-center">
		<div class="card-content">
			<h2>{{ $data->user->name }}</h2>
			{{--<a href="{{ url(Auth::user()->slug.'/editProfile') }}">Edit</a>--}}			
 			{{-- <h5>{{ Auth::user()->website }}</h5> --}}
			<h5>{{ $data->user->email }}</h5>
			<a href="{{ url('/'.$data->user->slug.'/u/projects') }}" 
				class="btn btn-simple btn-default">Projects
				@if( $countUProjects != 0 ) 
					<span class="label label-danger">{{$countUProjects}}</span>
				@endif
			</a>
			<a href="{{ url('/'.$data->user->slug.'/u/photos') }}"
			 class="btn btn-simple btn-default">Photos
			 @if( $countUPhotos != 0 ) 
			 	<span class="label label-danger">{{$countUPhotos}}</span>
			 @endif
			</a>
		</div>			
			@yield('uProjects')
			@yield('uPhotos')
	</div>
</div>
@endsection