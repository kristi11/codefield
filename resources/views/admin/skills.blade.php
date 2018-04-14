@extends('admin.sidebar')
@section('Skills')
@include('errors')
<div class="col-md-6">
@foreach($skills as $skill)
		<div class="col-xs-6 col-sm-3 col-md-6 col-lg-5 text-center">
<div class="card">
		<div class="card-header" data-background-color="{{$item->app_color}}">
			<span class="title">{{ $skill->name }}</span>
			</div>
				{{ csrf_field() }}
				<div class="row text-center">
					<button class="btn btn-simple btn-xs btn-success" type="submit" 
						onclick="window.location.href='{{ url('/admin/settings/skills/'.$skill->id.'/edit_skills') }}'" type="submit" rel="tooltip" data-placement="bottom" data-original-title="Edit">
						<i class="material-icons">edit</i>
						<div class="ripple-container"></div>
					</button>
					<button hidden="">
				<form method="POST" action="{{ url('/admin/settings/skills/'.$skill->id) }}" >
				{{ csrf_field() }}{{ method_field('Delete') }}
					<button class="btn btn-simple btn-xs btn-danger" type="submit" rel="tooltip" data-placement="bottom" data-original-title="Delete" onclick="return confirm('Delete {{$skill->name}}?');">
						<i class="material-icons">close</i>
					</button>
				</form>
				</button>
				</div>
			
			</div>
		</div>
		@endforeach
		</div>
<div class="col-md-6">
<div class="card">		
	<form class="" method="POST" action="{{ url('/admin/settings/skills/store_skill') }}">

	{{ csrf_field() }}
	<div class="card-header" data-background-color="{{$item->app_color}}">
	<h4 class="title">Add skill</h4>
	</div>
	<div  class="card-content">
  <div class="form-group label-floating"> 
  <label class="control-label">Icon name</label>
<input type="text" class="form-control" id="icon" name="icon" value="{{ old('icon') }}" required>
  </div>

  <div class="form-group label-floating"> 
  <label class="control-label">Skill name</label>
    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
  </div>

  <div class="form-group label-floating">
  <label class="control-label">Skill description</label>   
    <textarea class="form-control" id="description" name="description" rows="3" required>{{ old('description') }}</textarea>
  </div>
  <div class="form-group text-center">
  <button type="submit" name="store_return" value="store_return" class="btn btn-simple btn-{{$item->font_color}}">Save and create new</button>
  <button  type="submit" name="store" value="store" class="btn btn-simple btn-{{$item->font_color}}">Save</button>
</div>
</div>
</form>
</div>
</div>
@endsection
