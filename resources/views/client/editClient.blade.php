@extends('client.home')
@section('editClient')

<div class="col-md-8 col-md-offset-2">
	<div class="card">
		<div class="card-content">
			<form method="POST" action="{{ url('updateClient/'.Auth::user()->slug) }}">
		</div>
	</div>
</div>

@endsection