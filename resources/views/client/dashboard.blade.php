@extends('client.home')
@section('dashboard')
<div class="col-lg-3 col-md-6 col-sm-6">
    <div class="card card-stats">
        <div class="card-header" data-background-color="purple">
            <i class="material-icons">widgets</i>
        </div>
        <div class="card-content">
            <p class="category">Projects</p>
            <h3 class="title">{{$countProjects}}</h3>
        </div>
        <div class="card-footer">
            <div class="stats">
                <i class="material-icons text-primary">navigate_next</i>
                <a class="text-gray" href="{{ url('projects') }}">See more</a>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6">
    <div class="card card-stats">
        <div class="card-header" data-background-color="blue">
            <i class="material-icons">image</i>
        </div>
        <div class="card-content">
            <p class="category">Photos</p>
            <h3 class="title">{{$countImages}}</h3>
        </div>
        <div class="card-footer">
            <div class="stats">
                <i class="material-icons text-primary">navigate_next</i>
                <a class="text-gray" href="{{ url('photos') }}">See more</a>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6">
    <div class="card card-stats">
        <div class="card-header" data-background-color="green">
            <i class="material-icons">font_download</i>
        </div>
        <div class="card-content">
            <p class="category">Google Fonts</p>
            <h3 class="title">{{count($result->items)}}</h3>
        </div>
        <div class="card-footer">
            <div class="stats">
                <i class="material-icons text-primary">navigate_next</i>
                <a class="text-gray" href="{{ url('googlefonts') }}">See more</a>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6">
    <div class="card card-stats">
        <div class="card-header" data-background-color="red">
            <i class="material-icons">favorite</i>
        </div>
        <div class="card-content">
            <p class="category">Favorites</p>
            <h3  class="title">@if (!$countFavorites) No favorites @else{{$countFavorites}}@endif</h3>
        </div>
        <div class="card-footer">
            <div class="stats">
                <i class="material-icons text-primary">navigate_next</i>
                <a class="text-gray" href="{{ url('favorites') }}">Check out your favorites</a>
            </div>
        </div>
    </div>
</div>
<p class="navbar-brand">Latest projects</p>
<div class="col-xs-12 col-sm-12">
@foreach ($latestDbItem as $firstTwo)
	<div class="col-xs-6 col-sm-6 space-5">
		<div class="card nospace">
			<a href="{{ url('projects/'.$firstTwo->title) }}" rel="tooltip" data-placement="bottom" data-original-title="{{ $firstTwo->title }}">
				<img class="img-responsive img-raised fit" src="{{url('storage/avatars/'.$firstTwo->image)}}"
                alt="{{ $firstTwo->alternative_text }}">
			</a>
		</div>
	</div>
@endforeach
</div>
<div class="col-xs-12 col-sm-12">
@foreach ($secondDownDbItem as $theRest)
	<div class="col-xs-4 col-sm-4 space-5">
		<div class="card nospace">
			<a href="{{ url('projects/'.$theRest->title) }}" rel="tooltip" data-placement="bottom" data-original-title="{{ $theRest->title }}">
				<img class="img-responsive img-raised fit" src="{{url('storage/avatars/'.$theRest->image)}}"
                 alt="{{ $theRest->alternative_text }}">
			</a>
		</div>
	</div>
@endforeach
</div>

<p style="padding-top: 40px;padding-bottom: 35px;" class="navbar-brand">Latest from gallery</p>
<div class="col-xs-12 col-sm-12">
@foreach ($latestDbImages as $firstTwoImages)
	<div class="col-sm-6 space-5">
		<div class="card nospace">
			<a href="{{ url('photos/'.$firstTwoImages->gallery_image) }}" rel="tooltip" data-placement="bottom" data-original-title="See more..">
				<img style="max-height: 170px;" class="img-responsive img-raised fit" 
				src="{{url('storage/gallery_thumbnails/'.$firstTwoImages->gallery_image)}}"
                srcset="{{url('storage/gallery_thumbnails/'.$firstTwoImages->gallery_image.' 600w')}}" 
                sizes="(max-width:600px) 600w">
                alt="{{$firstTwoImages->alternative_text}}">
			</a>
		</div>
	</div>
@endforeach
</div>
<div class="col-xs-12 col-sm-12">
@foreach ($secondDownDbImages as $theRestImages)
	<div class="col-sm-4 space-5">
		<div class="card nospace">
			<a href="{{ url('photos/'.$theRestImages->gallery_image) }}" rel="tooltip" data-placement="bottom" data-original-title="See more..">
				<img style="max-height: 141px;" class="img-responsive img-raised fit" 
				src="{{url('storage/gallery_thumbnails/'.$theRestImages->gallery_image)}}"
                srcset="{{url('storage/gallery_thumbnails/'.$theRestImages->gallery_image.' 600w')}}" 
                sizes="(max-width:600px) 600w">
                alt="{{$theRestImages->alternative_text}}">
			</a>
		</div>
	</div>
@endforeach
</div>
@endsection