@extends('admin.sidebar')
@section('main_banner')

@include('errors')
<div class="col-sm-6 col-md-4">			
		<div class="card">
			<div class="card-header" data-background-color="{{ $item->app_color }}">
				<h4 class="title">Cache control</h4>
				<a class="category" >Control the cache of the app </a>
			</div>
			<div class="card-content text-center">
				
			<div class="col-sm-6">
				<a href="{{ url('cache_routes') }}" class="btn btn-{{$item->font_color}} btn-block" >
				Cache routes</a>
			</div>
			<div class="col-sm-6">
				<a href="{{ url('clear_routes') }}" class="btn btn-{{$item->font_color}} btn-block" >
				Clear routes</a>
				</div>
			
				<div class="col-sm-6">
				<a href="{{ url('cache_config') }}" class="btn btn-{{$item->font_color}} btn-block" >
				Cache Config</a>
				</div>
				<div class="col-sm-6">
				<a href="{{ url('clear_config') }}" class="btn btn-{{$item->font_color}} btn-block" >
				Clear config</a>
				</div>
			
				<div class="col-xs-12">
				<a href="{{ url('clear_views') }}" class="btn btn-{{$item->font_color}} btn-block" >
				Clear views cache</a>
			</div>
			<div class="col-xs-12">
				<a href="{{ url('clear_cache') }}" class="btn btn-{{$item->font_color}} btn-block" >
				Clear cache</a>
			</div>
			</div>
		</div>
	</div>
