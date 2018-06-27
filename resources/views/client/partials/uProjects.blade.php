@extends('client.searchUserProfile')
@section('uProjects')
@if(count($data)<=0)
 <h3>{{$p}}</h3>
 @else
@foreach ($data as $widget)
<div class="col-lg-6 col-md-6 col-sm-6">
  <div class="card fe_pr">
    <div class="pr_img">
      <div class="ct-chart" id="dailySalesChart">
      <picture>
       <img
         style="max-height: 300px;"
         class="lazyload blur-up img-responsive img-rounded fit"
         src="{{asset('storage/avatars/'.'placeholder-'.$widget->image)}}"
         data-src="{{asset('storage/avatars/'.$widget->image)}}"
         alt="{{$widget->alternative_text}}">
       </picture>
      </div>
    </div>
    <div class="row">
    <div class="text-center">
      <a href="{{ url('products/'.$widget->title) }}" type="button" class="btn btn-danger btn-simple" rel="tooltip" data-placement="bottom" title="" data-original-title="Read more..." rel="noopener" >
      <i class="material-icons">search</i>
      </a>

     @if($widget->zip_file)
        <button hidden="">
        <form action="{{ url('w/'.$widget->id) }}" method="POST" >
        {{ csrf_field() }}
        <button  type="submit" class="btn btn-primary btn-simple" rel="tooltip" data-placement="bottom" title="" data-original-title="Download" >
        <i class="material-icons">file_download</i>
        </button>
        </form>
        </button>
      @endif
      @if($widget->tutorial != null)
        <a href="{{ $widget->tutorial }}" target="_blank" type="button" class="btn btn-info btn-simple"
          rel="tooltip" data-placement="bottom" title="" data-original-title="See tutorial">
          <i class="material-icons">videocam</i>
        </a>
      @endif
      @if($widget->isFavorited())
    <a type="button" class="btn btn-success btn-simple" href="{{ url('addToFavorties/'.$widget->id) }}"
      rel="tooltip" data-placement="bottom" title="" data-original-title="In your favorites">
      <i class="material-icons">favorite</i></a>
    @else
      <a type="button" class="btn btn-success btn-simple" href="{{ url('addToFavorties/'.$widget->id) }}"
      rel="tooltip" data-placement="bottom" title="" data-original-title="Add to favorites">
      <i class="material-icons">favorite_border</i></a>
    @endif
    </div>
    </div>
    <div class="card-content">
      <h4 class="title" id="title">{{ str_limit($widget->dsc_title,30) }}</h4>
      @if($widget->views == 0)
        <h5 class="category">No views</h5>
      @elseif($widget->views == 1)
        <h5 class="category">{{$widget->views}} view</h5>
      @else
        <h5 class="category">{{$widget->views}} views</h5>
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
@endif
@endsection