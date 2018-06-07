@extends('admin.sidebar')

@section('edit_project')
@include('errors')
<div class="col-md-8 col-md-offset-2">
<div class="card">
    <form method="POST" action="{{ url('/admin/projectUploads/'.$project->id) }}" enctype="multipart/form-data">
      {{ method_field('PUT') }}
      {{ csrf_field() }}
        
        <div class="card-header card-chart">
          <img class="img-responsive img-rounded" src="{{url('storage/avatars/'.$project->image)}}">
        </div>
      <div class="card-content">
      <div class="form-group">
        <div class="alert alert-{{$item->font_color}} " role="alert">
          <strong>Uploaded Zip File(Presented to customer):</strong><br>{{ $project->title.'.zip' }}<br>
{{--           <strong>Uploaded Zip File(real name):</strong><br>{{ $project->zip_file }}
 --}}        </div>
      </div>
      <div class="card-content text-center">
        <div class="btn btn-{{$item->font_color}} btn-simple">
          <input type="file" name="avatar" value="{{ $project->image }}" required=""
          class="filestyle" data-buttonText="Choose image" id="img" data-input="false" data-iconName="" data-buttonName="btn btn-{{$item->font_color}} btn-simple" data-buttonClass="btn btn-{{$item->font_color}} btn-simple">
        </div>
      
        {{-- <div class="btn btn-{{$item->font_color}} btn-simple">
          <input type="file" name="zip_file" value="{{ $project->zip_file }}" id="zip_file" required=""
          class="filestyle" data-buttonText="Choose zip file" data-input="false" data-iconName="" data-buttonName="btn btn-{{$item->font_color}} btn-simple" data-buttonClass="btn btn-{{$item->font_color}} btn-simple">
        </div> --}}
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