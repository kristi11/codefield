@extends('client.home')
@section('editClient')

<div class="col-md-8 col-md-offset-2">
	<div class="card">
		<div class="card-content">
			<form method="POST" action="{{ url('updateProfile/'.Auth::user()->slug) }}">
			{{ csrf_field() }}
		      @include('errors')
				<div class="form-group label-floating">
		        <label class="control-label">Website (optional)</label>
		          <input type="text" name="website" class="form-control" value="{{ old('website') }}">
		        </div>
		        <div class="form-group label-floating">
		        <label class="control-label">Github profile (optional)</label>
		          <input type="text" name="github_profile" class="form-control" value="{{old('github_profile')}}">
		        </div>
		        <button class="btn btn-{{$item->font_color}}" type="submit">Update</button>
				<div class="clearfix"></div>
			</form>
		</div>
	</div>
</div>

@endsection