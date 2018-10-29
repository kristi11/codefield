@extends('client.home')

@section('edit_userProject')
@include('errors')
<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=gfnhsiax34xgkgxk89hb6mc24eo88l2utnhu4tvl2dc89kvg"></script>
<script type="text/javascript">
  tinymce.init({
    selector: '#body',
     theme: 'modern',
     branding: false,
     min_height: 600,
     plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste"
    ],
  mobile: {
    theme: 'mobile',
    plugins: [ 'autosave', 'lists', 'autolink' ]
  }
  });
</script>
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
      <label class="control-label">Description</label>
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
      @if($project->zip_file)
      <a class="btn btn-simple btn-danger" href="{{ url('Uproducts/'.$project->id.'/editPFile')}}">
        update uploaded file
      </a>
      @endif
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