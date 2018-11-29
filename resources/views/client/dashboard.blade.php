@extends('client.home')
@section('dashboard')

<div class="col-lg-3 col-md-6 col-sm-6">
    <div class="card card-stats">
        <div class="card-header" data-background-color="purple">
            <i class="material-icons">widgets</i>
        </div>
        <div class="card-content">
            <p class="category">Products</p>
            <h3 class="title">{{$countProjects}}</h3>
        </div>
        <div class="card-footer">
            <div class="stats">
                <i class="material-icons text-primary">navigate_next</i>
                <a class="text-gray" href="{{ url('products') }}">See more</a>
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
{{-- <div class="col-lg-3 col-md-6 col-sm-6">
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
</div> --}}

{{-- add to live site --}}
<div class="col-lg-3 col-md-6 col-sm-6">
    <div class="card card-stats">
        <div class="card-header" data-background-color="red">
            <i class="material-icons">description</i>
        </div>
        <div class="card-content">
            <p class="category">Licenses</p>
            <h3 class="title">@if (!$countLicenses) No licenses @else{{$countLicenses}}@endif</h3>
        </div>
        <div class="card-footer">
            <div class="stats">
                <i class="material-icons text-primary">navigate_next</i>
                <a class="text-gray" href="{{ url('/licenses') }}">See more</a>
            </div>
        </div>
    </div>
</div>
{{-- end --}}

<div class="col-xs-12 col-sm-12 hidden-xs">
<h4>Latest products</h4>
@foreach ($latestDbItem as $firstTwo)
	<div class="col-xs-6 col-sm-6 space-5">
		<div class="card nospace">
			<a href="{{ url('products/'.$firstTwo->title) }}" rel="tooltip" data-placement="bottom" data-original-title="{{ $firstTwo->dsc_title }}">
				<img
          class="lazyload blur-up img-responsive img-raised fit"
          src="{{url('storage/avatars/'.'placeholder-'.$firstTwo->image)}}"
          data-src="{{url('storage/avatars/'.$firstTwo->image)}}"
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
			<a href="{{ url('products/'.$theRest->title) }}" rel="tooltip" data-placement="bottom" data-original-title="{{ $theRest->dsc_title }}">
				<img
          class="lazyload blur-up img-responsive img-raised fit"
          src="{{url('storage/avatars/'.'placeholder-'.$theRest->image)}}"
          data-src="{{url('storage/avatars/'.$theRest->image)}}"
          alt="{{ $theRest->alternative_text }}">
			</a>
		</div>
	</div>
@endforeach
</div>

<div class="col-xs-12 col-sm-12 hidden-xs  mt-30">
  <h4>Latest Photos</h4>
@foreach ($latestDbImages as $firstTwoImages)
	<div class="col-sm-6 space-5">
		<div class="card nospace">
			<a href="{{ url('photos/'.$firstTwoImages->unique_id) }}" rel="tooltip" data-placement="bottom" data-original-title="See more..">
				 <img style="max-height: 170px;" class="lazyload blur-up img-responsive img-raised fit"
            src="{{asset('storage/tiny_photos/'.$firstTwoImages->gallery_image)}}"
            alt="{{$firstTwoImages->alternative_text}}"
            data-sizes="auto"
            data-src="{{asset('storage/medium_photos/'.$firstTwoImages->gallery_image)}}"
            data-srcset="{{asset('storage/medium_photos/'.$firstTwoImages->gallery_image.' 860w')}},
            {{asset('storage/medium_photos/'.$firstTwoImages->gallery_image.' 640w')}},
            {{asset('storage/mobile_photos/'.$firstTwoImages->gallery_image.' 420w')}}"
          >
			</a>
		</div>
	</div>
@endforeach
</div>
<div class="col-xs-12 col-sm-12 hidden-xs">
@foreach ($secondDownDbImages as $theRestImages)
	<div class="col-sm-4 space-5">
		<div class="card nospace">
			<a href="{{ url('photos/'.$theRestImages->unique_id) }}" rel="tooltip" data-placement="bottom" data-original-title="See more..">
				<img style="max-height: 141px;" class="lazyload blur-up img-responsive img-raised fit"
            src="{{asset('storage/tiny_photos/'.$theRestImages->gallery_image)}}"
            alt="{{$theRestImages->alternative_text}}"
            data-sizes="auto"
            data-src="{{asset('storage/medium_photos/'.$theRestImages->gallery_image)}}"
            data-srcset="{{asset('storage/medium_photos/'.$theRestImages->gallery_image.' 860w')}},
            {{asset('storage/medium_photos/'.$theRestImages->gallery_image.' 640w')}},
            {{asset('storage/mobile_photos/'.$theRestImages->gallery_image.' 420w')}}"
          >
			</a>
		</div>
	</div>
