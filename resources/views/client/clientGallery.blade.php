@extends('client.home')
@section('gallery')
<div class="col-xs-12">
	<ul class="nav nav-pills " role="tablist">

		<li class="dropdown">
			<a role="tab" href="#"  data-toggle="dropdown">
				Category 
			</a>
			<ul class="dropdown-menu">
				@foreach ($tags as $tag)
					<li><a href="{{ url('category/'.$tag->name) }}">{{$tag->name}}</a></li>
				@endforeach
			</ul>
		</li>
	
		<li class="dropdown">
			<a href="#" role="tab" href="#"  data-toggle="dropdown">
				Sort by 
			</a>
			<ul class="dropdown-menu">
				<li><a href="{{ url('trending') }}">Trending</a></li>
				<li><a href="{{ url('mostPopular') }}">Most popular</a></li>
				<li><a href="{{ url('newest') }}">Newest</a></li>
				<li><a href="{{ url('oldest') }}">Oldest</a></li>
			</ul>
		</li>
	</ul>
	
	<div class="card">
		<div class="card-content">

					
			<div class="flexbin flexbin-margin" >
				@foreach ($gallery as $img)
				
					<span class="c" >
						{{-- <a href=""> --}}
						<picture>
						<source 
							media="max-width: 768px" 
							srcset="{{asset('storage/gallery_thumbnails/'.$img->gallery_image.' 768w')}}">	
						<img style="width: auto;max-width: 600px;"
							class="image size fit"
							src="{{asset('storage/gallery_thumbnails/'.$img->gallery_image)}}"
							alt="{{$img->alternative_text}}">
						</picture>
						{{-- </a> --}}
						<div class="middle text-center">
								<a type="button" class="btn btn-white btn-just-icon btn-xs btn-round hidden-xs" href="{{ url('photos/'.$img->gallery_image) }}"
									rel="tooltip" data-placement="bottom" title="" data-original-title="See more..">
									<i style="color: black" class="material-icons">remove_red_eye</i>
								</a>
								<button hidden="">
								<form action="{{ url('i/'.$img->id) }}" method="POST" >
								{{ csrf_field() }}
								<button  type="submit" class="btn btn-white btn-just-icon btn-xs btn-round hidden-xs" rel="tooltip" data-placement="bottom" title="" data-original-title="Download">
								<i style="color: black" class="material-icons">file_download</i>
								</button>
								</form> 
								</button>
								@if($img->isFavorited())
								<a type="button" class="btn btn-white btn-just-icon btn-xs btn-round hidden-xs" href="{{ url('addToFavorties/'.$img->id) }}"
									rel="tooltip" data-placement="bottom" title="" data-original-title="In your favorites">
									<i style="color: black" class="material-icons">favorite</i></a>
								@else
									<a type="button" class="btn btn-white btn-just-icon btn-xs btn-round hidden-xs" href="{{ url('addToFavorties/'.$img->id) }}"
									rel="tooltip" data-placement="bottom" title="" data-original-title="Add to favorites">
									<i style="color: black" class="material-icons">favorite_border</i></a>
								@endif
								<a type="button" class="btn btn-white btn-just-icon btn-xs btn-round hidden-xs" 
								 href="{{ url($img->user->slug.'/u/photos') }}"
								 rel="tooltip" data-placement="bottom" title="" data-original-title="{{$img->user->name}}">
									<i style="color: black" class="material-icons">person</i></a>
								</a>
								<a class=" hidden-sm hidden-md hidden-lg" href="{{ url('photos/'.$img->gallery_image) }}">
								<i style="color: white" class="material-icons">more_horiz</i></a>		
							{{-- </div> --}}
						</div>
					</span>
				@endforeach
			</div>
		</div>
		</div>
	</div>
</div>

<div class="col-xs-12 text-center">{{ $gallery->links('admin.mdl-bootstrap') }}</div>

@endsection