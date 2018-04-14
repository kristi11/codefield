@extends('admin.sidebar')
@section('trash')

		
		
<div class="col-xs-12">
<div class="col-xs-12 text-right">
<form  method="POST" action="{{ url('delete_all') }}">
			{{ method_field('DELETE') }}
			{{ csrf_field() }}
			<button type="submit" class="btn btn-simple btn-danger" type="submit" onclick="return confirm('Empty Trash?');">
				Empty trash
			</button>
		</form>
</div>


			<div class="row">
				@foreach ($deleted_admins as $user)
				<div class="col-xs-6 col-sm-3 col-md-6 col-lg-3 text-center">
		<div class="card card-stats">
					 <div class="card-header" data-background-color="{{ $item->app_color }}">
					 		<i class="material-icons">account_circle</i>
					 	</div>
						<div class="card-content">
							{{$user->name}}
						</div>

					
						

						<div class="card-footer">
							<button hidden="">
							<form  method="POST"
							 action="{{ url('/admin/deleted_admins/'.$user->id) }}">
								{{ csrf_field() }}
								
								<button class="btn btn-success btn-simple btn-xs" type="submit" rel="tooltip" data-placement="bottom" data-original-title="Restore"
								onclick="return confirm('Restore {{$user->name}}?');">
									 <i class="material-icons">restore</i>
								</button>
							</form>
								</button>
								<button hidden="">
							<form method="POST" action="{{ url('/admin/deleted_admins/'.$user->id) }}">
								{{ method_field('DELETE') }}
								{{ csrf_field() }}
								<button  type="submit" class="btn btn-danger btn-simple btn-xs" type="submit" rel="tooltip" data-placement="bottom" data-original-title="Delete permanently" 
								onclick="return confirm('Delete {{$user->name}} permanently?');">
									<i class="material-icons">close</i>
								</button>
							</form>
							</button>
						</div>
						</div>
		</div>
				
				@endforeach
		</div>
		<div class="row">
			
				@foreach ($deleted_projects as $project)
				<div class="col-xs-6 col-sm-3 col-md-6 col-lg-3 text-center">
		<div class="card card-stats">
					<div class="card-header" data-background-color="{{ $item->app_color }}">
					<i class="material-icons">description</i>
					</div>
					<div class="card-content">
					 
					{{ str_limit($project->title,20)}}
					</div>				
<div class="card-footer">
	<button hidden="">
		<form method="POST" action="{{ url('/admin/deleted_projects/'.$project->id) }}">
			{{ csrf_field() }}
			<button class="btn btn-success btn-simple btn-xs" type="submit" rel="tooltip" data-placement="bottom" data-original-title="Restore"
			onclick="return confirm('Restore {{$project->title}}?');">
			 <i class="material-icons">restore</i>
			</button>
		</form>
		</button>

		<button hidden="">
			<form method="POST" action="{{ url('/admin/deleted_projects/'.$project->id) }}">
				{{ method_field('DELETE') }}
				{{ csrf_field() }}
				<button type="submit" class="btn btn-danger btn-simple btn-xs" type="submit" rel="tooltip" data-placement="bottom" data-original-title="Delete permanently"
				onclick="return confirm('Delete {{$project->title}} premanently?');">
					<i class="material-icons">close</i>
										
				</button>
			</form>
		</button>
	</div>
</div>
</div>				
@endforeach
</div>
<div class="row">

	@foreach ($deleted_images as $image)
<div class="col-xs-6 col-sm-3 col-md-6 col-lg-3 text-center">
<div class="card fe_pr">
	<div class="pr_img">
	<img style="height: 100px; object-fit: cover;" src="{{ url('storage/trash/'.$image->gallery_image) }}">
	</div>

<div class="card-content">
						
	<button hidden="">

		<form method="POST" action="{{ url('/admin/trash/'.$image->id) }}">
			{{ csrf_field() }}
			<button class="btn btn-success btn-simple btn-xs" type="submit" rel="tooltip" data-placement="bottom" data-original-title="Restore"
			onclick="return confirm('Restore image?');">
			 <i class="material-icons">restore</i>
			</button>
		</form>
		</button>

		<button hidden="">
			<form method="POST" action="{{ url('/admin/trash/'.$image->id) }}">
				{{ method_field('DELETE') }}
				{{ csrf_field() }}
				<button type="submit" class="btn btn-danger btn-simple btn-xs" type="submit" rel="tooltip" data-placement="bottom" data-original-title="Delete permanently"
				onclick="return confirm('Delete image premanently?');">
					<i class="material-icons">close</i>
										
				</button>
			</form>
		</button>
	</div>
	</div>
</div>
	
@endforeach
</div>
</div>
@endsection