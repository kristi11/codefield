@extends('client.home')
@section('favorites')
@foreach($widgets as $widget)


	<div class="col-sm-6 col-md-4">
		<div class="card fe_pr">
      <div class="pr_img">
        <div class="ct-chart" id="dailySalesChart">
				<img 
          style="height: 190px;object-fit: cover;"
          class="lazyload blur-up img-rounded img-responsive fit"
          src="{{url('storage/avatars/'.'placeholder-'.$widget->image)}}" 
          data-src="{{url('storage/avatars/'.$widget->image)}}" 
          alt="{{$widget->alternative_text}}">
      </div>
    </div>
		
   <div class="row">
      <div class="text-center">
        <a href="{{ url('projects/'.$widget->title) }}" type="button" class="btn btn-danger btn-simple" rel="tooltip" data-placement="bottom" title="" data-original-title="Read more..." rel="noopener" >
        <i class="material-icons">search</i>
        </a> 
        <button hidden="">
          <form action="{{ url('w/'.$widget->id) }}" method="POST" >
            {{ csrf_field() }}
            <button  type="submit" class="btn btn-primary btn-simple" rel="tooltip" data-placement="bottom" title="" data-original-title="Download" >
            <i class="material-icons">file_download</i>
            </button>
          </form> 
        </button>
        @if($widget->tutorial != null)
          <a href="{{ $widget->tutorial }}" target="_blank" type="button" class="btn btn-info btn-simple" 
            rel="tooltip" data-placement="bottom" title="" data-original-title="See tutorial">
            <i class="material-icons">videocam</i>
          </a>                  
        @endif
      <a type="button" class="btn btn-success btn-simple" href="{{ url('addToFavorties/'.$widget->id) }}"
        rel="tooltip" data-placement="bottom" title="" data-original-title="Remove from favorites">
        <i class="material-icons">favorite</i></a>
      </div>
    </div>
			<div class="card-content">
        <h4 class="title" id="title">{{ str_limit($widget->title,30) }}</h4>
        @if($widget->views == 0)
          <p class="category">No views</p>
        @elseif($widget->views == 1)
          <p class="category">{{$widget->views}} view</p>
        @else
          <p class="category">{{$widget->views}} views</p>
        @endif

        @if($widget->zip_file)
          @if($widget->downloads == 0)
            <h5 class="category">No downloads</h5>
          @elseif($widget->downloads == 1)
            <h5 class="category">{{$widget->downloads}} download</h5>
          @else
            <h5 class="category">{{$widget->downloads}} downloads</h5>
          @endif
          @else
            <h5 class="category">Learning</h5>
        @endif
			</div>
      <div class="card-footer">
        <div class="stats">
          <i class="material-icons">access_time</i>  Posted  {{ $widget->created_at->diffForHumans() }}
        </div>
      </div>
		</div>
	</div>
@endforeach
@foreach($gallery as $g)
{{-- @if($g->isFavorited()) --}}
	<div class="col-sm-6 col-md-4">
		<div class="card fe_pr">
      <div class="pr_img">
        <div class="ct-chart" id="dailySalesChart">
				  <picture>
            <source
            media = "(min-width:860px)"
            data-srcset="{{asset('storage/medium_photos/'.$g->gallery_image.' 860w')}}">
            <source 
            media = "(min-width:420px)"
            data-srcset = "{{asset('storage/medium_photos/'.$g->gallery_image.' 640w')}}" >
            <source 
            media = "(max-width:420px)"
            data-srcset = "{{asset('storage/mobile_photos/'.$g->gallery_image.' 420w')}}" >
            <img style="height: 190px;object-fit: cover;" 
            class="lazyload blur-up img-responsive img-rounded" 
            src="{{asset('storage/tiny_photos/'.$g->gallery_image)}}" 
            data-src="{{asset('storage/medium_photos/'.$g->gallery_image)}}" 
            alt="{{$g->alternative_text}}">
          </picture>
			</div>
    </div>	
		  <div class="row">
        <div class="text-center">
          <a href="{{ url('photos/'.$g->unique_id) }}" type="button" class="btn btn-danger btn-simple" rel="tooltip" data-placement="bottom" title="" data-original-title="Read more..." rel="noopener" >
          <i class="material-icons">search</i>
          </a>
         
          <button hidden="">
          <form action="{{ url('i/'.$g->id) }}" method="POST" >
          {{ csrf_field() }}
          <button  type="submit" class="btn btn-primary btn-simple" rel="tooltip" data-placement="bottom" title="" data-original-title="Download" >
          <i class="material-icons">file_download</i>
          </button>
          </form> 
          </button>
               {{-- <a href="{{ $g->tutorial }}" target="_blank" type="button" class="btn btn-info btn-simple" rel="tooltip" data-placement="bottom" title="" data-original-title="See tutorial" rel="noopener">
          <i class="material-icons">videocam</i>
          </a> --}}
        <a type="button" class="btn btn-success btn-simple" href="{{ url('addToFavorties/'.$g->id) }}"
          rel="tooltip" data-placement="bottom" title="" data-original-title="Remove from favorites">
          <i class="material-icons">favorite</i></a>
      </div>
    </div>
      <div class="card-content">
        <h4 class="title" id="title">Favorited image</h4>
        @if($g->views == 0)
          <p class="category">No views</p>
        @elseif($g->views == 1)
          <p class="category">{{$g->views}} view</p>
        @else
          <p class="category">{{$g->views}} views</p>
        @endif

        @if($g->downloads == 0)
          <p class="category">No downloads</p>
        @elseif($g->downloads == 1)
          <p class="category">{{$g->downloads}} download</p>
        @else
          <p class="category">{{$g->downloads}} downloads</p>
        @endif
			</div>
        <div class="card-footer">
          <div class="stats">
            <i class="material-icons">access_time</i>  Posted  {{ $g->created_at->diffForHumans() }}
          </div>
        </div>
		</div>
	</div>
{{-- 	@endif --}}
@endforeach
@endsection