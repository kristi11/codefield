@extends('client.home')
@section('dashboard')
<style>
.header {
    background: #FF4E50;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to left, #F9D423, #FF4E50);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to left, #F9D423, #FF4E50); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}
     .off-canvas-sidebar .nav {
        background-color: white;
        height: 100vh;
        margin-top: 0px;
    }
    .scroll {
      background-color: #fff;
      box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.14);
      text-align: center;
  white-space: nowrap;
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
  -ms-overflow-style: -ms-autohiding-scrollbar;
  }
   .scroll2 {
        text-align: center;
        white-space: nowrap;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: -ms-autohiding-scrollbar;
  }
  .scroll::-webkit-scrollbar {
    display: none;
}
.scroll2::-webkit-scrollbar {
    display: none;
}
.table-responsive::-webkit-scrollbar {
    display: none;
}
  .table-responsive {
    padding: 1em;
    border: none;
  }
  .table>tbody>tr>td, 
  .table>tbody>tr>th, 
  .table>tfoot>tr>td, 
  .table>tfoot>tr>th, 
  .table>thead>tr>td, 
  .table>thead>tr>th {
    border: none;
    min-width: 20em;
    max-width: 20em;
}
.space {
    padding: 2em;
}
@media screen and (max-width: 767px) {
.table-responsive>.table>tbody>tr>td, 
.table-responsive>.table>tbody>tr>th, 
.table-responsive>.table>tfoot>tr>td, 
.table-responsive>.table>tfoot>tr>th, 
.table-responsive>.table>thead>tr>td, 
.table-responsive>.table>thead>tr>th {
    white-space: normal; 
    min-width: 20em;
    max-width: 20em;
}
}
.cd-size {
    min-width: 20em;
    height: 14em;
}
.navbar .navbar-nav > ul {
  background-color: #fff;
}
.brand {
    padding: 0;
    margin: 0;
    font-size: 16vw;
    text-align: center;
    color: white;
    font-family: Baloo,sans-serif;
    text-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
}
.description {
    padding: 0;
    margin: 0;
    font-size: 2vw;
    text-align: center;
    color: white;
    font-family: Baloo,sans-serif;
    text-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
    padding-bottom: 2.5em;
}
@media (min-width: 1000px){
  .ipro{
    display: none;
}
.ht{
  max-height: 464px;
}
}
@media (min-width: 1199px){
.ht{
  max-height: 438px;
}
}
.hidden-mobile {

}
.hidden-tablet {

}
@media (max-width: 550px) {
    .hidden-mobile {
        display: none;
    }
    .description {
    font-size: 4vw;
    padding-left: 0.5em;
    padding-right: 0.5em;
}
}
@media (min-width: 550px) and (max-width: 768px) {
.hidden-tablet {
display: none;
}
}
.space-ud {
    margin-top: 4.5em;
    margin-bottom: 1.5em;
}
body, h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, {
  font-family: Circular,Helvetica,Arial,sans-serif;
  color: #222326;
  line-height: 1.5em;
}
</style>
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
			<a href="{{ url('photos/'.$firstTwoImages->unique_id) }}" rel="tooltip" data-placement="bottom" data-original-title="See more..">
				<img style="max-height: 170px;" class="img-responsive img-raised fit" 
				src="{{url('storage/medium_photos//'.$firstTwoImages->gallery_image)}}"
        srcset="{{url('storage/medium_photos/'.$firstTwoImages->gallery_image.' 860w')}}" 
        srcset="{{url('storage/medium_photos/'.$firstTwoImages->gallery_image.' 640w')}}" 
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
			<a href="{{ url('photos/'.$theRestImages->unique_id) }}" rel="tooltip" data-placement="bottom" data-original-title="See more..">
				<img style="max-height: 141px;" class="img-responsive img-raised fit" 
				src="{{url('storage/medium_photos/'.$theRestImages->gallery_image)}}"
        srcset="{{url('storage/medium_photos/'.$theRestImages->gallery_image.' 860w')}}" 
        srcset="{{url('storage/medium_photos/'.$theRestImages->gallery_image.' 640w')}}" 
        alt="{{$theRestImages->alternative_text}}">
			</a>
		</div>
	</div>
@endforeach
</div>


<div class="container-fluid hidden-sm hidden-md hidden-lg">
    <h4>Latest Projects</h4>
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
                  <a href="{{ url('projects/'.$widget->title) }}" type="button" class="btn btn-danger btn-simple" rel="tooltip" data-placement="bottom" title="" data-original-title="Read more..." rel="noopener" >
                  <i class="material-icons">search</i>
                  </a>           
                </div>
                </div>
                <div class="card-content">
                  <h4 class="title" id="title">{{ str_limit($widget->title,30) }}</h4>
                  @if($widget->views == 0)
                    <h5 class="category">No views</h5>
                  @elseif($widget->views == 1)
                    <h5 class="category">{{$widget->views}} download</h5>
                  @else
                    <h5 class="category">{{$widget->views}} views</h5>
                  @endif

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
    <h4>Latest photos</h4>
</div>
<div class="card-content table-responsive hidden-sm hidden-md hidden-lg">
    <table class="table text-center">
        <tr>  
@foreach ($photos as $p)
<td>
    <div class="card nospace">
        <a href="{{ url('photos/'.$p->unique_id) }}" rel="tooltip" data-placement="bottom" data-original-title="See more..">
            <img style="max-height:198px;" class="img-responsive img-raised fit" 
            src="{{url('storage/mobile_photos/'.$p->gallery_image.' 420w')}}"
            alt="{{$p->alternative_text}}">
        </a>
    </div>
</td>
@endforeach
</tr>
    </table>
</div>
@endsection