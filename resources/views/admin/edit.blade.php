@extends('admin.sidebar')

@section('edit_project')
@include('errors')
{{-- <div class="col-md-8 col-md-offset-2">
<div class="alert alert-{{$item->font_color}}" role="alert">
          <strong>Heads Up!</strong><br>Due to active development the image and the zip file will need to be added every time this form is updated
        </div>
</div> --}}
<div class="col-md-8 col-md-offset-2">
<div class="card">
    <form method="POST" action="{{ url('/admin/projects/'.$project->id) }}" enctype="multipart/form-data">
      {{ method_field('PUT') }}
      {{ csrf_field() }}
        
        <div class="card-header card-chart">
          <img class="img-responsive img-rounded" src="{{url('storage/avatars/'.$project->image)}}">
        </div>
      <div class="card-content">
        <div class="form-group label-floating">
        <label class="control-label">Project title</label>
          <input type="text" name="title" id="title" value="{{ $project->title }}" class="form-control" required>
        </div>
  <input id="body" value="{{$project->body }}" type="hidden" name="body">
  <trix-editor input="body"></trix-editor>
{{--       <div class="form-group label-floating">
      <label class="control-label">Body</label>
          <textarea data-autosize name="body" id="body" class="form-control" rows="3" required>{{$project->body }}</textarea>
      </div> --}}
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
      <a class="btn btn-simple btn-danger" href="{{ url('/admin/projects/'.$project->id.'/editUploads')}}">update image and zip file</a>
    </div>
      <div class="text-center">
      <button class="btn btn-{{$item->font_color}}" type="submit">
        Update
      </button>
      </div>
      </div>
    </form>
 </div>
 </div>
@endsection