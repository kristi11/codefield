@extends('client.home')

@section('edit_PAvatar')
@include('errors')
<div class="col-md-8 col-md-offset-2">
<div class="card">
    <form method="POST" action="{{ url('updatePAvatar/'.$project->id) }}" enctype="multipart/form-data">
      {{ method_field('PUT') }}
      {{ csrf_field() }}

        <div class="card-header card-chart">
          <img class="img-responsive img-rounded" src="{{url('storage/avatars/'.$project->image)}}">
        </div>
      <div class="card-content">
      <div class="card-content text-center">
        <div class="btn btn-{{$item->font_color}} btn-simple">
          <input type="file" name="avatar" value="{{ $project->image }}" required=""
          class="filestyle" data-buttonText="Choose image" id="img_1" data-input="false" data-iconName="" data-buttonName="btn btn-{{$item->font_color}} btn-simple" data-buttonClass="btn btn-{{$item->font_color}} btn-simple">
        </div>
      </div>
      <div class="text-center">
      <button class="btn btn-{{$item->font_color}}" type="submit" id="p_edit_1">
        Update
      </button>
      </div>
      </div>
    </form>
 </div>
 </div>
@endsection