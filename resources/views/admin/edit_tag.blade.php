@extends('admin.sidebar')
@section('edit_tag')
<div class="col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4">
	<div class="card">		
	<form method="POST" action="{{ url('admin/gallery/edit_tag/'.$tag->id) }}">
		{{ csrf_field() }}
		<div class="card-content">
			<div class="form-group label-floating">
	        	<label class="control-label">Tag name</label>
	        	<input type="text" name="name" id="name" required="" value="{{ $tag->name }}"
				class="form-control">
			</div>
			<div class="text-right">
				<button class="btn btn-{{$item->font_color}} text-right" type="submit">Edit tag</button>
				<div class="clearfix"></div>
		</div>
	</div>
	</form>
	</div>
</div>
@endsection