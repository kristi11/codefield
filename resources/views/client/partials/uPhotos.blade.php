@extends('client.searchUserProfile')
@section('uPhotos')
@if(count($data)<=0)
<h3>{{$p}}</h3>
@else
<div class="flexbin flexbin-margin" >
	@foreach ($data as $d)
		<span class="c" >
			<picture>
	            <source
	            media = "(min-width:860px)"
	            srcset="{{asset('storage/large_photos/'.$d->gallery_image.' 860w')}}">
	            <source 
	            media = "(min-width:420px)"
	            srcset = "{{asset('storage/medium_photos/'.$d->gallery_image.' 640w')}}" >
	            <source 
	            media = "(max-width:420px)"
	            srcset = "{{asset('storage/mobile_photos/'.$d->gallery_image.' 420w')}}" >
	            <img style="width: auto;max-width: 600px;" class="img-responsive img-rounded" 
	            src="{{asset('storage/medium_photos/'.$d->gallery_image)}}" 
	            alt="{{$d->alternative_text}}">
          	</picture>
			<div class="middle text-center">
				<a 	type="button" class="btn btn-white btn-just-icon btn-xs btn-round hidden-xs" 
					href="{{ url('photos/'.$d->unique_id) }}" 
					rel="tooltip" 
					data-placement="bottom" title="" 
					data-original-title="See more..">
					<i style="color: black" class="material-icons">remove_red_eye</i>
				</a>
				<button hidden="">
				<form action="{{ url('i/'.$d->id) }}" method="POST" >
				{{ csrf_field() }}
				<button  type="submit" class="btn btn-white btn-just-icon btn-xs btn-round hidden-xs" rel="tooltip" data-placement="bottom" title="" data-original-title="Download">
				<i style="color: black" class="material-icons">file_download</i>
				</button>
				</form> 
				</button>
				@if($d->isFavorited())
				<a type="button" class="btn btn-white btn-just-icon btn-xs btn-round hidden-xs" href="{{ url('addToFavorties/'.$d->id) }}"
					rel="tooltip" data-placement="bottom" title="" data-original-title="In your favorites">
					<i style="color: black" class="material-icons">favorite</i></a>
				@else
					<a type="button" class="btn btn-white btn-just-icon btn-xs btn-round hidden-xs" href="{{ url('addToFavorties/'.$d->id) }}"
					rel="tooltip" data-placement="bottom" title="" data-original-title="Add to favorites">
					<i style="color: black" class="material-icons">favorite_border</i></a>
				@endif
				<a class=" hidden-sm hidden-md hidden-lg" href="{{ url('photos/'.$d->unique_id) }}">
				<i style="color: white" class="material-icons">more_horiz</i></a>		
			</div>
		</span>
	@endforeach
</div>
@endif
@endsection