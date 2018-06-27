@extends('client.home')

@section('edit_userProject')
@include('errors')
<div class="col-md-8 col-md-offset-2">
<div class="card">
    <form method="POST" action="{{ url('Uproducts/'.$project->id) }}" enctype="multipart/form-data">
      {{ method_field('PUT') }}
      {{ csrf_field() }}

        <div class="card-header card-chart">
          <img class="img-responsive img-rounded" src="{{url('storage/avatars/'.$project->image)}}" id="img">
        </div>
      <div class="card-content">
        <div class="form-group label-floating">
        <label class="control-label">Project title</label>
          <input type="text" name="title" id="title" value="{{ $project->dsc_title }}" class="form-control" required>
        </div>
  {{-- <input id="body" value="{!! Purify::clean($project->body) !!}" type="hidden" name="body">
  <trix-editor input="body"></trix-editor> --}}
      <div class="form-group label-floating">
      <label class="control-label">Body</label>
          <div name="body" id="body" class="form-control fr-view" required >{!! Purify::clean($project->body) !!}</div>
      </div>
        <div class="form-group label-floating">
          <label class="control-label">Youtube tutorial</label>
          <input type="text" name="tutorial" id="tutorial" value="{{ $project->tutorial }}" class="form-control">
        </div>

    <div class="form-group">
        <select class="form-control" name="categories[]" id="categories" multiple="multiple" required="">
        @foreach($categories as $category)
          <option value="{{$category->id}}" selected="">{{$category->name}}</option>
        @endforeach        @foreach($allCategories as $category)
          <option value="{{$category->id}}" >{{$category->name}}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group text-center">
      <a class="btn btn-simple btn-danger" href="{{ url('Uproducts/'.$project->id.'/editPAvatar')}}">update image</a>
      <a class="btn btn-simple btn-danger" href="{{ url('Uproducts/'.$project->id.'/editPFile')}}">
        update uploaded file
      </a>
    </div>
      <div class="text-center">
      <button class="btn btn-{{$item->font_color}}" type="submit" id="p_edit">
        Update
      </button>
      </div>
      </div>
    </form>
 </div>
 </div>
@endsection