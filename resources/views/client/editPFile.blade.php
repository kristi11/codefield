@extends('client.home')
@section('edit_PFile')
@include('errors')
<div class="col-md-8 col-md-offset-2">
<div class="card">
    <form method="POST" action="{{ url('updatePFile/'.$project->id) }}" enctype="multipart/form-data">
      {{ method_field('PUT') }}
      {{ csrf_field() }}
      <div class="card-header" data-background-color={{$item->app_color}}>
          <h5 class="title"><strong>Uploaded File: </strong>{{ $project->dsc_title.'.zip' }}</h5>
      </div>
      <div class="card-content text-center">
        <div class="btn btn-{{$item->font_color}} btn-simple">
          <input type="file" name="zip_file" value="{{ $project->zip_file }}" id="zip_file_1" required=""
          class="filestyle" data-buttonText="Choose zip file" data-input="false" data-iconName="" data-buttonName="btn btn-{{$item->font_color}} btn-simple" data-buttonClass="btn btn-{{$item->font_color}} btn-simple">
        </div>
      </div>
      <div class="text-center">
      <button class="btn btn-{{$item->font_color}}" type="submit" id="p_zf">
        Update
      </button>
      </div>
      </div>
    </form>
 </div>
 </div>
@endsection