<div class="col-sm-6 col-md-4">			
		<div class="card">
			<div class="card-header" data-background-color="{{ $item->app_color }}">
				<h4 class="title">App color</h4>
				<a class="category" >change the app color</a>
			</div>
			<div class="card-content">
				<form action="{{ url('admin/settings/'.$item->id) }}" method="POST">
					{{csrf_field()}}
					<div class="form-group label-floating">
        			<label class="control-label">App color</label>
					<input type="text" class="form-control" name="app_color" id="app_color" value="{{ $item->app_color }}" required="">
					</div>
					<div class="form-group label-floating">
					<label class="control-label">Font color</label>
					<input type="text" class="form-control" name="font_color" id="font_color" value="{{ $item->font_color }}" required="">
					</div>
					<button type="submit" class="btn btn-{{$item->font_color}} pull-right" id="change_color">Change color</button>
				</form>
			</div>
		</div>
	</div>

	<div class="col-sm-6 col-md-4">			
		<div class="card">
			<div class="card-header" data-background-color="{{ $item->app_color }}">
				<h4 class="title">Items per page</h4>
				<a class="category" >Control the number of items per page </a>
			</div>
			<div class="card-content">
				<form action="{{ url('admin/settings/'.$paginationNr->id.'/update') }}" method="POST">
					{{csrf_field()}}
					<div class="form-group label-floating  col-sm-4">
        			<label class="control-label">Projects per page</label>
					<input type="text" class="form-control" name="projects" id="projects" value="{{ $paginationNr->projects }}" required="">
					</div>
					<div class="form-group label-floating  col-sm-4">
					<label class="control-label">Images per page</label>
					<input type="text" class="form-control" name="gallery" id="gallery" value="{{ $paginationNr->gallery }}" required="">
					</div>
					<div class="form-group label-floating  col-sm-4">
					<label class="control-label">Subscribers per page</label>
					<input type="text" class="form-control" name="subscribers" id="subscribers" value="{{ $paginationNr->subscribers }}" required="">
					</div>
					<button type="submit" class="btn btn-{{$item->font_color}} pull-right" id="change_nr">Update
					</button>
				</form>
			</div>
		</div>
	</div>

	

		<div class="col-sm-12">			
		<div class="card">
			<div class="card-header" data-background-color="{{ $item->app_color }}">
				<h4 class="title">Roles and Permissions</h4>
				<a class="category" >Control roles and permissions </a>
			</div>

			<div class="card-content">
				<div class="col-xs-12 col-sm-5">
					<div class="col-xs-12">
							<form action="{{ url('createRole') }}" method="POST">
							{{csrf_field()}}
							<div class="form-group label-floating ">

							<label class="control-label">Create Role</label>
							<input type="text" class="form-control" name="name" id="add_role" value="{{ old('name') }}" required="">
							<button type="submit" class="btn btn-{{$item->font_color}} pull-right" id="role">Create Role
							</button>
							</div>
							</form>
							</div>
						<div class="col-xs-12">
							<form action="{{ url('createPermission') }}" method="POST">
							{{csrf_field()}}
							<div class="form-group label-floating ">

							<label class="control-label">Create Permission</label>
							<input type="text" class="form-control" name="name" id="add_permission" value="{{ old('name') }}" required="">
							<button type="submit" class="btn btn-{{$item->font_color}} pull-right" id="permission">Create Permission
							</button>
							</div>
							</form>
							</div>
							<div class="col-xs-12">
							<form action="{{ url('givePermissionToAuthorizedUser') }}" method="POST">
							{{csrf_field()}}
							<div class="col-xs-12 col-md-6">
							<div class="form-group label-floating ">
							<label class="control-label">Give permission </label>
							<input type="text" class="form-control" name="name" id="give_permission" value="{{ old('name') }}" required="">
							</div>
						</div>
						<div class="col-xs-12 col-md-6">
							<div class="form-group label-floating ">
							<label class="control-label">to role </label>
							<input type="text" class="form-control" name="role" id="give_permission" value="{{ old('name') }}" required="">
							</div>
							<button type="submit" class="btn btn-{{$item->font_color}} pull-right" id="givePermission">Give
							</button>
						</div>						
							</form>
							</div>

				</div>
				<div class="col-xs-12 col-sm-7">
					<div class="table-responsive">
					<table class="table">
						<tr>
							<th>
								<p class="category"><b>Admins:</b></p>
							</th>
							<th>
								<p class="category"><b>Admin's permissions:</b></p>
							</th>
							<th>
								<p class="category"><b>User's permissions:</b></p>
							</th>
							<th>
								<p class="category"><b>All permissions:</b></p>
							</th>
						</tr>
						<tr>
							<td>
					@foreach ($userRoles as $r){{$r->name}}, @endforeach
					</td>
					<td>
					@foreach  ($AdminPermissions as $p)
						<form action="{{ url('/admin/settings/admin/'.$p->id) }}" method="POST">
							{{csrf_field()}}
					{{$p->name}}<button type="submit" class="btn btn-simple btn-xs btn-danger" rel="tooltip" data-placement="bottom" title="" data-original-title="Revoke admin permission" onclick="return confirm('Revoke {{$p->name}} permission from admin?');" ><i class="material-icons">close</i></button>
					</form>
					@endforeach
				</td>
				<td>
					@foreach  ($UserPermissions as $u)
					<form action="{{ url('/admin/settings/user/'.$u->id) }}" method="POST">
						{{method_field('DELETE')}}
							{{csrf_field()}}
					{{$u->name}}<button type="submit" class="btn btn-simple btn-xs btn-danger" rel="tooltip" data-placement="bottom" title="" data-original-title="Revoke user permission" onclick="return confirm('Revoke {{$u->name}} permission from user?');" ><i class="material-icons">close</i></button>
					</form>
					@endforeach
				</td>
				<td>
					@foreach  ($permissions as $pr)
						<form action="{{ url('/admin/settings/deletePermissions/'.$pr->id) }}" method="POST">
							{{method_field('DELETE')}}
							{{csrf_field()}}
					{{$pr->name}}<button type="submit" class="btn btn-simple btn-xs btn-danger" rel="tooltip" data-placement="bottom" title="" data-original-title="Remove permission" onclick="return confirm('Remove {{$pr->name}} permission?');" id="submit"><i class="material-icons">close</i></button>
					</form>
					@endforeach
				</td>
			</tr>
		</table>
	</div>
				</div>
			</div>
			</div>
		</div>
	</div>
@endsection