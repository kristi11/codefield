@extends('client.home')
@section('userProfile')
<div class="col-xs-12">
	<div class="card text-center">
		<div class="card-content">
			<div class="user">
			<img style="height:100px;width: 100px;" class="photo" src="{{ url(Auth::user()->avatar) }}" alt="{{Auth::user()->name}}">
		</div>
			<h2>{{ $user->name }}</h2>
			{{--<a href="{{ url(Auth::user()->slug.'/editProfile') }}">Edit</a>--}}			
 			{{-- <h5>{{ Auth::user()->website }}</h5> --}}
			<h5>{{ $user->email }}</h5>
			<a href="{{ url('/'.$user->slug.'/u/projects') }}" 
				class="btn btn-simple btn-default">Projects
				@if( $countUProjects != 0 ) 
					<span class="label label-danger">{{$countUProjects}}</span>
				@endif
			</a>
			<a href="{{ url('/'.$user->slug.'/u/photos') }}"
			 class="btn btn-simple btn-default">Photos
			 @if( $countUPhotos != 0 ) 
			 	<span class="label label-danger">{{$countUPhotos}}</span>
			 @endif
			</a>
		</div>			
			@yield('uProjects')
			@yield('uPhotos')
	</div>
	<div class="text-center">{{ $data->links('admin.mdl-bootstrap') }}</div>
</div>
@endsection