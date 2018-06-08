@extends('admin.sidebar')
@section('gallery')
<div class="col-xs-12">
{{-- 	<div class="col-xs-12 text-right">
<form  method="POST" action="{{ url('empty_gallery') }}">
			{{ method_field('DELETE') }}
			{{ csrf_field() }}
			<button type="submit" class="btn btn-simple btn-danger" type="submit" onclick="return confirm('Empty Gallery');">
				Empty gallery
			</button>
		</form>
</div> --}}
	<div class="card">
		<div class="card-content">
			<div class="flexbin flexbin-margin" >
				@foreach ($gallery as $img)
					<span class="c" >
						{{-- <a href=""> --}}
							<img style="width: auto;max-width: 600px;" class="image size fit" 
							src="{{asset('storage/medium_photos/'.$img->gallery_image)}}"
							srcset="{{asset('storage/medium_photos/'.$img->gallery_image.' 860w')}}"
							srcset="{{asset('storage/medium_photos/'.$img->gallery_image.' 640w')}}"
							srcset="{{asset('storage/mobile_photos/'.$img->gallery_image.' 420w')}}"
							>{{-- </a> --}}
						<div class="middle text-center">
							<div class="row" >
								{{-- <a type="button" class="btn btn-white btn-just-icon btn-xs btn-round hidden-xs" href="">
									<i style="color: black" class="material-icons">edit</i>
								</a> --}}
								<button hidden="">
									<form action="{{ url('/admin/gallery/'.$img->id) }}" method="POST" >
										{{method_field('DELETE')}}
										{{ csrf_field() }}
										<button style="color: black;" type="submit"
											class="btn btn-white btn-just-icon btn-xs btn-round hidden-xs"
											onclick="return confirm('Send image to trash?');"
											rel="tooltip" data-placement="bottom" title="" data-original-title="Send to trash">
											<i class="material-icons">close</i>
										</button>
									</form> 
								</button>
									{{-- <a type="button" class="btn btn-white btn-just-icon btn-xs btn-round hidden-xs" href="">
									<i style="color: black" class="material-icons">close</i>
								</a> --}}
								{{-- <button type="button" class="btn btn-white btn-just-icon btn-xs btn-round hidden-xs"
								rel="tooltip" data-placement="bottom" title="" data-original-title="share">
									<i style="color: black" class="material-icons">share</i>
								</button> --}}		
							</div>
						</div>
					</span>
				@endforeach
			</div>
		</div>
	</div>
</div>
<div class="text-center">{{ $gallery->links('admin.mdl-bootstrap') }}</div>
@endsection