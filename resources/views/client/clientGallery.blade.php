@extends('client.home')
@section('gallery')
	<div style="padding: 0;" class="table-responsive hidden-lg">
		<h6 style="margin: 0;" class="container">Sort by</h6>
	    <table class="table">
	      <tr>
	        <td>
	        	<nav style="box-shadow: none; background-color: #fbfbfd;" class="scroll bg-light">

					  <a class="btn btn-round btn-{{ $item->font_color }}" href="{{ url('trending') }}">
					  	Trending
					  </a>

					  <a class="btn btn-round btn-{{ $item->font_color }}" href="{{ url('mostPopular') }}">
					  	Most popular
					  </a>

					  <a class="btn btn-round btn-{{ $item->font_color }}" href="{{ url('newest') }}">
					  	Newest
					  </a>

					  <a class="btn btn-round btn-{{ $item->font_color }}" href="{{ url('oldest') }}">
					  	Oldest
					  </a>

	        	</nav>
	        </td>
	      </tr>
	    </table>
  	</div>

	<div style="padding: 0;" class="table-responsive hidden-lg">
		<h6 style="margin: 0;" class="container">Categories</h6>
	    <table class="table">
	      <tr>
	        <td>
	        	<nav style="box-shadow: none; background-color: #fbfbfd;" class="scroll bg-light">
					@foreach ($tags as $tag)
					  <a class="btn btn-round btn-{{ $item->font_color }}" href="{{ url('category/'.$tag->name) }}">
					  	{{$tag->name}}
					  </a>
					@endforeach
	        	</nav>
	        </td>
	      </tr>
	    </table>
  	</div>

<div class="col-xs-12">
	<ul class="nav nav-pills " role="tablist">
		<li class="hidden-xs hidden-sm hidden-md dropdown">
		      <a href="#" role="tab" href="#"  data-toggle="dropdown" class="">
		       Category
		      </a>
		      <ul style="display: flex;" class="dropdown-menu dd-list">
		        @foreach ($tags as $tag)
		          <li style="display: inline-grid;padding:0.3em;"><a class="btn btn-simple"
		          	href="{{ url('category/'.$tag->name) }}">{{$tag->name}}</a></li>
		        @endforeach
		      </ul>
		    </li>
			<li class="hidden-xs hidden-sm hidden-md dropdown">
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
		{{-- <div class="card-content"> --}}
			<div class="flexbin flexbin-margin" >
				@foreach ($gallery as $img)
					<span class="c" >
						{{-- <a href=""> --}}
						<img style="object-fit:cover;width: auto;max-width: 600px;" class="lazyload blur-up"
						src="{{asset('storage/tiny_photos/'.$img->gallery_image)}}"
						data-sizes="auto"
						data-src="{{asset('storage/medium_photos/'.$img->gallery_image)}}"
						data-srcset="{{asset('storage/medium_photos/'.$img->gallery_image.' 860w')}},
						{{asset('storage/medium_photos/'.$img->gallery_image.' 640w')}},
						{{asset('storage/mobile_photos/'.$img->gallery_image.' 420w')}}"
			            >
						{{-- </a> --}}
						<div class="middle text-center">
								<a type="button" class="btn btn-white btn-just-icon btn-xs btn-round hidden-xs" href="{{ url('photos/'.$img->unique_id) }}"
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
{{-- 								@if($img->isFavorited())
								<a type="button" class="btn btn-white btn-just-icon btn-xs btn-round hidden-xs" href="{{ url('addToFavorties/'.$img->id) }}"
									rel="tooltip" data-placement="bottom" title="" data-original-title="In your favorites">
									<i style="color: black" class="material-icons">favorite</i></a>
								@else
									<a type="button" class="btn btn-white btn-just-icon btn-xs btn-round hidden-xs" href="{{ url('addToFavorties/'.$img->id) }}"
									rel="tooltip" data-placement="bottom" title="" data-original-title="Add to favorites">
									<i style="color: black" class="material-icons">favorite_border</i></a>
								@endif --}}
								<a type="button" class="btn btn-white btn-just-icon btn-xs btn-round hidden-xs"
								 href="{{ url($img->user->slug.'/u/photos') }}"
								 rel="tooltip" data-placement="bottom" title="" data-original-title="{{$img->user->name}}">
									<i style="color: black" class="material-icons">person</i></a>
								</a>
								<a class=" hidden-sm hidden-md hidden-lg" href="{{ url('photos/'.$img->unique_id) }}">
								<i style="color: white" class="material-icons">more_horiz</i></a>
							{{-- </div> --}}
						</div>
					</span>
				@endforeach
			</div>
		{{-- </div> --}}
		</div>
	</div>
</div>

<div class="col-xs-12 text-center">{{ $gallery->links('admin.mdl-bootstrap') }}</div>

@endsection