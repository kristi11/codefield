@extends('client.home')
@section('userProfile')
<div class="col-xs-12">
	<div class="card text-center">
		<div class="card-content">
			<h2>{{ Auth::user()->name }}</h2>
			{{--<a href="{{ url(Auth::user()->slug.'/editProfile') }}">Edit</a>--}}
 			{{-- <h5>{{ Auth::user()->website }}</h5> --}}
			<h5>{{ Auth::user()->email }}</h5>
			<ul class="nav">
      <li>
        <button data-toggle="collapse" href="#showTags" class="btn btn-simple btn-{{$item->font_color}}">
          Account settings <i class="material-icons">keyboard_arrow_down</i>
        </button>
      </li>
		<ul class="collapse nav" id="showTags">
			<li>
				<form action="{{ url('emailNotifications/'.Auth::id()) }}" method="POST" >
	                  {{ csrf_field() }}
	                  <div class="row text-center">
	                  <input class="" type="hidden" name="email_notifications" />
	                 	@if(Auth::user()->email_notifications == 0)
			                <button type="submit" class="dropdown-toggle btn btn-simple btn-sm" rel="tooltip" data-placement="bottom" title="" data-original-title="Your email notifications are off. Click to enable them">
			                  <i class="material-icons">notifications_off</i> Enable email notifications
			                </button>
	                	@else
			                <button type="submit" class="dropdown-toggle btn btn-simple btn-sm btn-info" rel="tooltip" data-placement="bottom" title="" data-original-title="Your email notifications are on. Click to disable them">
			                  <i class="material-icons">notifications_active</i> Disable email notifications
			                </button>
	                	@endif
	            	</div>
	            </form>
			</li>
			<li>
				<form method="POST" action="{{ url('delete_account/'.Auth::id()) }}">
					{{method_field('DELETE')}}
					{{ csrf_field() }}
				<button type="submit" class="btn btn-danger" onclick="return confirm('You are about to delete your account. This means that this account and all of the data you might have will be removed from our system. Are you sure you want to continue?');">Delete account</button>
				</form>
			</li>
			<li>
				<p>
					<b>
						Deleting means that your account along with all of your data will be completely removed from our system. This operation is irreversible.
					</b>
				</p>
			</li>
		</ul>
	</ul>
			<a href="{{ url('/'.Auth::user()->slug.'/products') }}"
				class="btn btn-simple btn-default">Products
				@if( $countUserProjects != 0 )
					<span class="label label-danger">{{$countUserProjects}}</span>
				@endif
			</a>
			<a href="{{ url(Auth::user()->slug.'/photos') }}"
			 class="btn btn-simple btn-default">Photos
			 @if( $countUserPhotos != 0 )
			 	<span class="label label-danger">{{$countUserPhotos}}</span>
			 @endif
			</a>
		</div>
			@yield('userProjects')
			@yield('userPhotos')
	</div>
	<div class="text-center">{{ $data->links('admin.mdl-bootstrap') }}</div>
</div>
@endsection