@extends('client.home')
@section('clientSearchResults')
@foreach ($results as $result)
<div class="{{$class}}">
              <div class="card fe_pr">
                <div class="pr_img">
                  <div class="ct-chart" id="dailySalesChart">
                  <picture>
                   <img style="max-height: 300px;" class="img-responsive img-rounded fit" src="{{asset('storage/avatars/'.$result->image)}}" 
                   alt="{{$result->alternative_text}}">
                   </picture>
                  </div>
                </div>
                <div class="row">
                <div class="text-center">
                  <a href="{{ url('projects/'.$result->title) }}" type="button" class="btn btn-danger btn-simple" rel="tooltip" data-placement="bottom" title="" data-original-title="Read more..." rel="noopener" >
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
                  @if($result->isFavorited())
                <a type="button" class="btn btn-success btn-simple" href="{{ url('addToFavorties/'.$result->id) }}"
                  rel="tooltip" data-placement="bottom" title="" data-original-title="In your favorites">
                  <i class="material-icons">favorite</i></a>
                @else
                  <a type="button" class="btn btn-success btn-simple" href="{{ url('addToFavorties/'.$result->id) }}"
                  rel="tooltip" data-placement="bottom" title="" data-original-title="Add to favorites">
                  <i class="material-icons">favorite_border</i></a>
                @endif                
                </div>
                </div>
            <div class="card-content">
                  <h4 class="title" id="title">{{ str_limit($result->title,30) }}</h4>
@if($result->views == 0)
          <p class="category">No views</p>
        @elseif($result->views == 1)
          <p class="category">{{$result->views}} view</p>
        @else
          <p class="category">{{$result->views}} views</p>
        @endif

        @if($result->downloads == 0)
          <p class="category">No downloads</p>
        @elseif($result->downloads == 1)
          <p class="category">{{$result->downloads}} download</p>
        @else
          <p class="category">{{$result->downloads}} downloads</p>
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