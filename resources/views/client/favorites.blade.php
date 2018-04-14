@extends('client.home')
@section('favorites')
@foreach($widgets as $widget)


	<div class="col-sm-6 col-md-4">
		<div class="card fe_pr">
      <div class="pr_img">
        <div class="ct-chart" id="dailySalesChart">
				<img style="max-height: 190px;object-fit: cover;" src="{{url('storage/avatars/'.$widget->image)}}" 
        alt="{{$widget->alternative_text}}" class="img-rounded img-responsive fit">
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

        @if($widget->downloads == 0)
          <p class="category">No downloads</p>
        @elseif($widget->downloads == 1)
          <p class="category">{{$widget->downloads}} download</p>
        @else
          <p class="category">{{$widget->downloads}} downloads</p>
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
				<img style="max-height: 190px;object-fit: cover;" src="{{url('storage/gallery_thumbnails/'.$g->gallery_image)}}" alt="{{$g->alternative_text}}" class="img-rounded img-responsive">
			</div>
    </div>
			
						                <div class="row">
                <div class="text-center">
                  <a href="{{ url('photos/'.$g->gallery_image) }}" type="button" class="btn btn-danger btn-simple" rel="tooltip" data-placement="bottom" title="" data-original-title="Read more..." rel="noopener" >
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