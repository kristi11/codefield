@extends('client.searchUserProfile')
@section('uProjects')
@if(count($data)<=0)
 <h3>{{$p}}</h3>
 @else
<div class="col-md-8 col-md-offset-2">
<div class="card-content table-responsive">
 <table class="table">
	<thead class="text-default">
		<tr>
			<th style="border:none;" class="text-center">Product name</th>
			<th style="border:none;" class="text-center">Link</th>
			<th style="border:none;" class="text-center">Product status</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($data as $d)
		<tr>
			<td style="border:none;">{{ $d->name }}</td>
			<td style="border:none;"><a href="{{$d->github_repo }}" target="_blank" rel="noopener">Link</a></td>
			@if ($d->status == 'approved')
			<td style="border:none;">
				<button class="btn btn-simple btn-success btn-sm">{{ $d->status }}</button>
			</td>
			@elseif ($d->status == 'pending')
			<td style="border:none;">
				<button class="btn btn-simple btn-warning btn-sm">{{ $d->status }}</button>
			</td>
			@else
			<td style="border:none;">
				<button class="btn btn-simple btn-danger btn-sm">{{ $d->status }}</button>
			</td>
			@endif
		</tr>
		@endforeach
	</tbody>
</table>
</div>
</div>
@endif
@endsection