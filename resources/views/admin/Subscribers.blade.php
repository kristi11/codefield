@extends('admin.sidebar')
@section('Subscribers')

{{-- <div class="container-fluid"> --}}
	<div class="col-xs-12">
	<div class="card">
	<div class="card-header" data-background-color="{{ $item->app_color }}">
		<h4 class="title">Subscribers list</h4>
		<p class="category">
			{{$countActiveNotifications}} users want to recieve email notifications
		</p>
	</div>
	<div class="card-content table-responsive">
		<table class="table">
		  <thead class="text-{{$item->font_color}}">
			<tr>
		      <th>Id</th>
		      <th>Provider_id</th>
		      <th>Name</th>
		      <th>E-mail</th>
		      <th>Signed up</th>
		      <th>Notifications</th>
		    </tr>
		  </thead>
		  <tbody>
		  @foreach($subscribers as $subscriber)
		    <tr>
		      <th scope="row">{{$subscriber->id}}</th>
		      <td><b>{{$subscriber->provider_id}}</b></td>
		      <td>{{$subscriber->name}}</td>
		      <td>{{$subscriber->email}}</td>
		      <td>{{$subscriber->created_at->diffForHumans()}}</td>
		      <td class="text-muted">
		      	@if($subscriber->email_notifications == 1)
		      		active
		      	@else
		      		disabled
		      	@endif
		      </td>
		    </tr>
		   @endforeach		   
		  </tbody>
		</table>
		</div>
	</div>
	<div class="text-center">{{ $subscribers->links('admin.mdl-bootstrap') }}</div>
	</div>
{{-- </div> --}}
@endsection