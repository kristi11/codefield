@extends('client.userProfile')
@section('userPhotos')
@if(count($data)<=0)
<h3>{{$p}}</h3>
@else
<div class="card">
	<div class="card-content">
		<div class="flexbin flexbin-margin" >
			@foreach ($data as $d)
				<span class="c" >
					<img style="width: auto;max-width: 600px;" class="image size fit" 
					src="{{asset('storage/gallery_thumbnails/'.$d->gallery_image)}}">
					<div class="middle text-center">
						<div class="row" >
							<button hidden="">
								<form action="{{ url('photos/'.$d->id) }}" method="POST" >
									{{method_field('DELETE')}}
									{{ csrf_field() }}
									<button style="color: black;" type="submit"
										class="btn btn-white btn-just-icon btn-xs btn-round hidden-xs"
										onclick="return confirm('Delete photo?');"
										rel="tooltip" data-placement="bottom" title="" 
										data-original-title="Delete photo?">
										<i class="material-icons">close</i>
									</button>
								</form> 
							</button>	
						</div>
					</div>
				</span>
			@endforeach
		</div>
	</div>
</div>
@endif
@endsection