@extends('client.home')
@section('clientSearchResults')
@foreach ($results as $result)
<div class="{{$class}}">
              <div class="card fe_pr">
                <div class="pr_img">
                  <div class="ct-chart" id="dailySalesChart">
                    <picture>
                   <img
                     style="max-height: 300px;"
                     class="lazyload blur-up img-responsive img-rounded fit"
                     src="{{asset('storage/avatars/'.'placeholder-'.$result->image)}}"
                     data-src="{{asset('storage/avatars/'.$result->image)}}"
                     alt="{{$result->alternative_text}}">
                   </picture>
                  </div>
                </div>
                <div class="row">
                <div class="text-center">
                  <a href="{{ url('products/'.$result->title) }}" type="button" class="btn btn-danger btn-simple" rel="tooltip" data-placement="bottom" title="" data-original-title="Read more..." rel="noopener" >
                  <i class="material-icons">search</i>
                  </a>

                  <button hidden="">
                  <form action="{{ url('w/'.$result->id) }}" method="POST" >
                  {{ csrf_field() }}
                  <button  type="submit" class="btn btn-primary btn-simple" rel="tooltip" data-placement="bottom" title="" data-original-title="Download" >
                  <i class="material-icons">file_download</i>
                  </button>
                  </form>
                  </button>
                  @if($result->tutorial != null)
                    <a href="{{ $result->tutorial }}" target="_blank" type="button" class="btn btn-info btn-simple"
                      rel="tooltip" data-placement="bottom" title="" data-original-title="See tutorial">
                      <i class="material-icons">videocam</i>
                    </a>
                  @endif
                 {{--  @if($result->isFavorited())
                <a type="button" class="btn btn-success btn-simple" href="{{ url('addToFavorties/'.$result->id) }}"
                  rel="tooltip" data-placement="bottom" title="" data-original-title="In your favorites">
                  <i class="material-icons">favorite</i></a>
                @else
                  <a type="button" class="btn btn-success btn-simple" href="{{ url('addToFavorties/'.$result->id) }}"
                  rel="tooltip" data-placement="bottom" title="" data-original-title="Add to favorites">
                  <i class="material-icons">favorite_border</i></a>
                @endif --}}
                 @if($result->user->hasPermissionTo('view_project_creator_from_client'))
                   <a type="button" class="btn btn-success btn-simple"
                   href="{{ url($result->user->slug.'/u/products') }}"
                   rel="tooltip" data-placement="bottom" title="" data-original-title="{{$result->user->name}}">
                    <i style="color: black" class="material-icons">person</i></a>
                   </a>
                  @endif
                </div>
                </div>
            <div class="card-content">
                  <h4 class="title" id="title">{{ str_limit($result->dsc_title,30) }}</h4>
        @if($result->views == 0)
          <h5 class="category">No views</h5>
        @elseif($result->views == 1)
          <h5 class="category">{{$result->views}} view</h5>
        @else
          <h5 class="category">{{$result->views}} views</h5>
        @endif

        @if($result->downloads == 0)
          <h5 class="category">No downloads</h5>
        @elseif($result->downloads == 1)
          <h5 class="category">{{$result->downloads}} download</h5>
        @else
          <h5 class="category">{{$result->downloads}} downloads</h5>
        @endif                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i>  Posted  {{ $result->created_at->diffForHumans() }}
                  </div>
                </div>
              </div>
            </div>
@endforeach
<div class="col-xs-12 text-center">{{ $results->links('admin.mdl-bootstrap') }}</div>
@endsection