@endforeach
</div>

<h3 class="col-xs-12 hidden-sm hidden-md hidden-lg">Latest Products</h3>
<div class="card-content table-responsive hidden-sm hidden-md hidden-lg">

    <table class="table text-center">
        <tr>
        @foreach ($projects as $widget)
        <td>
              <div style="margin-bottom:0;" class="card">
                <div class="pr_img">
                  <div class="ct-chart" id="dailySalesChart">
                  <picture>
                   <img
                     style="max-height: 300px;"
                     class="lazyload blur-up img-responsive img-rounded fit"
                     src="{{asset('storage/avatars/'.'placeholder-'.$widget->image)}}"
                     data-src="{{asset('storage/avatars/'.$widget->image)}}"
                     alt="{{$widget->alternative_text}}">
                   </picture>
                  </div>
                </div>
                <div class="row">
                <div class="text-center">
                  <a href="{{ url('products/'.$widget->title) }}" type="button" class="btn btn-danger btn-simple" rel="tooltip" data-placement="bottom" title="" data-original-title="Read more..." rel="noopener" >
                  <i class="material-icons">search</i>
                  </a>
                </div>
                </div>
                <div class="card-content">
                  <h4 class="title" id="title">{{ str_limit($widget->dsc_title,30) }}</h4>
                  @if($widget->views == 0)
                    <h5 class="category">No views</h5>
                  @elseif($widget->views == 1)
                    <h5 class="category">{{$widget->views}} download</h5>
                  @else
                    <h5 class="category">{{$widget->views}} views</h5>
                  @endif

                 @if($widget->zip_file)
                  @if($widget->downloads == 0)
                    <h5 class="category">No downloads</h5>
                  @elseif($widget->downloads == 1)
                    <h5 class="category">{{$widget->downloads}} download</h5>
                  @else
                    <h5 class="category">{{$widget->downloads}} downloads</h5>
                  @endif
                  @else
                    <h5 class="category">Learning</h5>
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

<h3 class="col-xs-12 hidden-sm hidden-md hidden-lg">Latest Photos</h3>
<div class="card-content table-responsive hidden-sm hidden-md hidden-lg">
    <table class="table text-center">
        <tr>
@foreach ($photos as $p)
<td>
    <div class="card nospace">
        <a href="{{ url('photos/'.$p->unique_id) }}" rel="tooltip" data-placement="bottom" data-original-title="See more..">
            <img style="max-height: 198px;" class="lazyload blur-up img-responsive img-raised fit"
              src="{{asset('storage/tiny_photos/'.$p->gallery_image)}}"
              alt="{{$p->alternative_text}}"
              data-sizes="auto"
              data-src="{{asset('storage/medium_photos/'.$p->gallery_image)}}"
              data-srcset="{{asset('storage/medium_photos/'.$p->gallery_image.' 860w')}},
              {{asset('storage/medium_photos/'.$p->gallery_image.' 640w')}},
              {{asset('storage/mobile_photos/'.$p->gallery_image.' 420w')}}"
            >
        </a>
    </div>
</td>
@endforeach
</tr>
    </table>
</div>


<h4 class="col-xs-12 mt-30 hidden-xs" style="margin-bottom:-12px">Latest Licenses</h4>
<h3 class="col-xs-12 hidden-sm hidden-md hidden-lg">Latest Licenses</h3>
<div class="card-content table-responsive">
    <table class="table text-center">
        <tr>
@foreach ($licenses as $license)
<td>
    <div class="card nospace">
            <div class="card-content text-center">
      <ul class="nav">
          <li>
            <h3>
              <b>{{ ucwords($license->shortIdentifier) }}</b>
            </h3>
          </li>
          <li>
            <button data-toggle="collapse" href="#{{$license->id}}" class="btn btn-simple btn-success">
              View text <i class="material-icons">keyboard_arrow_down</i>
            </button>
          </li>
        <ul class="collapse nav" id="{{$license->id}}">
          <li>
              <h4>
                {{ $license->licenseName }}
              </h4>
            </li>
           <p class="card-description">Click anywhere on the text to copy it</p>
          <li>
            <pre {{-- id='display' --}} onClick='copyText(this)'> {{ $license->licenseText }} </pre>
          </li>
        </ul>
      </ul>
    </div>
    </div>
</td>
@endforeach
</tr>
    </table>
</div>
@endsection