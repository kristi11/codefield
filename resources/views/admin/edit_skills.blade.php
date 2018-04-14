@extends('admin.sidebar')
@section('Skills')
@include('errors')
<div class="col-md-8 col-md-offset-2">
<div class="card">
<div class="card-header" data-background-color="{{$item->app_color}}">
    <h4 class="title">{{ $edit_skills->name }}</h4>
  </div>
  <div class="card-content">
	<form method="POST" action="{{ url('/admin/settings/skills/'.$edit_skills->id) }}">
	{{ csrf_field() }}
  

<div class="form-group label-floating">
<label class="control-label">Icon name</label>    
<input type="text" class="form-control" id="icon" name="icon" value="{{ $edit_skills->icon }}" placeholder="Icon name" required>
</div>

  <div class="form-group label-floating">
  <label class="control-label">Skill name</label>  
    <input type="text" class="form-control" id="name" name="name" value="{{ $edit_skills->name }}" placeholder="Skill name" required>
  </div>

  <div class="form-group label-floating">
  <label class="control-label">Skill description</label>    
    <textarea class="form-control" id="description" name="description" rows="3" placeholder="Skill description" required>
    {{ $edit_skills->description }}</textarea>
  </div>

<div class="form-group text-center">
  <button  type="submit"  class="btn btn-simple btn-{{$item->font_color}}">Update</button>
</div>

</form>
</div>
</div>
</div>
@endsection
