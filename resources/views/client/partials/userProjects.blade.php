@extends('client.userProfile')
@section('userProjects')
@if(count($data)<=0)
 <h3>{{$p}}</h3>
 @else
@foreach ($data as $project)
<div class="col-lg-6 col-md-6 col-sm-6">
  <div class="card fe_pr">
    <div class="pr_img">
      <div class="ct-chart" id="dailySalesChart">
      <picture>
       <img style="max-height: 300px;" class="img-responsive img-rounded fit"
       src="{{url('storage/avatars/'.$project->image)}}"
       alt="{{$project->alternative_text}}">
       </picture>
      </div>
    </div>
    <div class="text-center">
      <a href="{{ url('Uproducts/'.$project->id.'/edit') }}" type="button" class="btn btn-success btn-simple" rel="tooltip" data-placement="bottom" title="" data-original-title="Edit" rel="noopener" >
      <i class="material-icons">edit</i>
      </a>
  	<button hidden="">
      <form action="{{ url('deleteProduct/'.$project->id) }}" method="POST" >
      {{method_field('DELETE')}}
      {{ csrf_field() }}
      <button  type="submit" class="btn btn-danger btn-simple" rel="tooltip" data-placement="bottom" title="" data-original-title="Remove" onclick="return confirm('Delete {{$project->dsc_title}} ?');" >
      <i class="material-icons">close</i>
      </button>
      </form>
      </button>
      @if($project->tutorial != null)
        <a href="{{ $project->tutorial }}" target="_blank" type="button" class="btn btn-info btn-simple"
          rel="tooltip" data-placement="bottom" title="" data-original-title="See tutorial">
          <i class="material-icons">videocam</i>
        </a>
      @endif
    </div>
	<div class="card-content">
      <h4 class="title" id="title">{{ str_limit($project->dsc_title,30) }}</h4>
      @if($project->views == 0)
        <p class="category">No views</p>
      @elseif($project->views == 1)
        <p class="category">{{$project->views}} view</p>
      @else
        <p class="category">{{$project->views}} views</p>
      @endif

      @if($project->downloads == 0)
        <p class="category">No downloads</p>
      @elseif($project->downloads == 1)
        <p class="category">{{$project->downloads}} download</p>
      @else
        <p class="category">{{$project->downloads}} downloads</p>
      @endif
    </div>
    <div class="card-footer">
      <div class="stats">
        <i class="material-icons">access_time</i>  Posted  {{ $project->created_at->diffForHumans() }}
      </div>
    </div>
  </div>
</div>
@endforeach
@endif
@endsection