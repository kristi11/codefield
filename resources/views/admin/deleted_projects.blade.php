@extends('admin.sidebar')
	@section('deleted_projects')
	<div class="">
<div class="card">
<div class="card-header" data-background-color="{{ $item->app_color }}">
	<div class="row col-xs-12 nospace">
		<div class=" col-xs-6 nospace">
			<h4 class="title nospace">Projects</h4>
		</div>	
		<form class="col-xs-6 text-right nospace" method="POST" action="{{ url('delete_all') }}">
			{{ method_field('DELETE') }}
			{{ csrf_field() }}
			<button type="submit" class="btn btn-simple btn-white text-right nospace" type="submit" rel="tooltip" data-placement="bottom" data-original-title="Delete permanently"
			onclick="return confirm('Delete all {{count($deleted_projects)}} projects permanently?');">
			<svg fill="#FFFFFF" height="36" viewBox="0 0 24 24" width="36" xmlns="http://www.w3.org/2000/svg">
			    <path d="M0 0h24v24H0V0z" fill="none"/>
			    <path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zm2.46-7.12l1.41-1.41L12 12.59l2.12-2.12 1.41 1.41L13.41 14l2.12 2.12-1.41 1.41L12 15.41l-2.12 2.12-1.41-1.41L10.59 14l-2.13-2.12zM15.5 4l-1-1h-5l-1 1H5v2h14V4z"/>
			    <path d="M0 0h24v24H0z" fill="none"/>
			</svg>
			</button>
		</form>
	</div>
		<p class="category">Restore or permanently delete projects</p>		
 </div>
		<div class="card-content  table-responsive">
			<table class="table">
				@foreach ($deleted_projects as $project)
					<tr class="text-center">
					<td class=""> 
					{{$project->title}}
					</td>
						<td class="">
						{{$project->body}}
						</td>

						<td class="td-actions text-right">
						

							<form method="POST" action="{{ url('/admin/deleted_projects/'.$project->id) }}">
								{{ csrf_field() }}
								<button class="btn btn-success btn-simple btn-xs" type="submit" rel="tooltip" data-placement="bottom" data-original-title="Restore"
								onclick="return confirm('Restore {{$project->title}}?');">
								 <i class="material-icons">restore</i>
								</button>
							</form>
{{-- 							<fastactions inline-template>
								<button class="btn btn-danger btn-simple btn-xs" type="submit" rel="tooltip" data-placement="bottom" data-original-title="Delete permanently" @click="destroy">
									<i class="material-icons">close</i>
									</button>
							</fastactions> --}}

							<form class="" method="POST" action="{{ url('/admin/deleted_projects/'.$project->id) }}">
								{{ method_field('DELETE') }}
								{{ csrf_field() }}
								<button type="submit" class="btn btn-danger btn-simple btn-xs" type="submit" rel="tooltip" data-placement="bottom" data-original-title="Delete permanently"
								onclick="return confirm('Delete {{$project->title}} premanently?');">
									<i class="material-icons">close</i>
														
								</button>
							</form>
						</td>
					</tr>
					
					
				@endforeach
			</table>
		</div>
	</div>
	</div>
	@endsection

