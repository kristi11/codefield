@extends('admin.sidebar')
@section('pending_projects')

<div class="col-xs-12">
	<div class="card">
	<div class="card-header" data-background-color="{{ $item->app_color }}">
		<h4 class="title">Pending Projects</h4>
		<p class="category">Projects waiting for approval</p>
	</div>
<div class="card-content table-responsive">
	<table class="table">
		<thead class="text-{{$item->font_color}}">
			<tr>
				<th>Author name</th>
				<th>Project name</th>
				<th>GitHub repo</th>
				<th>Project status</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($projects as $project)
			<tr>
				<td>{{ $project->author_name }}</td>
				<td>{{ $project->name }}</td>
				<td><a href="{{$project->github_repo }}" target="_blank" rel="noopener">GitHub repository</a></td>
				<td>{{ $project->status }}</td>
				<td class="td-actions">
					<a href="{{ url('approve_project/'.$project->id) }}" type="button"  rel="tooltip" data-placement="bottom" data-original-title="Approve project" class="btn btn-simple btn-success" onclick="return confirm('Approve {{$project->name}} ?');">
						<i class="material-icons">done</i>
					</a>
					<a href="{{ url('reject_project/'.$project->id) }}" rel="tooltip" data-placement="bottom" data-original-title="Reject project" class="btn btn-simple btn-danger" onclick="return confirm('Reject {{$project->name}} ?');">
						<i class="material-icons">close</i>
					</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
</div>
</div>
@endsection




	<div class="text-center">{{ $projects->links('admin.mdl-bootstrap') }}</div>
