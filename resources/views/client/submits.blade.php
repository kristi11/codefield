@extends('client.home')
@section('submits')

<div class="col-xs-12 col-md-8 col-md-offset-2">
	<div class="card">
	{{-- <div class="card-header" data-background-color="{{ $item->app_color }}">
		<h4 class="title">Submitted Projects</h4>
		<p class="category">Your submitted project's history</p>
	</div> --}}
<div class="card-content table-responsive">
	<table class="table">
		<thead class="text-{{$item->font_color}}">
			<tr>
				<th>Project name</th>
				<th>GitHub repo</th>
				<th>Project status</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($projects as $project)
			<tr>
				<td>{{ $project->name }}</td>
				<td><a href="{{$project->github_repo }}" target="_blank" rel="noopener">GitHub repository</a></td>
				@if ($project->status == 'approved')
				<td class="td-actions">
					<button class="btn btn-simple btn-success">{{ $project->status }}</button>
				</td>
				@elseif ($project->status == 'pending')
				<td class="td-actions">
					<button class="btn btn-simple btn-warning">{{ $project->status }}</button>
				</td>
				@else
				<td class="td-actions">
					<button class="btn btn-simple btn-danger">{{ $project->status }}</button>
				</td>
				@endif
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
</div>
</div>
@endsection
<div class="text-center">{{ $projects->links('admin.mdl-bootstrap') }}</div>