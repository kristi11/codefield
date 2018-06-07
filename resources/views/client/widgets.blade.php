@extends('client.home')
@section('widgets')
<div class="col-xs-12">
    <ul class="nav nav-pills " role="tablist">
      <li class="dropdown">
        <a href="#" role="tab" href="#"  data-toggle="dropdown">
         Category
        </a>
        <ul class="dropdown-menu">
          @foreach ($categories as $category)
            <li><a href="{{ url('/projects/category/'.$category->name) }}">{{$category->name}}</a></li>   
          @endforeach
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" role="tab" href="#"  data-toggle="dropdown">
          Sort by 
        </a>
        <ul class="dropdown-menu">
          <li><a href="{{ url('mostDownloadedProjects') }}">Most downloaded</a></li>
          <li><a href="{{ url('mostViewedProjects') }}">Most viewed</a></li>
        </ul>
      </li>
    </ul>
    <br>


@foreach ($widgets as $widget)
<div class="{{$class}}">
              <div class="card fe_pr">
                <div class="pr_img">
                  <div class="ct-chart" id="dailySalesChart">
                  <picture>
                   <img 
                     style="max-height: 300px;" 
                     class="lazyload img-responsive img-rounded fit" 
                     src="{{asset('storage/avatars/'.'placeholder-'.$widget->image)}}" 
                     data-src="{{asset('storage/avatars/'.$widget->image)}}" 
                     alt="{{$widget->alternative_text}}">
                   </picture>
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
                  <h4 class="title" id="title">{{ str_limit($widget->title,30) }}</h4>
{{--                   <p class="category">{{ str_limit($widget->body, 100) }}.</p>--}}
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
<div class="col-xs-12 text-center">{{ $widgets->links('admin.mdl-bootstrap') }}</div>
</div>
@endsection