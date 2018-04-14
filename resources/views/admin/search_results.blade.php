@extends('admin.sidebar')
@section('search_results')
@foreach ($results as $result)
<div class="{{$class}}">
              <div class="card fe_pr">
                <div class="pr_img">
                  <div class="ct-chart" id="dailySalesChart">
                  <picture>
                   <img style="max-height: 300px;object-fit: cover;" class="img-responsive img-rounded" src="{{asset('storage/avatars/'.$result->image)}}" alt="Codefield project image">
                   </picture>
                  </div>
                </div>
                <div class="row">
                <div class="text-center">
                  <a href="{{ url('/admin/projects/'.$result->id.'/edit') }}" type="button" class="btn btn-success btn-simple" rel="tooltip" data-placement="bottom" title="" data-original-title="Edit" rel="noopener">
                  <i class="material-icons">edit</i>
                  </a>
              <button hidden="">
                  <form action="{{ url('/admin/projects/'.$result->id) }}" method="POST" >
                  {{method_field('DELETE')}}
                  {{ csrf_field() }}
                  <button  type="submit" class="btn btn-danger btn-simple" rel="tooltip" data-placement="bottom" title="" data-original-title="Remove" onclick="return confirm('Send {{$result->title}} to trash?');">
                  <i class="material-icons">close</i>
                  </button>
                  </form> 
                  </button>
                  @if($result->tutorial != null)
                    <a href="{{ $result->tutorial }}" target="_blank" type="button" class="btn btn-info btn-simple" 
                      rel="tooltip" data-placement="bottom" title="" data-original-title="See tutorial">
                      <i class="material-icons">videocam</i>
                    </a>                  
                  @endif        
                </div>
                </div>
            <div class="card-content">
                  <h4 class="title">{{ str_limit($result->title,30) }}</h4>
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
                  @endif
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i>  Posted  {{ $result->created_at->diffForHumans() }}
                  </div>
                </div>
              </div>
            </div>
@endforeach
<div class="row text-center">{{ $results->links('admin.mdl-bootstrap') }}</div>
@endsection