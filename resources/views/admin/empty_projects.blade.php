@extends('admin.sidebar')
	@section('empty_projects')
		<div class="col-sm-4 col-sm-offset-4">
			<div class="card">
				<div class="card-content text-center">
				<h4 class="title">You haven't created any projects</h4>
					<a class="btn btn-{{$item->font_color}}" href="{{ url('/admin/projects/create') }}">Create new</a>
				</div>
			</div>
		</div>
	@endsection