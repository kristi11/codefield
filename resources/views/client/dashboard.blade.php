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
<p class="navbar-brand hidden-xs">Latest projects</p>
<div class="col-xs-12 col-sm-12 hidden-xs">
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
<div class="col-xs-12 col-sm-12 hidden-xs">
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

<p style="padding-top: 40px;padding-bottom: 35px;" class="navbar-brand hidden-xs">Latest photos</p>
<div class="col-xs-12 col-sm-12 hidden-xs">
@foreach ($latestDbImages as $firstTwoImages)
	<div class="col-sm-6 space-5">
		<div class="card nospace">
			<a href="{{ url('photos/'.$firstTwoImages->gallery_image) }}" rel="tooltip" data-placement="bottom" data-original-title="See more..">
				<img style="max-height: 170px;" class="img-responsive img-raised fit" 
				src="{{url('storage/gallery_thumbnails/'.$firstTwoImages->gallery_image)}}"
                srcset="{{url('storage/gallery_thumbnails/'.$firstTwoImages->gallery_image.' 600w')}}" 
                sizes="(max-width:600px) 600w"
                alt="{{$firstTwoImages->alternative_text}}">
			</a>
		</div>
	</div>
@endforeach
</div>
<div class="col-xs-12 col-sm-12 hidden-xs">
@foreach ($secondDownDbImages as $theRestImages)
	<div class="col-sm-4 space-5">
		<div class="card nospace">
			<a href="{{ url('photos/'.$theRestImages->gallery_image) }}" rel="tooltip" data-placement="bottom" data-original-title="See more..">
				<img style="max-height: 141px;" class="img-responsive img-raised fit" 
				src="{{url('storage/gallery_thumbnails/'.$theRestImages->gallery_image)}}"
                srcset="{{url('storage/gallery_thumbnails/'.$theRestImages->gallery_image.' 600w')}}" 
                sizes="(max-width:600px) 600w"
                alt="{{$theRestImages->alternative_text}}">
			</a>
		</div>
	</div>
@endforeach
</div>


<div class="container-fluid hidden-sm hidden-md hidden-lg">
    <h2>Latest Projects</h2>
</div>
<div class="card-content table-responsive hidden-sm hidden-md hidden-lg">
    <table class="table text-center">
        <tr>         
        @foreach ($projects as $widget)
        <td>
              <div class="card fe_pr">
                <div class="pr_img">
                  <div class="ct-chart" id="dailySalesChart">
                  <picture>
                   <img style="max-height: 300px;" class="img-responsive img-rounded fit" 
                   src="{{asset('storage/avatars/'.$widget->image)}}"
                   alt="{{$widget->alternative_text}}">
                   </picture>
                  </div>
                </div>
                <div class="row">
                <div class="text-center">
                  <a href="{{ url('g_project/'.$widget->title) }}" type="button" class="btn btn-danger btn-simple" rel="tooltip" data-placement="bottom" title="" data-original-title="Read more..." rel="noopener" >
                  <i class="material-icons">search</i>
                  </a>           
                </div>
                </div>
                <div class="card-content">
                  <h4 class="title" id="title">{{ str_limit($widget->title,30) }}</h4>
                  @if($widget->downloads == 0)
                    <h5 class="category">No downloads</h5>
                  @elseif($widget->downloads == 1)
                    <h5 class="category">{{$widget->downloads}} download</h5>
                  @else
                    <h5 class="category">{{$widget->downloads}} downloads</h5>
                  @endif  
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i>  Posted  {{ $widget->created_at->diffForHumans() }}
                  </div>
                </div>
              </div>
          </td>
            @endforeach      
        </tr>
    </table>
</div>

<div class="container-fluid hidden-sm hidden-md hidden-lg">
    <h2>Latest photos</h2>
</div>
<div class="card-content table-responsive hidden-sm hidden-md hidden-lg">
    <table class="table text-center">
        <tr>  
@foreach ($photos as $p)
<td>
    <div class="card nospace">
        <a href="{{ url('g_photo/'.$p->gallery_image) }}" rel="tooltip" data-placement="bottom" data-original-title="See more..">
            <img style="max-height:198px;" class="img-responsive img-raised fit" 
            src="{{url('storage/gallery_thumbnails/'.$p->gallery_image)}}"
            alt="{{$p->alternative_text}}">
        </a>
    </div>
</td>
@endforeach
</tr>
    </table>
</div>
@endsection