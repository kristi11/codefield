@extends('client.home')
@section('gallery')
<style> 
.placeholder {
  background-color: #f6f6f6;
  background-size: cover;
  background-repeat: no-repeat;
  position: relative;
  overflow: hidden;
}

.placeholder img {
  position: absolute;
  opacity: 0;
  top: 0;
  left: 0;
  width: 100%;
  transition: opacity 1s linear;
}

.placeholder img.loaded {
  opacity: 1;
}

.img-small {
  filter: blur(50px);
  /* this is needed so Safari keeps sharp edges */
  transform: scale(1);
}
</style>
<script>
window.onload = function() {
  
  var placeholder = document.querySelector('.placeholder'),
      small = placeholder.querySelector('.img-small')
  
  // 1: load small image and show it
  var img = new Image();
  img.src = small.src;
  img.onload = function () {
   small.classList.add('loaded');
  };
  
  // 2: load large image
  var imgLarge = new Image();
  imgLarge.src = placeholder.dataset.large; 
  imgLarge.onload = function () {
    imgLarge.classList.add('loaded');
  };
  placeholder.appendChild(imgLarge);
}
</script>
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
			<div class="" >
				@foreach ($gallery as $img)
					<span class="" >
						{{-- <a href=""> --}}	
						<div class="placeholder" data-large="{{asset('storage/medium_photos/'.$img->gallery_image.' 860w')}}">					
						<img style="width: auto;max-width: 600px;" class="image size fit" 
						src="{{asset('storage/tiny_photos/'.$img->gallery_image)}}"
						srcset="{{asset('storage/medium_photos/'.$img->gallery_image.' 860w')}}"
						srcset="{{asset('storage/medium_photos/'.$img->gallery_image.' 640w')}}"
						srcset="{{asset('storage/mobile_photos/'.$img->gallery_image.' 420w')}}" 
			            >
			            <div style="padding-bottom: 66.6%;"></div>
			       		</div>
						{{-- </a> --}}
{{-- 						<div class="middle text-center">
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
								<a class=" hidden-sm hidden-md hidden-lg" href="{{ url('photos/'.$img->unique_id) }}">
								<i style="color: white" class="material-icons">more_horiz</i></a>		
							{{-- </div> --}}
						</div> --}}
					</span>
				@endforeach
			</div>
		</div>
		</div>
	</div>
</div>

<div class="col-xs-12 text-center">{{ $gallery->links('admin.mdl-bootstrap') }}</div>

@endsection